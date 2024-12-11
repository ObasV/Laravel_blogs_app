<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

// Post Routes
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create'); 
Route::post('/posts', [PostController::class, 'store'])->name('posts.store'); 
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show'); 
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit'); 
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update'); 
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');



// Comment Routes
Route::get('/comments', [CommentsController::class, 'index'])->name('comments.index');
Route::get('/comments/create', [CommentsController::class, 'create'])->name('comments.create');
Route::post('/comments', [CommentsController::class, 'store'])->name('comments.store');
Route::get('/comments/{comment}', [CommentsController::class, 'show'])->name('comments.show');
Route::get('/comments/{comment}/edit', [CommentsController::class, 'edit'])->name('comments.edit');
Route::put('/comments/{comment}', [CommentsController::class, 'update'])->name('comments.update');
Route::delete('/comments/{comment}', [CommentsController::class, 'destroy'])->name('comments.destroy');






Route::middleware('auth')->group(function () {
    Route::resource('posts', PostController::class);
    Route::resource('users', UserController::class);
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'authenticate');
    Route::post('/logout', 'logout')->name('logout');
    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'registerUser');
});
