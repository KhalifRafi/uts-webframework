<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'products';
    public function search($keyword)
    {
        $builder = $this->table('products');
        $builder->like('nama', $keyword);
        $builder->orLike('desk', $keyword);
        return $builder;
    }
}
