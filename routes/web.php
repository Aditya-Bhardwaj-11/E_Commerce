<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth','isAdmin'])->group(function(){
    //Route::get('users/{id}', function ($id) {
        Route::get('/dashboard', [App\Http\Controllers\Admin\FrontendController::class, 'index']);
        Route::get('categories', [App\Http\Controllers\Admin\CategoryController::class, 'index']);
        Route::get('add-category', [App\Http\Controllers\Admin\CategoryController::class, 'add']);
        Route::post('insert-category', [App\Http\Controllers\Admin\CategoryController::class, 'insert']);
        Route::get('edit-prod/{id}', [CategoryController::class, 'edit']);
        Route::put('update-category/{id}', [CategoryController::class, 'update']);
    // Route::get('/dashboard','Admin\FrontendController@index');
    //Route::get('categories','Admin\CategoryController@index');

});

