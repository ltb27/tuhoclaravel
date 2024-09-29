<?php

namespace App\Http\Controllers\Admin;

use App\Services\Interfaces\UserServiceInterface as IUserService;

class UserController
{
    private IUserService $userService;

    function __construct(IUserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $users = $this->userService->paginate(5);
        $content = 'admin.user.index';
        $configs = $this->getJavascriptConfigs();
        return view('admin.dashboard.layout', compact("content", "configs", "users"));
    }

    private function getJavascriptConfigs()
    {
        return [
            'js' =>
                ['admin/js/plugins/switchery/switchery.js'],
            'css' => [
                'admin/css/plugins/switchery/switchery.css',
            ]];
    }
}
