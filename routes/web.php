<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Welcome;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\API;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    //Artisan::call('log:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    //session()->flush();
    return "Cache, Views, Logs, Routes, Config, and Session have been cleared!";
});


Route::get('/home', function () {
    return view('blog_detail_right_sidebar');
});

Route::get('/h', function () {
    return view('index');
});

Route::get('dashboard', [Welcome::class, 'dashboard']);



Route::get('/send-email', [welcome::class,'sendEmail']);

 // navbar
Route::get('/', [welcome::class,'index']);
Route::get('/index2', [welcome::class,'index2']);
Route::get('/index3', [welcome::class,'index3']);
Route::get('/index4', [welcome::class,'index4']);

Route::get('/listings-list-with-sidebar', [welcome::class,'listings_list_with_sidebar']);
Route::get('/listings_list_with_map', [welcome::class,'listings_list_with_map']);
Route::get('/listings_grid_compact_with_sidebar', [welcome::class,'listings_grid_compact_with_sidebar']);












Route::get('/listings_half_map_list', [welcome::class,'listings_half_map_list']);

Route::get('/listings_half_map_grid_compact', [welcome::class,'listings_half_map_grid_compact']);
Route::get('/singleproperty1', [welcome::class,'singleproperty1']);
Route::get('/singleproperty2', [welcome::class,'singleproperty2']);

Route::get('/my_profile', [welcome::class,'my_profile']);
Route::get('/my_bookmarks', [welcome::class,'my_bookmarks']);
Route::get('/my_properties', [welcome::class,'my_properties']);

Route::get('/add_new_property', [welcome::class,'add_new_property']);
Route::get('/change_password', [welcome::class,'change_password']);
Route::get('/agents_list', [welcome::class,'agents_list']);
Route::get('/agents_profile', [welcome::class,'agents_profile']);
Route::get('/agency_list', [welcome::class,'agency_list']);
Route::get('/agency_profile', [welcome::class,'agency_profile']);
Route::get('/about', [welcome::class,'about']);


Route::get('/login', [welcome::class,'login']);
Route::get('/register', [welcome::class,'register']);
Route::get('/pricing_tables', [welcome::class,'pricing_tables']);
Route::get('/typography', [welcome::class,'typography']);

Route::get('/compare_properties', [welcome::class,'compare_properties']);
Route::get('/user_elements', [welcome::class,'user_elements']);
Route::get('/icon_cheatsheet', [welcome::class,'icon_cheatsheet']);
Route::get('/blog_list_right_sidebar', [welcome::class,'blog_list_right_sidebar']);
Route::get('/blog_list_left_sidebar', [welcome::class,'blog_list_left_sidebar']);

Route::get('/blog_detail_right_sidebar', [welcome::class,'blog_detail_right_sidebar']);
Route::get('/blog_detail_left_sidebar', [welcome::class,'blog_detail_left_sidebar']);
Route::get('/contact', [welcome::class,'contact']);
Route::get('/utf_signin_dialog_block', [welcome::class,'utf_signin_dialog_block']);
Route::get('/allcatgory', [welcome::class,'allcatgory']);


// footer


