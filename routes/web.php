<?php

use App\Http\Controllers\MessagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\SampleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VebinarController;

Route::get('/', [ SampleController::class, 'home' ])->name('home');

Route::resource('posts', PostsController::class);
Route::resource('messages', MessagesController::class)->only(['index', 'show']);
Route::resource('vebinars', VebinarController::class)->names('vebinars');

/* Route::get('/posts', [ SampleController::class, 'index' ])->name('posts.index');
Route::get('/posts/:post', [ SampleController::class, 'show' ])->name('posts.show');
Route::get('/posts/create', [ SampleController::class, 'create' ])->name('posts.create');
Route::post('/posts', [ SampleController::class, 'store' ])->name('posts.store');
Route::get('/posts/:post/edit', [ SampleController::class, 'edit' ])->name('posts.edit');
Route::put('/posts/:post', [ SampleController::class, 'update' ])->name('posts.update');
Route::delete('/posts/:post', [ SampleController::class, 'destroy' ])->name('posts.destroy'); */