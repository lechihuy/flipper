<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RenderController extends Controller
{
    public function showHomePage()
    {
        return view('user.home');
    }

    public function showLoginPage()
    {
        return view('user.login');
    }

    public function showRegisterPage()
    {
        return view('user.register');
    }

    public function showCartPage()
    {
        return view('user.cart');
    }

    public function showProductDetailPage()
    {
        return view('user.product-detail');
    }

    public function showProductListPage()
    {
        return view('user.product-list');
    }

    public function showAboutUsPage()
    {
        return view('user.about-us');
    }

    public function showPolicyPage()
    {
        return view('user.policy');
    }

    public function showTermOfUsePage()
    {
        return view('user.term-of-use');
    }

    public function showProfilePage()
    {
        return view('user.profile');
    }

    public function showOrderPage()
    {
        return view('user.order');
    }

    public function showSearchPage()
    {
        return view('user.search');
    }

    public function showForgotPasswordPage()
    {
        return view('user.forgot-password');
    }

    public function showResetPasswordPage()
    {
        return view('user.reset-password');
    }
}
