<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {

    //Route::get('posts', [PostController::class, 'index'])->name('posts.index');
    Route::resource('posts', PostController::class);
    Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('comments', [CommentController::class, 'index'])->name('comments.index');
});

Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::post('posts/{post}/comment', [PostController::class, 'addComment'])->name('posts.comment.add');

Route::post('categories', [CategoryController::class, 'store'])->name('category.store');
