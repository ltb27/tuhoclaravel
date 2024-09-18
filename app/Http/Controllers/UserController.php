<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
    }

    public function index(AuthRequest $request)
    {
        if (Auth::check()) {
            redirect()->route('dashboard.index');
        }
        return view('login');
    }

    public function login(AuthRequest $authRequest)
    {
        $credentials = $authRequest->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard.index')->with('success', 'Đăng nhập thành công');
        }
        return redirect()->route('auth.login')->with('error', 'Mật khẩu hoặc tài khoản không chính xác');
    }

    public function logout(Request $authRequest): RedirectResponse
    {
        Auth::logout();

        $authRequest->session()->invalidate();
        $authRequest->session()->regenerateToken();

        return redirect()->route('auth.login');
    }
}
