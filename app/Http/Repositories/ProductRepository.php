<?php

namespace App\Repositories;

use App\Interfaces\ProductRepositoryInterface;
use App\Models\Product;

class EntryRepository implements ProductRepositoryInterface
{
  protected $product;

  public function __construct(Product $product)
  {
    $this->product = $product;
  }

  public function getAllProduct()
  {
    return $this->entry->all();
  }

  public function getProductById($entryId)
  {
    return $this->entry->findOrFail($entryId);
  }
}

