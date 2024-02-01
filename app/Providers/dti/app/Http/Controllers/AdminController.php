<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App;
use Session;
use Hash;
use Carbon\Carbon;
use App\Http\Controllers\Course;

use Illuminate\Support\Facades\File;

class AdminController extends Controller
{


    //========Save Products.........
    public function save_product(request $req)
    {

        // echo "Ok";
        // die();

        $validation = $req->validate([
            'title' => 'required',
            'add_category' => 'required',
            'pic' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'price' => 'required',
            'color' => 'required'

        ]);

        if ($validation) {
            $slug = $req->get('title');
            $slug = str_replace(' ', '-', $slug); // Replaces all spaces with hyphens.
            $slug = preg_replace('/[^A-Za-z0-9\-]?/', '', $slug); // Removes special chars.
            $slug = preg_replace('/-+/', '-', $slug); // Replaces multiple hyphens with single one.

            $pic = $req->file('pic');
            $pic = time() . rand(1, 99) . '.' . $req->pic->extension();
            //move file
            $req->pic->move(public_path('uploads/product'), $pic);


            $data = array(
                "title" => $req->get('title'),
                "slug" => strtolower($slug),
                "price" => $req->get('price'),
                "add_category" => $req->get('add_category'),
                "color" => $req->get('color'),
                "size" => $req->get('size'),
                "detail" => $req->get('detail'),
                "pic" => $pic,

            );


            $insert = DB::table('products')->insert($data);

            if ($insert) {
                return back()->with('success', 'Saved Successfully');
            } else {
                return back()->with('error', 'Data Not Saved, Technical Error');
            }
        } else {

            return back()->withInput()->withErrors($validation);
        }
    }
    //==========add_category.............
    public function save_category(request $req)
    {

        // echo "Ok";
        // die();

        $validation = $req->validate([
            'add_category' => 'required',
            'subcategory' => 'required'

        ]);

        if ($validation) {


            $data = array(
                "add_category" => $req->get('add_category'),
                "subcategory" => $req->get('subcategory'),

            );


            $insert = DB::table('add_category')->insert($data);

            if ($insert) {
                return back()->with('success', 'Saved Successfully');
            } else {
                return back()->with('error', 'Data Not Saved, Technical Error');
            }
        } else {

            return back()->withInput()->withErrors($validation);
        }
    }

    //==========save_user.............
    public function save_users(request $req)
    {

        $validation = $req->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|unique:users,phone',
            'password' => 'required|min:8',
            'city' => 'required',
            'gender' => 'required',
        ]);

        if ($validation) {
            $password = $req->get('password'); // Get the actual password from the request
            $hashedPassword = Hash::make($password);

            $otp = rand(100000, 999999);
            $verificationToken = Str::random(40);

            $data = array(
                "name" => $req->get('name'),
                "email" => $req->get('email'),
                "password" => $hashedPassword, // Save the hashed password
                "phone" => $req->get('phone'),
                "gender" => $req->get('gender'),
                "city" => $req->get('city'),
                "level" => 1,
                "status" => 0,
                "verificationToken" => $verificationToken,
                "otp" => $otp,
            );

            $insert = DB::table('users')->insert($data);

            Mail::send('emails.email_verification', [
                'verificationToken' => $verificationToken,
                'otp' => $otp,
            ], function ($message) use ($req) {
                $message->from('noreply@waqasbhattilearning.com', 'Waqas Bhatti Learning');
                $message->to($req->get('email'));
                $message->subject('Verify Email Address');
            });


            if ($insert) {
                return redirect('/verify/' . $verificationToken)->with('success', 'Enter OTP Received in Email');

            } else {
                return back()->withInput()->with('error', 'Data Not Saved, Technical Error');
            }
        } else {
            return back()->withInput()->withErrors($validation);
        }
    }


    // save jobs_form
    public function save_jobsform(Request $req)
    {
        $validatedData = $req->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|unique:users,phone',
            'city' => 'required',
            'gender' => 'required',
            // Add any other validation rules for 'country', 'edu', 'cv', 'dec' if needed
        ]);

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
            return back()->with('success', 'Saved Successfully');
        } else {
            return back()->with('error', 'Data Not Saved, Technical Error');
        }
    }



// save bookcourse
    public function save_bookcourse(Request $req)
    {


         // echo '<pre>';
         //    print_r($req);
         //    die();


        $validation = $req->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',

            'phone' => 'required|unique:users,phone',
            'city' => 'required',
            'gender' => 'required',
            'course' => 'required',
            // 'course_mode' => 'course_mode',
            'amount' => 'required',
            'payment_method'=> 'required',
            'pic' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        if ($validation) {
            $pic = $req->file('pic');
            $pic = time() . rand(1, 99) . '.' . $req->pic->extension();
            //move file
            $req->pic->move(public_path('uploads/receipt'), $pic);

            $data = [
                "name" => $req->input('name'),
                "email" => $req->input('email'),
                "phone" => $req->input('phone'),
                "gender" => $req->input('gender'),
                "city" => $req->input('city'),
                "course" => $req->input('course'),
                "course_mode" => $req->input('course_mode'),
                "amount" => $req->input('amount'),
                "payment_method" => $req->input('payment_method'),


                "pic" => $pic,
            ];

            $insert = DB::table('bookcourse')->insert($data);

            if ($insert) {
                return back()->with('success', 'Saved Successfully');
            } else {
                return back()->with('error', 'Data Not Saved, Technical Error');
            }
        } else {
            return back()->withInput()->withErrors($validation);
        }
    }




    //save news letter
    public function save_newsletter(request $req)
    {

        $validation = $req->validate([
            'email' => 'required|email|unique:users,email',

        ]);

        if ($validation) {


            $data = array(

                "email" => $req->get('email'),

            );

            // echo '<pre>';
            // print_r($data);
            // die();

            $insert = DB::table('news_letter')->insert($data);

            if ($insert) {
                return back()->with('success', 'Subscribed Successfully');
            } else {
                return back()->with('error', 'Data Not Saved, Technical Error');
            }
        } else {
            return back()->withInput()->withErrors($validation);
        }
    }

    //==========save_color.............
    public function save_color(request $req)
    {

        // echo "Ok";
        // die();

        $validation = $req->validate([
            'color' => 'required'
        ]);

        if ($validation) {
            $data = array(
                "color" => $req->get('color'),
            );
            $insert = DB::table('add_color')->insert($data);

            if ($insert) {
                return back()->with('success', 'Saved Successfully');
            } else {
                return back()->with('error', 'Data Not Saved, Technical Error');
            }
        } else {

            return back()->withInput()->withErrors($validation);
        }
    }
    //==========save_size.............
    public function save_size(request $req)
    {

        // echo "Ok";
        // die();

        $validation = $req->validate([
            'size' => 'required'
        ]);
        if ($validation) {
            $data = array(
                "size" => $req->get('size'),
            );
            $insert = DB::table('add_size')->insert($data);

            if ($insert) {
                return back()->with('success', 'Saved Successfully');
            } else {
                return back()->with('error', 'Data Not Saved, Technical Error');
            }
        } else {

            return back()->withInput()->withErrors($validation);
        }
    }
    //==========save_blogs...........

    public function save_blogs(request $req)
    {

        $validation = $req->validate([
            'title' => 'required',
            'pic' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'detail' => 'required',
            'slug' => 'required',
            'type' => 'required',


        ]);

        if ($validation) {

            $pic = $req->file('pic');
            $pic = time() . rand(1, 99) . '.' . $req->pic->extension();
            //move file
            $req->pic->move(public_path('uploads/blogs'), $pic);

            $data = array(
                "title" => $req->get('title'),
                "detail" => $req->get('detail'),
                "pic" => $pic,
                "slug" => $req->get('slug'),
                "type" => $req->get('type'),


            );

            // echo '<pre>';
            // print_r($data);
            // die();

            $insert = DB::table('blogs')->insert($data);

            if ($insert) {
                return back()->with('success', 'Saved Successfully');
            } else {
                return back()->with('error', 'Data Not Saved, Technical Error');
            }
        } else {

            return back()->withInput()->withErrors($validation);
        }
    }




    //save courses
    public function save_courses(request $req)
    {

        // echo "Ok";
        // die();

        $validation = $req->validate([
            'title' => 'required',
            'pic' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'detail' => 'required',
            'slug' => 'required',
        ]);

        if ($validation) {


            $pic = $req->file('pic');
            $pic = time() . rand(1, 99) . '.' . $req->pic->extension();
            //move file
            $req->pic->move(public_path('uploads/courses'), $pic);


            $data = array(
                "title" => $req->get('title'),
                "detail" => $req->get('detail'),
                "pic" => $pic,
                "slug" => $req->get('slug'),
                "recorded_price" => $req->get('recorded_price'),

                "live_price" => $req->get('live_price'),



            );


            $insert = DB::table('courses')->insert($data);

            if ($insert) {
                return back()->with('success', 'Saved Successfully');
            } else {
                return back()->with('error', 'Data Not Saved, Technical Error');
            }
        } else {

            return back()->withInput()->withErrors($validation);
        }
    }

    //save courses
    public function save_jobs(request $req)
    {

        // echo "Ok";
        // die();

        $validation = $req->validate([
            'title' => 'required',
            'pic' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'detail' => 'required',
            'slug' => 'required',
        ]);

        if ($validation) {


            $pic = $req->file('pic');
            $pic = time() . rand(1, 99) . '.' . $req->pic->extension();
            //move file
            $req->pic->move(public_path('uploads/jobs'), $pic);


            $data = array(
                "title" => $req->get('title'),
                "detail" => $req->get('detail'),
                "pic" => $pic,
                "slug" => $req->get('slug'),

            );


            $insert = DB::table('jobs')->insert($data);

            if ($insert) {
                return back()->with('success', 'Saved Successfully');
            } else {
                return back()->with('error', 'Data Not Saved, Technical Error');
            }
        } else {

            return back()->withInput()->withErrors($validation);
        }
    }

    //save courses
    public function save_news(request $req)
    {

        // echo "Ok";
        // die();

        $validation = $req->validate([
            'title' => 'required',
            'pic' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'detail' => 'required',
            'slug' => 'required',
        ]);

        if ($validation) {


            $pic = $req->file('pic');
            $pic = time() . rand(1, 99) . '.' . $req->pic->extension();
            //move file
            $req->pic->move(public_path('uploads/news'), $pic);


            $data = array(
                "title" => $req->get('title'),
                "detail" => $req->get('detail'),
                "pic" => $pic,
                "slug" => $req->get('slug'),

            );


            $insert = DB::table('news')->insert($data);

            if ($insert) {
                return back()->with('success', 'Saved Successfully');
            } else {
                return back()->with('error', 'Data Not Saved, Technical Error');
            }
        } else {

            return back()->withInput()->withErrors($validation);
        }
    }

    //=========update_blogs========

    function update_blogs(Request $req)
    {
        $validation = $req->validate([
            'title' => 'required',
            'detail' => 'required',
            'slug' => 'required',
            'pic' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        if ($validation) {
            $id = $req->get('blog_id');
            $pic = $req->file('pic');
            $oldPicName = $req->get('hidden_pic');

            if (isset($pic)) {
                // If a new picture is uploaded, delete the old picture
                if ($oldPicName && File::exists(public_path('uploads/blogs/' . $oldPicName))) {
                    File::delete(public_path('uploads/blogs/' . $oldPicName));
                }

                $picName = time() . '.' . $req->pic->extension();
                // Move the new file
                $req->pic->move(public_path('uploads/blogs'), $picName);
            } else {
                // If no new picture is uploaded, keep the old picture
                $picName = $oldPicName;
            }

            $update = DB::table('blogs')->where('blog_id', $id)->update([
                "title" => $req->get('title'),
                "slug" => $req->get('slug'),
                "pic" => $picName,
                "detail" => $req->get('detail'),
            ]);

            if ($update) {
                return back()->with('success', 'Updated Successfully');
            } else {
                return back()->with('error', 'Data Not Updated, Technical Error');
            }
        } else {
            return back()->withInput()->withErrors($validation);
        }
    }

    // update courses


    function update_courses(Request $req)
    {
        $validation = $req->validate([
            'title' => 'required',
            'detail' => 'required',
            'slug' => 'required',
            'pic' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        if ($validation) {
            $id = $req->get('courses_id');
            $pic = $req->file('pic');
            $oldPicName = $req->get('hidden_pic');

            if (isset($pic)) {
                // If a new picture is uploaded, delete the old picture
                if ($oldPicName && File::exists(public_path('uploads/courses/' . $oldPicName))) {
                    File::delete(public_path('uploads/courses/' . $oldPicName));
                }

                $picName = time() . '.' . $req->pic->extension();
                // Move the new file
                $req->pic->move(public_path('uploads/courses'), $picName);
            } else {
                // If no new picture is uploaded, keep the old picture
                $picName = $oldPicName;
            }

            $update = DB::table('courses')->where('courses_id', $id)->update([
                "title" => $req->get('title'),
                "slug" => $req->get('slug'),
                "pic" => $picName,
                "detail" => $req->get('detail'),
                "recorded_price" => $req->get('recorded_price'),

                "live_price" => $req->get('live_price'),

            ]);

            if ($update) {
                return back()->with('success', 'Updated Successfully');
            } else {
                return back()->with('error', 'Data Not Updated, Technical Error');
            }
        } else {
            return back()->withInput()->withErrors($validation);
        }
    }




    //=========update_jobs========
    function update_jobs(Request $req)
    {

        $validation = $req->validate([
            'title' => 'required',
            'detail' => 'required'
        ]);

        if ($validation) {
            $id = $req->get('jobs_id');
            $pic = $req->file('pic');
            if (isset($pic)) {
                $pic_name = time() . '.' . $req->pic->extension();
                //move file
                $req->pic->move(public_path('uploads/jobs'), $pic_name);
            } else {
                $pic_name = $req->get('hidden_pic');
            }


            $update = DB::table('jobs')->where('jobs_id', $id)->update([
                "title" => $req->get('title'),
                "pic" => $pic_name,
                "detail" => $req->get('detail')

            ]);

            if ($update) {
                return back()->with('success', 'Updated Successfully');
            } else {
                return back()->with('error', 'Data Not Updated, Technical Error');
            }
        } else {

            return back()->withInput()->withErrors($validation);
        }
    }



    //=========update_news========
    function update_news(Request $req)
    {

        $validation = $req->validate([
            'title' => 'required',
            'detail' => 'required'
        ]);

        if ($validation) {
            $id = $req->get('news_id');
            $pic = $req->file('pic');
            if (isset($pic)) {
                $pic_name = time() . '.' . $req->pic->extension();
                //move file
                $req->pic->move(public_path('uploads/news'), $pic_name);
            } else {
                $pic_name = $req->get('hidden_pic');
            }


            $update = DB::table('news')->where('news_id', $id)->update([
                "title" => $req->get('title'),
                "pic" => $pic_name,
                "detail" => $req->get('detail')

            ]);

            if ($update) {
                return back()->with('success', 'Updated Successfully');
            } else {
                return back()->with('error', 'Data Not Updated, Technical Error');
            }
        } else {

            return back()->withInput()->withErrors($validation);
        }
    }












}
