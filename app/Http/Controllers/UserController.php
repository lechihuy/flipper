<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRegisterRequest;
use App\Models\User;

class UserController extends Controller
{
    public function register(UserRegisterRequest $request) 
    {
        $data = $request->validated();
        $data['password'] = bcrypt($data['password']);

        User::create($data);

        return back()->with('message', 'Đăng ký tài khoản thành công.');
    }

    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);

        if (auth()->attempt($credentials, $request->remember)) {
            return redirect()->route('home');
        } else {
            return back()->with('message', 'Thông tin đăng nhập không chính xác.');
        }
    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
