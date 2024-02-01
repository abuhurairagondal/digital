<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;
use App;
use Hash;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;


class API extends Controller
{





    public function reg_user(Request $req)
    {
        try {
            $validatedData = $req->validate([
                'full_name' => 'required',
                'phone' => 'required|unique:users',
                'email' => 'required|email|unique:users',
                'password' => 'required',
                'gender' => 'required',
                'country' => 'required'
            ]);

            $full_name = $req->input('full_name');
            $phone = $req->input('phone');
            $email = $req->input('email');
            $password = $req->input('password');
            $gender = $req->input('gender');
            $country = $req->input('country');
            $level = $req->input('level');

            $verificationToken = Str::random(40);

            $data = [
                'full_name' => $full_name,
                "phone" => $phone,
                "email" => $email,
                "password" => Hash::make($password),
                "gender" => $gender,
                "country" => $country,
                "level" => $level,
                "status" => 0,
                'verification_token' => $verificationToken,
            ];

            $insert = DB::table('users')->insert($data);

            if ($insert) {
                // Sending email logic here
                Mail::send('emails.email_verification', ['token' => $verificationToken], function ($message) use ($req) {
                    $message->from('info@zeexperts.com', 'Zeexpert');
                    $message->to($req->get('email'));
                    $message->subject('Verify Email Address');
                });

                return response()->json([
                    'success' => true,
                    'message' => 'Registered Successfully'
                ], 200);
            } else {
                return response()->json([
                    'error' => true,
                    'message' => 'Registration Failed, Technical Error'
                ], 400);
            }
        } catch (ValidationException $e) {
            // Validation failed, return JSON response with validation errors
            return response()->json([
                'error' => true,
                'message' => 'Validation Error',
                'errors' => $e->errors(),
            ], 400);
        } catch (\Exception $e) {
            // Other exceptions or errors
            return response()->json([
                'error' => true,
                'message' => 'Registration Failed, Technical Error'
            ], 400);
        }
    }




    function login_user(Request $request)
    {

        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );

        $user = User::where('email', $user_data['email'])->first();
        if ($user && Hash::check($user_data['password'], $user->password)) {

            if ($user->status == 1 && $user->level == 1) {
                Auth::login($user);

                return response()->json([
                    'success' => true,
                    'message' => 'Login Successfully',
                    'user' => [
                        'id' => $user['id'],
                        'name' => $user['full_name'],
                        'phone' => $user['phone'],
                        'email' => $user['email'],
                        'pic' => $user['pic'],

                    ]
                ], 200);

            } else {
                return response()->json([
                    'error' => true,
                    'message' => 'Login Failed'
                ], 400);
            }
        }

        return response()->json([
            'error' => true,
            'message' => 'Incorrect User Name or Password'
        ], 400);

    }



    public function save_bookcourse(Request $req)
    {


         // echo '<pre>';
         //    print_r($req);
         //    die();
        try {



            $validation = $req->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'phone' => 'required|unique:users,phone',
                'city' => 'required',
                'gender' => 'required',
                'course' => 'required',
                'amount' => 'required',
                // 'pic' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            ]);

            if ($validation) {
            // $pic = $req->file('pic');
            // $pic = time() . rand(1, 99) . '.' . $req->pic->extension();
            // //move file
            // $req->pic->move(public_path('uploads/receipt'), $pic);

                $data = [
                    "name" => $req->input('name'),
                    "email" => $req->input('email'),
                    "phone" => $req->input('phone'),
                    "gender" => $req->input('gender'),
                    "city" => $req->input('city'),
                    "course" => $req->input('course'),
                    "amount" => $req->input('amount'),
                    "pic" =>$req->input('pic'),
                    "course_mode" =>$req->input('course_mode'),


                ];

                $insert = DB::table('bookcourse')->insert($data);

                if ($insert) {
                  return response()->json([
                    'success' => true,
                    'message' => 'Registered Successfully'
                ], 200);
              } else {
                return response()->json([
                    'error' => true,
                    'message' => 'Registration Failed, Technical Error'
                ], 400);
            }
        } else {
            return response()->json([
                'error' => true,
                'message' => 'Registration Failed, Technical Error',
                'errors' => $validation
            ], 400);

        }
    } catch (ValidationException $e) {
            // Validation failed, return JSON response with validation errors
        return response()->json([
            'error' => true,
            'message' => 'Validation Error',
            'errors' => $e->errors(),
        ], 400);
    } catch (\Exception $e) {
            // Other exceptions or errors
        return response()->json([
            'error' => true,
            'message' => 'Registration Failed, Technical Error'
        ], 400);
    }



}



public function save_jobsform(Request $req)
{
    try {
        $validation = $req->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|unique:users,phone',
            'city' => 'required',
            'gender' => 'required',
                // Add any other validation rules for 'country', 'edu', 'cv', 'dec' if needed
        ]);
        if ($validation) {

            $data = [
                "name" => $req->input('name'),
                "email" => $req->input('email'),
                "phone" => $req->input('phone'),
                "gender" => $req->input('gender'),
                "city" => $req->input('city'),
                "country" => $req->input('country'),
                "edu" => $req->input('edu'),
                // 'cv' => Handle file upload and save the file path instead of 'get' method
                "dec" => $req->input('dec'),
                "cv" => $req->input('cv'),

            ];

            // Example for handling file upload (CV)
            if ($req->hasFile('cv')) {
                $cvFileName = $req->file('cv')->getClientOriginalName(); // Get file name
                $req->file('cv')->storeAs('cv_files', $cvFileName, 'public'); // Store file in a folder (e.g., cv_files) inside the 'public' disk
                $data['cv'] = $cvFileName; // Save file name/path to the database
            }

            $insert = DB::table('jobs_form')->insert($data);

            if ($insert) {


                return response()->json([
                    'success' => true,
                    'message' => 'Registered Successfully'
                ], 200);
            } else {
                return response()->json([
                    'error' => true,
                    'message' => 'Registration Failed, Technical Error'
                ], 400);
            }
        } else {
            return response()->json([
                'error' => true,
                'message' => 'Registration Failed, Technical Error',
                'errors' => $validation
            ], 400);
        }
    } catch (ValidationException $e) {
            // Validation failed, return JSON response with validation errors
        return response()->json([
            'error' => true,
            'message' => 'Validation Error',
            'errors' => $e->errors(),
        ], 400);
    } catch (\Exception $e) {
            // Other exceptions or errors
        return response()->json([
            'error' => true,
            'message' => 'Registration Failed, Technical Error'
        ], 400);
    }
}























public function all_blogs()
{
    $data = DB::select('SELECT blog_id,title,pic FROM blogs WHERE `type` = 0');

    header('Content-Type: application/json');
    echo json_encode($data, JSON_PRETTY_PRINT);
    die();
}


public function all_courseprice()
{
    $data = DB::select('SELECT title,live_price,recorded_price FROM courses');


    header('Content-Type: application/json');
    echo json_encode($data, JSON_PRETTY_PRINT);
    die();
}




public function all_blogsurdu()
{
    try {
        $data = DB::select('SELECT blog_id, title, pic FROM blogs WHERE `type` = 1');

        if ($data) {
            header('Content-Type: application/json; charset=utf-8');
                // Convert Urdu characters to Unicode escape sequences
            $encoded_data = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
            echo $encoded_data;
        } else {
                // Return an empty array or appropriate message if no data found
            echo json_encode([], JSON_PRETTY_PRINT);
        }
    } catch (Exception $e) {
            // Handle the exception - You can log the error or return an error message
        echo json_encode(['error' => $e->getMessage()], JSON_PRETTY_PRINT);
    }
    die();
}


public function single_blog(Request $request)
{
    $blog_id = $request->input('blog_id');
    $blog = DB::select('SELECT * FROM blogs
        WHERE blog_id = "' . $blog_id . '"
        ');

        // Decode HTML entities and remove HTML tags from the 'detail' field
    $blog[0]->detail = html_entity_decode(strip_tags($blog[0]->detail));

    return response()->json($blog, 200, [], JSON_PRETTY_PRINT);
}
public function single_blogurdu(Request $request)
{
    $blog_id = $request->input('blog_id');
    $blog = DB::select('SELECT * FROM blogs
      WHERE blog_id = "' . $blog_id . '"
      ');

    if (!empty($blog)) {
            // Decode HTML entities and remove HTML tags from the 'detail' field
        $blog[0]->detail = html_entity_decode(strip_tags($blog[0]->detail));

            // Convert Urdu characters to Unicode escape sequences
        $encoded_blog = json_encode($blog, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        return response($encoded_blog, 200)
        ->header('Content-Type', 'application/json; charset=utf-8');
    } else {
        return response()->json(['error' => 'Blog not found'], 404);
    }
}





public function all_courses()
{
    $data = DB::select('SELECT courses_id,title,pic FROM courses');

    header('Content-Type: application/json');
    echo json_encode($data, JSON_PRETTY_PRINT);
    die();
}
public function single_courses(Request $request)
{
    $courses_id = $request->input('courses_id');
    $blog = DB::select('SELECT * FROM courses
      WHERE courses_id = "' . $courses_id . '"
      ');

        // Decode HTML entities and remove HTML tags from the 'detail' field
    $blog[0]->detail = html_entity_decode(strip_tags($blog[0]->detail));

    return response()->json($blog, 200, [], JSON_PRETTY_PRINT);
}
public function all_news()
{
    $data = DB::select('SELECT news_id,title,pic FROM news ORDER BY news_id DESC');

    header('Content-Type: application/json');
    echo json_encode($data, JSON_PRETTY_PRINT);
    die();
}

public function single_news(Request $request)
{
    $news_id = $request->input('news_id');
    $blog = DB::select('SELECT * FROM news
      WHERE news_id = "' . $news_id . '"
      ');

        // Decode HTML entities and remove HTML tags from the 'detail' field
    $blog[0]->detail = html_entity_decode(strip_tags($blog[0]->detail));

    return response()->json($blog, 200, [], JSON_PRETTY_PRINT);
}
public function all_jobs()
{
    $data = DB::select('SELECT jobs_id,title,pic FROM jobs');

    header('Content-Type: application/json');
    echo json_encode($data, JSON_PRETTY_PRINT);
    die();
}
public function single_jobs(Request $request)
{
    $jobs_id = $request->input('jobs_id');
    $blog = DB::select('SELECT * FROM jobs
      WHERE jobs_id = "' . $jobs_id . '"
      ');

        // Decode HTML entities and remove HTML tags from the 'detail' field
    $blog[0]->detail = html_entity_decode(strip_tags($blog[0]->detail));

    return response()->json($blog, 200, [], JSON_PRETTY_PRINT);
}

}


