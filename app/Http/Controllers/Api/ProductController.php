<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Interfaces\ProductRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private ProductRepositoryInterface $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index(): JsonResponse
    {
        return response()->json([
            'data' => $this->productRepository->getAllProduct()->paginate(15)
        ]);
    }


  public function show(Request $request): JsonResponse
  {
       $productId = $request->route('id');

        return response()->json([
            'data' => $this->productRepository->getProductById($productId)
        ]);
  }

}
