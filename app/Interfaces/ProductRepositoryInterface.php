<?php

namespace App\Interfaces;


interface ProductRepositoryInterface
{
    public function getAllProduct();
    public function getProductById($productId);
}
