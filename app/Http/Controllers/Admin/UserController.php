<?php

namespace App\Http\Controllers\Admin;

class UserController
{
    public function index()
    {
        $content = 'admin.user.index';
        return view('admin.dashboard.layout', compact("content"));
    }
}
