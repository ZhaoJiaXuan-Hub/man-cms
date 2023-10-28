<?php

namespace plugin\mancms\app\controller;

use support\Request;

class IndexController
{

    public function index()
    {
        clearstatcache();
        if (!is_file(base_path('plugin/mancms/config/install.lock'))) {
            return raw_view('index/install');
        }
        return view('index/index', ['name' => 'mancms']);
    }

}
