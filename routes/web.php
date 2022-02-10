<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostsController;

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


Route::get('/posts/{post}', [PostsController::class, 'show']);

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/blog', function () {
    return view('blog');
});
Route::get('/blogpostfeed', function () {
    return view('blogpostfeed');
});
Route::get('/blogpostsaf', function () {
    return view('blogpostsaf');
});
Route::get('/blogpostsec', function () {
    return view('blogpostsec');
});
Route::get('/blogpostswot', function () {
    return view('blogpostswot');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
//Route::get('/faq', function () {
//    return view('faq');
//});
Route::get('/faq', [\App\Http\Controllers\FAQController::class, 'show']);
Route::get('/post', function () {
    return view('post');
});
Route::get('/profile', function () {
    return view('profile');
});

Route::get('/index', function () {
    return view('welcome');
});

