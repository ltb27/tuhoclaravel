<?php

namespace App\Http\Controllers\Admin;

use App\Services\Interfaces\UserServiceInterface as IUserService;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    private IUserService $userService;

    function __construct(IUserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $users = $this->userService->paginate(5);

        $seo = [
            "title" => config("apps.user.index.title"),
            "tableHeading" => config("apps.user.index.userTableName")
        ];

        $content = 'admin.user.index';
        $configs = $this->getJavascriptConfigs();
        return view('admin.dashboard.layout', compact("content", "configs", "users", "seo"));
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

    public function create()
    {
        $content = 'admin.user.create';

        $seo = [
            "title" => config("apps.user.create.title"),
            "tableHeading" => config("apps.user.create")
        ];

        $configs = $this->getJavascriptConfigs();

        return view('admin.dashboard.layout', compact("content", "configs", "seo"));
    }
}
