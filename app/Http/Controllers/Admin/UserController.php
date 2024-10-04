<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\Interfaces\IProvinceRepository;
use App\Services\Interfaces\UserServiceInterface as IUserService;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    private IUserService $userService;
    private IProvinceRepository $provinceRepository;

    function __construct(IUserService $userService, IProvinceRepository $provinceRepository)
    {
        $this->userService = $userService;
        $this->provinceRepository = $provinceRepository;
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
                ['https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js',
                    "/admin/libs/location.js",

                ],
            'css' => [
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css'
            ]];
    }

    public function create()
    {
        $content = 'admin.user.create';

        $provinces = $this->provinceRepository->getAll();

        $seo = [
            "title" => config("apps.user.create.title"),
            "tableHeading" => config("apps.user.create")
        ];

        $configs = $this->getJavascriptConfigs();

        return view('admin.dashboard.layout', compact("content", "configs", "seo", "provinces"));
    }
}
