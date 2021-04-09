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

Route::get('/', function () {
    return view('user.home');
});

Route::get('/dang-nhap', function() {
    return view('user.login');
});

Route::get('/dang-ki', function() {
    return view('user.register');
});

Route::get('/ve-chung-toi', function() {
    return view('user.about-us');
});

Route::get('/chinh-sach', function() {
    return view('user.policy');
});

Route::get('/dieu-khoan-su-dung', function() {
    return view('user.term-of-use');
});

Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function() {
    Route::get('login', 'AuthController@showLoginForm');
});
