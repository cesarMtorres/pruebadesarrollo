<?php

namespace App\Repositories;

use App\Http\Interfaces\SaleRepositoryInterface;
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
    return $this->sale->all();
  }

  public function getSaleByCustomer($customerId)
  {
    return $this->sale->where('custId',$customerId);
  }
}

