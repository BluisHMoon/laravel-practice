<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
//     // return view('welcome');
//     return view('index')->with('title', '首頁')->with('copyright', '&copy; '. date("Y") .' by Mustacchio. All rights reserved.');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('blog', [HomeController::class, 'blog']);
Route::get('blog-single-post/{id}', [HomeController::class, 'blogSinglePost']);
Route::get('about', [HomeController::class, 'about']);
