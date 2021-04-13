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
})->name('home');

Route::get('/dang-nhap', function() {
    return view('user.login');
})->name('login');

Route::get('/dang-ki', function() {
    return view('user.register');
})->name('register');

Route::get('/gio-hang', function() {
    return view('user.cart');
})->name('cart');

Route::get('/chi-tiet-san-pham', function() {
    return view('user.product-detail');
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

Route::get('/danh-sach-san-pham', function() {
    return view('user.product-list');
});

Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function() {
    Route::view('', 'admin.dashboard')->name('dashboard')
        ->middleware('auth:admin');

    Route::get('login', 'AuthController@showLoginForm')->name('login');
    Route::post('login', 'AuthController@login')->name('login.post');
    Route::get('logout', 'AuthController@logout')->name('logout');

    Route::resource('categories', 'CategoryController');
    Route::resource('products', 'ProductController');
});
