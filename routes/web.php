<?php

use App\Http\Controllers\CategoriesController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Log;
use App\Models\User;

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

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'name' => 'James'
    ]);
});

Route::get('/about', function () {
    return view(
        'about',
        [
            'title' => 'About',
            'name' => 'James'
        ]
    );
});

Route::get('/blog', [PostController::class, 'index']);

Route::get('/blog/{post:slug}', [PostController::class, 'show']);

Route::get('/blog/category/{categories:name}', [CategoriesController::class, 'show']);

Route::get('/author/{author:username}', function (User $author) {
    return view(
        'post',
        [
            Log::info($author->posts),
            'title' => 'Author by ' . $author->name,
            'name' => $author->name,
            // 'posts' => $author->posts
            'posts' => $author->posts->load('category', 'author')
        ]
    );
});
