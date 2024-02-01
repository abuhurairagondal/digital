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
use Illuminate\Support\Facades\Mail;


class Welcome extends Controller
{

     public function muneeb()
    {
        return view('emails.email_verification');
    }

    public function sendEmail(Request $request)
    {
        try {
            Mail::send('emails.test_mail', [], function ($message) {
                $message->to('salmanbhatti2010@gmail.com');
                $message->from('noreply@waqasbhattilearning.com', 'Waqas Bhatti Learning');
                $message->subject('Test Email');
            });
            echo 'Email Sent Successfully';
        } catch (Exception $e) {
            echo 'Not Sent Error';
        }
    }



    function postlogin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if (!$user) {
            // User not found
                return redirect('/login')->withInput()->with('error', 'User not found.');
            }

            if ($user->status == 0) {
            // Inactive user
            Auth::logout(); // Log out the user
            return redirect('/login')->withInput()->with('error', 'User is inactive.');
        }

        if ($user->level == 0) {
            // admin user
            return redirect('/dashboard');
        }
        if ($user->level == 1) {
            // Normal user
            return redirect('/');
        }

        // Handle other user types if needed

    } else {
        // Incorrect credentials
        return redirect('/login')->withInput()->with('error', 'Incorrect Username or Password');
    }
}



function logout(Request $req){
        //Session::flush();
    Auth::logout();
    return redirect('login')->with('success', 'Log Out Successfully');
}



public function user_profile()
{
    return view('/auth.user_profile');
}

public function profile_update(Request $request)
{
    $user = Auth::user();

    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'nullable|min:6',
        'profile_picture' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $user->name = $request->input('name');
    $user->email = $request->input('email');

    if ($request->filled('password')) {
        $user->password = bcrypt($request->input('password'));
    }

    if ($request->hasFile('profile_picture')) {
        $image = $request->file('profile_picture');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/profile'), $imageName);
        $user->profile_picture = $imageName;
    }

    $user->save();

    return redirect('/user_profile')->with('success', 'Profile updated successfully!');
}

    // front end user side


public function index()
{
    $courses = DB::select('SELECT * FROM `courses` ORDER BY `courses_id` DESC LIMIT 3;
    ');
    $jobs = DB::select('SELECT * FROM `jobs` ORDER BY `jobs_id` DESC LIMIT 3;
    ');
   $news = DB::select('SELECT * FROM `news` ORDER BY `news_id` DESC LIMIT 3;
    ');
   return view('/index',[
    'courses'=>$courses,
    'jobs'=>$jobs,
    'news'=>$news,


]);
}
public function about()
{
    return view('/about');
}
public function bookcourse($id)
{
    $selected_course = DB::select('SELECT courses_id, title, recorded_price FROM courses WHERE courses_id = "'.$id.'"');
    // echo '<pre>';
    // print_r($selected_course);
    // die();
    $courses = DB::select('SELECT courses_id, title,live_price,recorded_price FROM courses');
    return view('/bookcourse_form',[
     'data'=>$courses,
     'selected_course'=>$selected_course
 ]);


}

public function jobapply()
{
    return view('/auth.job_form');
}

public function blogs()
{
    $blogs = DB::table('blogs')->where('type', 0)->paginate(9);
    return view('blog', ['blogs' => $blogs]);
}

public function urdublogs()

{

    $blogs = DB::select('SELECT * FROM blogs WHERE `type` = 1');
    return view('/urdublog',[
        'blogs'=>$blogs
    ]);
}


public function courses()
{
   $courses = DB::select('SELECT * FROM courses');
   return view('/courses',[
    'courses'=>$courses
]);


}



public function checkcourse()
{
   $courses = DB::select('SELECT * FROM courses');
   return view('/auth.price',[
    'data'=>$courses
]);


}


public function jobs()
{
    $jobs = DB::select('SELECT * FROM jobs');

    return view('/jobs', [
        'jobs' => $jobs
    ]);
}
public function news()
{
  $news = DB::select('SELECT * FROM news ORDER BY news_id DESC');

  return view('/news', [
    'news' => $news
]);
}

public function contact()
{
    return view('/contact');
}
public function testimonial()
{
    return view('/testimonial');
}
public function login()
{
    return view('auth.login');
}
public function register()
{
    return view('/auth.register');
}
public function reset()
{
    return view('/auth.rest_password');
}
public function verify_otp()
{
    return view('/auth.verify_otp');
}

public function verify_email(Request $req)
{
    $validation = $req->validate([
        'token' => 'required',
        'otp' => 'required'
    ]);

    if ($validation) {
        $token = $req->get('token');
        $otp = $req->get('otp');

        // Retrieve user by verification token and verify OTP
        $user = DB::table('users')->where('verificationToken', $token)->first();

        // echo $user->otp;
        // die();

        if ($user && $user->otp == $otp) {
            // OTP matched, update user status
            $update = DB::table('users')->where('verificationToken', $token)->update([
                "status" => 1,
                "verificationToken" => 'verified',
                "otp" => 1
            ]);

            if ($update) {
                return redirect('/login')->with('success', 'OTP Verified Successfully');
            } else {
                return back()->withInput()->with('error', 'Technical Error');
            }
        } else {
            return back()->withInput()->with('error', 'Incorrect OTP');
        }
    } else {
        return back()->withInput()->withErrors($validation);
    }
}


public function job_form()
{
    return view('/auth.job_form');
}
public function forgot_password()
{
    return view('auth.forgot_password');
}

    //=======Admin Side..........
public function dashboard()
{
    return view('admin.dashboard');
}
    //======save products........
public function add_product()
{
    $products = DB::select('SELECT * FROM products');
    $category = DB::select('SELECT * FROM add_category');
    $color = DB::select('SELECT * FROM add_color');


    return view('admin.add_product', [
        'products' => $products,
        'category' => $category,
        'color' => $color
    ]);
}

    //======save news........
public function add_news()
{
    $news = DB::select('SELECT * FROM news');

    return view('admin.add_news', [
        'news' => $news
    ]);
}

    //======save news........
public function add_jobs()
{
    $jobs = DB::select('SELECT * FROM jobs');

    return view('admin.add_jobs', [
        'jobs' => $jobs
    ]);
}

    //======save blogs............
public function add_blogs()
{
    $blogs = DB::select('SELECT * FROM blogs  WHERE `type` = 0');
    $urdublog = DB::select('SELECT * FROM blogs WHERE `type` = 1 ');

    return view('admin.add_blogs', [
        'blogs' => $blogs,
        'urdu' => $urdublog

    ]);
}
public function add_courses()
{
    $courses = DB::select('SELECT * FROM courses');
    return view('admin.add_courses', [
        'courses' => $courses
    ]);
}


public function delete_blogs($blog_id)
{
    $delete = DB::delete('DELETE FROM blogs WHERE blog_id = ?', [$blog_id]);
    if ($delete) {
        return back()->with('success', 'Deleted Successfully');
    } else {
        return back()->with('error', 'Data Not Deleted, Technical Error');
    }
}
public function delete_jobs($jobs_id)
{
    $delete = DB::delete('DELETE FROM jobs WHERE jobs_id = ?', [$jobs_id]);
    if ($delete) {
        return back()->with('success', 'Deleted Successfully');
    } else {
        return back()->with('error', 'Data Not Deleted, Technical Error');
    }
}
public function delete_news($news_id)
{
    $delete = DB::delete('DELETE FROM news WHERE news_id = ?', [$news_id]);
    if ($delete) {
        return back()->with('success', 'Deleted Successfully');
    } else {
        return back()->with('error', 'Data Not Deleted, Technical Error');
    }
}


    //edit blog
public function edit_blogs($blog_id)
{
    $blogs = DB::table('blogs')
    ->where('blog_id', '=', $blog_id)
    ->get();
    $blogs = json_decode($blogs, true);
    return view('admin.edit_blogs', ['blogs' => $blogs]);
}
public function edit_courses($courses_id)
{
    $blogs = DB::table('courses')
    ->where('courses_id', '=', $courses_id)
    ->get();
    $blogs = json_decode($blogs, true);
    return view('admin.edit_courses', ['blogs' => $blogs]);
}
public function edit_news($id)
{
    $news = DB::table('news')
    ->where('news_id', '=', $id)
    ->get();

    $news = json_decode($news, true);

    return view('admin.edit_news', ['news' => $news]);
}

public function edit_jobs($jobs_id)
{
    $jobs = DB::table('jobs')
    ->where('jobs_id', '=', $jobs_id)
    ->get();
    $jobs = json_decode($jobs, true);
    return view('admin.edit_jobs', ['jobs' => $jobs]);
}

public function delete_courses($courses_id)
{
    $delete = DB::delete('DELETE FROM courses WHERE courses_id = ?', [$courses_id]);
    if ($delete) {
        return back()->with('success', 'Deleted Successfully');
    } else {
        return back()->with('error', 'Data Not Deleted, Technical Error');
    }
}
public function contact_list()
{
    return view('admin.contact_list');
}
    //======save user............
public function add_users()
{
    $users = DB::select('SELECT * FROM users');
    $jobs_form = DB::select('SELECT * FROM jobs_form');
    $bookcourse = DB::select('SELECT * FROM bookcourse');


    return view('admin.add_users', [
        'users' => $users,
        'jobsfrom' => $jobs_form,
        'bookcourse' => $bookcourse,


    ]);
}
public function delete_users($id)
{
    $delete = DB::delete('DELETE FROM users WHERE id = ?', [$id]);
    if ($delete) {
        return back()->with('success', 'Deleted Successfully');
    } else {
        return back()->with('error', 'Data Not Deleted, Technical Error');
    }
}


    // details pages
public function course_detail($slug)
{
    $course = DB::table('courses')
    ->where('slug', '=', $slug)
    ->get();
    $courses = DB::select('SELECT * FROM courses ORDER BY courses_id DESC LIMIT 10');

    $course = json_decode($course, true);
    return view('/details_courses',[
        'course' => $course,
        'courses' => $courses
    ]);
}
public function jobs_detail($slug)
{
    $course = DB::table('jobs')
    ->where('slug', '=', $slug)
    ->get();
    $courses = DB::select('SELECT * FROM jobs ORDER BY jobs_id DESC LIMIT 10');

    $course = json_decode($course, true);
    return view('/details_jobs',[
        'course' => $course,
        'courses' => $courses
    ]);
}

public function news_detail($slug)
{
    $course = DB::table('news')
    ->where('slug', '=', $slug)
    ->get();
    $courses = DB::select('SELECT * FROM news ORDER BY news_id DESC LIMIT 10');

    $course = json_decode($course, true);
    return view('/details_news',[
        'course' => $course,
        'courses' => $courses
    ]);
}

public function blogs_detail($slug)
{
    $course = DB::table('blogs')
    ->where('slug', '=', $slug)
    ->get();
    $courses = DB::select('SELECT * FROM blogs ORDER BY blog_id DESC LIMIT 10');

    $course = json_decode($course, true);
    return view('/details_bolgs',[
        'course' => $course,
        'courses' => $courses
    ]);
}


    //===end.......
}


