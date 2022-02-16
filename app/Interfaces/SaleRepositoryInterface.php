<?php

namespace App\Interfaces;


interface SaleRepositoryInterface
{
    public function getAllSale();
    public function getSaleOrderByCustomer($productId);
}
