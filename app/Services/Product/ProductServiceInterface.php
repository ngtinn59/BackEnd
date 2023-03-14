<?php

namespace App\Services\Product;

use App\Services\ServiceInterface;

interface ProductServiceInterface extends ServiceInterface
{
    public function getRelatedProducts($product, $limit = 4);
    public function getFeatureProductsByCategory();

    public function getProductOnindex();
}
