<?php

namespace App\Http\Interfaces;


interface SaleRepositoryInterface
{
    public function getAllSale();
    public function getSaleByCustomer($productId);
}
