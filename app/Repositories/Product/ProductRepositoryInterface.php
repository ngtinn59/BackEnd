<?php

namespace App\Repositories\Product;


use App\Repositories\RepositoryInterface;

interface ProductRepositoryInterface extends RepositoryInterface
{
    //Khai báo hàm getRalatedProducts
    public function getRelatedProducts($product, $limit = 4);
}
