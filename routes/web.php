<?php

use App\Http\Controllers\Cvindex;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Posts;

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

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('landingpage');
});



Route::group(['middleware' => ['auth:sanctum', 'verified']], function() {
    Route::get('/dashboard', function() {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/posts', Posts::class);

    Route::get('/index', function () {
        return view('cv.index');
    });

    Route::get('/index-2', function () {
        return view('cv.index-2');
    });

    Route::get('/portofolio', function () {
        return view('cv.portofolio');
    });

    Route::get('/services', function () {
        return view('cv.services');
    });

    Route::get('/resume', function() {
        return view('cv.resume');
    });

    Route::get('/blog-home', function() {
        return view('cv.blog-home');
    });

    Route::get('/contact', function() {
        return view('cv.contact');
    });

    Route::get('/project', function() {
        return view('cv.project');
    });

    Route::get('/blog-post', function() {
        return view('cv.blog-post');
    });

    Route::get('/fitur3', function () {
        return 'fitur ini sedang dalam proses pengerjaan';

    });

    Route::get('/fitur4', function () {
        return 'fitur ini sedang dalam proses pengerjaan';

    });
});