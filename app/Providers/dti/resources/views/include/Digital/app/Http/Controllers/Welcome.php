<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcome extends Controller
{



    public function index()
{
    return view('/index');
}
public function index2()
{
    return view('/index-2');
}
public function index3()
{
    return view('/index-3');
}
public function index4()
{
    return view('/index-4');
}


public function listings_list_with_sidebar()
{
    return view('/listings-list-with-sidebar');
}
public function listings_list_with_map()
{
    return view('/listings-list-with-map');
}
public function listings_grid_compact_with_sidebar()
{
    return view('/listings-grid-compact-with-sidebar');
}
public function listings_half_map_list()
{
    return view('/listings-half-map-list');
}
public function listings_half_map_grid_compact()
{
    return view('/listings-half-map-grid-compact');
}


public function singleproperty1()
{
    return view('/singleproperty1');
}
public function singleproperty2()
{
    return view('/singleproperty2');
}
public function my_profile()
{
    return view('/my-profile');
}

public function my_bookmarks()
{
    return view('/my-bookmarks');
}
public function my_properties()
{
    return view('/my-properties');
}
public function add_new_property()
{
    return view('/add_new_property');
}
public function change_password()
{
    return view('/change-password');
}
public function agents_list()
{
    return view('/agents-list');
}
public function agents_profile()
{
    return view('/agents-profile');
}


public function agency_list()
{
    return view('/agency_list');
}
public function agency_profile()
{
    return view('/agency_profile');
}


public function about()
{
    return view('/about');
}
public function login()
{
    return view('/login');
}


public function register()
{
    return view('/register');
}
public function pricing_tables()
{
    return view('/pricing-tables');
}
public function typography()
{
    return view('/typography');
}
public function compare_properties()
{
    return view('/compare-properties');
}

public function user_elements()
{
    return view('/user_elements');
}
public function icon_cheatsheet()
{
    return view('/icon_cheatsheet');
}
public function blog_list_right_sidebar()
{
    return view('/blog_list_right_sidebar');
}
public function blog_list_left_sidebar()
{
    return view('/blog_list_left_sidebar');
}
public function blog_detail_right_sidebar()
{
    return view('/blog_detail_right_sidebar');
}
public function blog_detail_left_sidebar()
{
    return view('/blog_detail_left_sidebar');
}
public function contact()
{
    return view('/contact');
}
public function utf_signin_dialog_block()
{
    return view('/utf-signin-dialog-block');
}


public function allcatgory()
{
    return view('/all_categorie');
}

// footer






    // public function index()
    // {
    //     $courses = DB::select('SELECT * FROM `courses` ORDER BY `courses_id` DESC LIMIT 3;
    //     ');
    //     $jobs = DB::select('SELECT * FROM `jobs` ORDER BY `jobs_id` DESC LIMIT 3;
    //     ');
    //    $news = DB::select('SELECT * FROM `news` ORDER BY `news_id` DESC LIMIT 3;
    //     ');
    //    return view('/index',[
    //     'courses'=>$courses,
    //     'jobs'=>$jobs,
    //     'news'=>$news,
    
    
    // ]);
    // }




    //
}


