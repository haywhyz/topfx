<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ModeratorController;

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

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// admin 
// Route::group(['prefix' => 'admin',  'middleware' => 'authadmin'], function()
// {
//     //All the routes that belongs to the group goes here
//     Route::get('/admin', 'AdminController@index')->name('admin.index');
//     // Route::get('dashboard', function() {} );
// });

// // moderator 
// Route::group(['prefix' => 'admin',  'middleware' => 'authmoderator'], function()
// {
//     //All the routes that belongs to the group goes here
//     Route::get('dashboard', function() {} );
// });

// // user

// Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function()
// {
//     //All the routes that belongs to the group goes here
//     Route::get('dashboard', function() {} );
// });
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('authadmin');
Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('authuser');
Route::get('/moderator', [App\Http\Controllers\ModeratorController::class, 'index'])->name('authmoderator');
// Route::get('/user', 'UserController@index')->name('user')->middleware('authuser');
// Route::get('/admin', 'AdminController@index')->name('admin')->middleware('authadmin');
