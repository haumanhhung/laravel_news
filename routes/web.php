<?php

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

Route::get('/category/{id}','App\Http\Controllers\BlogController@category');
Route::get('/post/{id}', 'App\Http\Controllers\BlogController@post');
Route::get('/', 'App\Http\Controllers\BlogController@home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){
    Route::get('/ad', function () {
        return view('admin.category.index');
    });
    Route::resource('category','App\Http\Controllers\CategoryController');
    Route::resource('post','App\Http\Controllers\PostController');
    
});

