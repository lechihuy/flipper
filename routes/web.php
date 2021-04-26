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

Route::get('/', 'RenderController@showHomePage')->name('home');

Route::get('/dang-nhap', 'RenderController@showLoginPage')->name('login');
Route::get('/dang-ki', 'RenderController@showRegisterPage')->name('register');
Route::post('/dang-ki', 'UserController@register')->name('register.post');
Route::post('/dang-nhap', 'UserController@login')->name('login.post');
Route::get('/dang-xuat', 'UserController@logout')->name('logout');

Route::get('/ho-so', 'RenderController@showProfilePage')->name('profile');
Route::get('/don-hang', 'RenderController@showOrderPage')->name('order');
Route::get('/quen-mat-khau', 'RenderController@showForgotPasswordPage')->name('forgot_password');
Route::get('/khoi-phuc-mat-khau', 'RenderController@showResetPasswordPage')->name('reset_password');

Route::get('/gio-hang', 'RenderController@showCartPage')->name('cart');
Route::get('/them-vao-gio-hang', 'OrderController@addToCart')->name('add_to_cart');
Route::get('/xoa-khoi-gio-hang', 'OrderController@removeToCart')->name('remove_to_cart');
Route::get('/cap-nhat-gio-hang', 'OrderController@updateCart')->name('update_cart');
Route::post('/dat-hang', 'OrderController@order')->name('order');
Route::get('/tim-kiem', 'RenderController@showSearchPage')->name('search');
Route::get('/p/{slug}', 'RenderController@showProductDetailPage')->name('product_detail');
Route::get('/c/{slug}', 'RenderController@showProductListPage')->name('product_list');

Route::get('/ve-chung-toi', 'RenderController@showAboutUsPage')->name('about_us');
Route::get('/chinh-sach', 'RenderController@showPolicyPage')->name('policy');
Route::get('/dieu-khoan-su-dung', 'RenderController@showTermOfUsePage')->name('term_of_use');


Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function() {
    Route::view('', 'admin.dashboard')->name('dashboard')
        ->middleware('auth:admin');

    Route::get('login', 'AuthController@showLoginForm')->name('login');
    Route::post('login', 'AuthController@login')->name('login.post');
    Route::get('logout', 'AuthController@logout')->name('logout');

    Route::resource('categories', 'CategoryController');
    Route::resource('products', 'ProductController');
    Route::resource('users', 'UserController');
    Route::resource('orders', 'OrderController');
});
