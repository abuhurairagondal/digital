<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Welcome;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\API;
use Illuminate\Http\Request;


require_once "mobile_api.php";

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    //Artisan::call('log:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    //session()->flush();
    return "Cache, Views, Logs, Routes, Config, and Session have been cleared!";
});


Route::get('/send-email', [Welcome::class,'sendEmail']);


Route::get('/', [Welcome::class, 'index']);
Route::get('about', [Welcome::class, 'about']);
Route::get('blogs', [Welcome::class, 'blogs']);
Route::get('urdublogs', [Welcome::class, 'urdublogs']);

Route::get('courses', [Welcome::class, 'courses']);
Route::get('check', [Welcome::class, 'checkcourse']);

Route::get('/course/{slug}', [Welcome::class, 'course_detail']);
Route::get('/jobs/{slug}', [Welcome::class, 'jobs_detail']);
Route::get('/news/{slug}', [Welcome::class, 'news_detail']);
Route::get('/blogs/{slug}', [Welcome::class, 'blogs_detail']);

Route::get('/jobs', [Welcome::class, 'jobs']);
Route::get('/news', [Welcome::class, 'news']);
Route::get('/contact', [Welcome::class, 'contact']);
Route::get('/jobapply', [Welcome::class, 'jobapply']);
Route::get('/bookcourse/{id}', [Welcome::class, 'bookcourse']);



Route::get('/testimonial', [Welcome::class, 'testimonial']);
Route::get('/register', [Welcome::class, 'register']);
Route::get('/verify/{verificationToken}', [Welcome::class, 'verify_otp']);
Route::post('/verify_email', [Welcome::class, 'verify_email']);

// Route::get('/muneeb', [Welcome::class, 'muneeb']);

Route::get('login', [Welcome::class, 'login']);
Route::get('logout', [Welcome::class, 'logout']);
Route::post('postlogin', [Welcome::class, 'postlogin']);
Route::post('save_users', [AdminController::class, 'save_users']);
Route::post('save_newsletter', [AdminController::class, 'save_newsletter']);
Route::post('save_jobsform', [ AdminController::class, 'save_jobsform']);
Route::post('save_bookcourse', [ AdminController::class, 'save_bookcourse']);

Route::get('/forgot_password', [Welcome::class, 'forgot_password'])->name('forgot_password');
Route::post('save_reset_password', [ AdminController::class, 'save_reset_password']);

Route::middleware(['administrator'])->group(function () {
    //==========Admin Side..........
    Route::get('dashboard', [Welcome::class, 'dashboard']);

    Route::get('user_profile', [Welcome::class, 'user_profile']);
    Route::put('profile_update', [Welcome::class, 'profile_update']);
    Route::get('add_blogs', [Welcome::class, 'add_blogs']);
    Route::get('add_courses', [Welcome::class, 'add_courses']);
    Route::get('add_news', [Welcome::class, 'add_news']);
    Route::get('add_jobs', [Welcome::class, 'add_jobs']);
    Route::get('add_users', [Welcome::class, 'add_users']);

    //=======Save Function..............
    Route::post('save_blogs', [AdminController::class, 'save_blogs']);
    Route::post('save_courses', [AdminController::class, 'save_courses']);
    Route::post('save_news', [AdminController::class, 'save_news']);
    Route::post('save_jobs', [AdminController::class, 'save_jobs']);

    //======delete function..................
    Route::get('/delete_blogs/{blog_id}', [Welcome::class, 'delete_blogs']);
    Route::get('/delete_courses/{courses_id}', [Welcome::class, 'delete_courses']);
    Route::get('/delete_news/{news_id}', [Welcome::class, 'delete_news']);
    Route::get('/delete_jobs/{jobs_id}', [Welcome::class, 'delete_jobs']);
    Route::get('/delete_users/{user_id}', [Welcome::class, 'delete_users']);


    //=========Update Function........
    Route::post('/update_blogs', [AdminController::class, 'update_blogs']);
    Route::post('/update_courses', [AdminController::class, 'update_courses']);
    Route::post('/update_jobs', [AdminController::class, 'update_jobs']);
    Route::post('/update_news', [AdminController::class, 'update_news']);



    //edit
    Route::get('/edit_blogs/{id}', [Welcome::class, 'edit_blogs']);
    Route::get('/edit_courses/{id}', [Welcome::class, 'edit_courses']);
    Route::get('/edit_jobs/{id}', [Welcome::class, 'edit_jobs']);
    Route::get('/edit_news/{id}', [Welcome::class, 'edit_news']);

    // forget





});
