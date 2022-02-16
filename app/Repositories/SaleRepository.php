<?php

namespace App\Repositories;

use App\Interfaces\SaleRepositoryInterface;
use App\Models\Sale;

class SaleRepository implements SaleRepositoryInterface
{
  protected $sale;

  public function __construct(Sale $sale)
  {
    $this->sale = $sale;
  }

  public function getAllSale()
  {
    return $this->sale->paginate(10);
  }

  public function getSaleOrderByCustomer($customerId)
  {
    return $this->sale->where('custId',$customerId);
  }
}

