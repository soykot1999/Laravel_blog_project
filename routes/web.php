<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;

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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/blog-details/{slug}',[HomeController::class, 'blogDetails'])->name('blog.details');
Route::get('/blogUser-register',[HomeController::class,'blogUserRegister'])->name('blogUser.register');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
    Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');

//    category
    Route::get('/add-category',[CategoryController::class,'addCategory'])->name('add.category');
    Route::post('/new-category',[CategoryController::class,'saveCategory'])->name('new.category');
    Route::get('/manage-category',[CategoryController::class,'manageCategory'])->name('manage.category');
    Route::get('/edit-category/{c_id}',[CategoryController::class,'editCategory'])->name('edit.category');
    Route::post('/update-category',[CategoryController::class,'updateCategory'])->name('update.category');

//    blog
    Route::get('/add-blog',[BlogController::class,'addBlog'])->name('add.blog');
    Route::get('/manage-clog',[BlogController::class,'manageBlog'])->name('manage.blog');
    Route::post('/new-blog',[BlogController::class,'saveBlog'])->name('new.Blog');

});
