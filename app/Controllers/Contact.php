<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Contact extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Contact Page'
        ];
        return view('contact', $data);
    }
}
