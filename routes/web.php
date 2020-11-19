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

Route::get('/index', function () {
    return view('admin.index');
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

Route::get('/all-users', [App\Http\Controllers\AdminController::class, 'showUsers'])->name('all-users');
Route::get('/all-comments', [App\Http\Controllers\AdminController::class, 'showComments'])->name('all-comments');
Route::get('/all-trades', [App\Http\Controllers\AdminController::class, 'showTrades'])->name('all-trades');
Route::get('/all-currency', [App\Http\Controllers\AdminController::class, 'showCurrency'])->name('all-currency');
Route::get('/add-user', [App\Http\Controllers\AdminController::class, 'addUser'])->name('add-user');
Route::get('/add-trade', [App\Http\Controllers\AdminController::class, 'addTrade'])->name('add-trade');
Route::get('/add-comment', [App\Http\Controllers\AdminController::class, 'addComment'])->name('add-comment');
Route::get('/add-currency', [App\Http\Controllers\AdminController::class, 'addCurrency'])->name('add-currency');
// Route::get('/user', 'UserController@index')->name('user')->middleware('authuser');
// Route::get('/admin', 'AdminController@index')->name('admin')->middleware('authadmin');
