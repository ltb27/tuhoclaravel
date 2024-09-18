<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        if (Auth::check()) return redirect()->route('dashboard');
        return view('login');
    }

    public function login(AuthRequest $authRequest)
    {
        $isLogin = Auth::attempt(["email" => $authRequest["username"], "password" => $authRequest["password"]]);
        if ($isLogin) {
            return redirect()->route('dashboard')->with('success', 'Đăng nhập thành công');
        }
//        dd($validated);
    }
}
