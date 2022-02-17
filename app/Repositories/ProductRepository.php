<?php

namespace App\Repositories;

use App\Interfaces\ProductRepositoryInterface;
use App\Models\Product;

class ProductRepository implements ProductRepositoryInterface
{
  protected $product;

  public function __construct(Product $product)
  {
    $this->product = $product;
  }

  public function getAllProduct()
  {
    return $this->product->paginate(10); // paginate api
  }

  public function getProductById($productId)
  {
    return $this->product->where('productId',$productId);
  }
}

