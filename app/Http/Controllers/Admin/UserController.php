<?php

namespace App\Http\Controllers\Admin;

class UserController
{
    public function index()
    {
        $content = 'admin.user.index';
        $configs = $this->getJavascriptConfigs();
        return view('admin.dashboard.layout', compact("content", "configs"));
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
