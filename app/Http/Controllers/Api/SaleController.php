<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Interfaces\SaleRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
class SaleController extends Controller
{
    //
    private SaleRepositoryInterface $saleRepository;

    public function __construct(SaleRepositoryInterface $saleRepository)
    {
        $this->saleRepository = $saleRepository;
    }

    public function index(): JsonResponse
    {
        return response()->json([
            'data' => $this->saleRepository->getAllSale()
        ]);
    }


  public function show(Request $request): JsonResponse
  {
       $customerId = $request->route('customer_id');

        return response()->json([
            'data' => $this->saleRepository->getSaleOrderByCustomer($customerId)
        ]);
  }

}
