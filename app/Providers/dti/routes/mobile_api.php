<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Welcome;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\API;
use Illuminate\Http\Request;

//post route

Route::post('/mob/save_user', [API::class, 'reg_user'])->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);

Route::post('/mob/login_user', [API::class, 'login_user'])->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);

Route::post('/mob/save_jobsform', [API::class, 'save_jobsform'])->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);

Route::post('/mob/save_bookcourseform', [API::class, 'save_bookcourse'])->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);








//get route

Route::get('/mob/blogs', [API::class, 'all_blogs']);
Route::get('/mob/singleblogs', [API::class, 'single_blog']);

Route::get('/mob/blogsurdu', [API::class, 'all_blogsurdu']);
Route::get('/mob/singleblogsurdu', [API::class, 'single_blogurdu']);


Route::get('/mob/all_courseprice', [API::class, 'all_courseprice']);


Route::get('/mob/courses', [API::class, 'all_courses']);
Route::get('/mob/singlecourses', [API::class, 'single_courses']);

Route::get('/mob/jobs', [API::class, 'all_jobs']);
Route::get('/mob/singlejobs', [API::class, 'single_jobs']);

Route::get('/mob/news', [API::class, 'all_news']);
Route::get('/mob/singlenews', [API::class, 'single_news']);

