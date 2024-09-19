<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return redirect()->route('auth.login');
        }
        return view('admin.dashboard.layout');
    }
}
