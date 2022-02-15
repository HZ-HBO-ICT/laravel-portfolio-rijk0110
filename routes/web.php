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
    return view('/Blogposts/blog');
});
Route::get('/blogpostfeed', function () {
    return view('/Blogposts/blogpostfeed');
});
Route::get('/blogpostsaf', function () {
    return view('/Blogposts/blogpostsaf');
});
Route::get('/blogpostsec', function () {
    return view('/Blogposts/blogpostsec');
});
Route::get('/blogpostswot', function () {
    return view('/Blogposts/blogpostswot');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/layout', function () {
    return view('layout');
});
Route::get('/faq', [\App\Http\Controllers\FAQController::class, 'show']);

Route::get('/post', function () {
    return view('post');
});
Route::get('/profile', function () {
    return view('profile');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/article', function () {
    return view('article', [
        'articles' => App\Models\Article::all()
    ]);
});
Route::get('/articles/{article}', [\App\Http\Controllers\ArticlesController::class, 'show']);
