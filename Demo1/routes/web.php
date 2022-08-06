<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', 'App\Http\Controllers\SiteController@renderIndex');
Route::get('/about_us', 'App\Http\Controllers\SiteController@renderAboutUs');
Route::get('/booking', 'App\Http\Controllers\SiteController@renderBooking');
Route::get('/contact', 'App\Http\Controllers\SiteController@renderContact');
Route::get('/news', 'App\Http\Controllers\SiteController@renderNews');
Route::get('/news_page', 'App\Http\Controllers\SiteController@renderNewsPage');
Route::get('/service', 'App\Http\Controllers\SiteController@renderService');
Route::get('/service_page', 'App\Http\Controllers\SiteController@renderServicePage');

//Route::get('/blog/{post}', 'App\Http\Controllers\SiteController@renderPostPage');
