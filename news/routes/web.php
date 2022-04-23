<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CreationController;

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

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/blogs/{blog_slug}', [BlogController::class, 'show'])->name('blogs');
Route::get('/blogs/{blog_slug}/{article_slug}', [BlogController::class, 'detail'])->name('articles');
Route::get('/search', [BlogController::class, 'Search'])->name('search');
Route::resource('/articles', ArticleController::class);
Route::resource('/comment', CommentController::class);
Route::resource('/contact', ContactController::class);
Route::resource('/about', AboutController::class);
Route::resource('/creation', CreationController::class);



Route::get('/profile', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


