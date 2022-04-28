<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Visi extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'About Page'
        ];
        return view('visi', $data);
    }
}
