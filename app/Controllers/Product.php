<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class Product extends BaseController
{
    protected $product;
    public function __construct()
    {
        $this->product = new ProductModel();
    }
    public function index()
    {

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $this->product->search($keyword);
        } else {
            $this->product;
        }

        $data = [
            'title' => 'Product Page',
            'item' => $this->product->findAll()
        ];

        return view('product', $data);
    }
    public function detail($id)
    {
        $data = [
            'title' => 'Detail Page',
            'item' => $this->product->where(['id' => $id])->first()
        ];
        return view('detail', $data);
    }
}
