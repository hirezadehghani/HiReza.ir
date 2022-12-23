<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Services\newsletter;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('posts/{post:slug}', [PostController::class, 'show'])->whereAlphaNumeric('POST');
Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);

Route::post('newsletter', NewsletterController::class);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

//Admin
Route::middleware('can:admin')->group(function (){
    Route::resource('admin/posts', AdminPostController::class)->except('show');
});
Route::post('admin/posts/create/image_upload', [CKEditorController::class, 'upload'])->name('upload')->middleware('can:admin');

Route::middleware('can:admin')->group(function (){
    Route::resource('admin/categories', AdminCategoryController::class)->except('show');
});
// Set sybolic link to storage
Route::get('/storageLink', function () {
    return Artisan::call('storage:link');
    });