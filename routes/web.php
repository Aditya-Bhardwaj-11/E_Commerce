<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Frontend\FrontendController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontendController::class,('index')]);
Route::get('category', [FrontendController::class,('category')]);
Route::get('view-category/{slug}', [FrontendController::class,('viewcategory')]);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth','isAdmin'])->group(function(){
    //Route::get('users/{id}', function ($id) {
        Route::get('/dashboard', [App\Http\Controllers\Admin\FrontendController::class, 'index']);

        Route::get('categories', [App\Http\Controllers\Admin\CategoryController::class, 'index']);
        Route::get('add-category', [App\Http\Controllers\Admin\CategoryController::class, 'add']);
        Route::post('insert-category', [App\Http\Controllers\Admin\CategoryController::class, 'insert']);

        Route::get('edit-category/{id}', [CategoryController::class, 'edit']);
        Route::put('update-category/{id}', [CategoryController::class, 'update']);
        Route::get('delete-category/{id}', [CategoryController::class, 'destroy']);

        Route::get('products' , [ProductController::class , 'index']);
        Route::get('add-products' , [ProductController::class , 'add']);
        Route::post('insert-products', [ProductController::class , 'insert']);

        Route::get('edit-product/{id}', [ProductController::class, 'edit']);
        Route::put('update-product/{id}', [ProductController::class, 'update']);
        Route::get('delete-product/{id}', [ProductController::class, 'destroy']);


});

