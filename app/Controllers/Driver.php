<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DriverModel;

class Driver extends BaseController
{
    protected $driver;
    public function __construct()
    {
        $this->driver = new DriverModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Driver Page',
            'driver' => $this->driver->findAll()
        ];
        return view('driver', $data);
    }
}
