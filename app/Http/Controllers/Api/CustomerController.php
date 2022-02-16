<?php

namespace App\Http\Controllers;

use App\Interfaces\CustomerRepositoryInterface;
use App\Models\Customer;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CustomerController extends Controller
{


    private CustomerRepositoryInterface $customerRepository;

    public function __construct(CustomerRepositoryInterface $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function index(): JsonResponse
    {
        return response()->json([
            'data' => $this->customerRepository->getAllCustomer()
        ]);
    }


  public function show(Request $request): JsonResponse
  {
       $customerId = $request->route('id');

        return response()->json([
            'data' => $this->customerRepository->getCustomerById($customerId)
        ]);
  }


    // DE ACUERDO AL ENUNCIADO MODIFICAR LOS VALORES MAS SIGNIFICANTES DE UNO DE LAS TABLAS
    // YO USE LA TABLA CUSTOMER Y COMO NECESITO SOLO MODIFICAR NO IMPLEMENTE LOS RESOURCE DEL CONTROLLER
    //
    //nota : se puede mejorar usando form Request para las validaciones viendo el tamano de las columnas
    //
    // y policies para las authorizaciones etc...
    //

    //TODO usar formRequest para validaciones
    public function update(Request $request): JsonResponse
    {
        $customerId = $request->route('custId'); // custId es customer_id de northwind
        $customerDetails = $request->only([
            'companyName',
            'contactName',
            'contactTitle',
            'address'
        ]); // por que solo esto??? pues el enunciado me pide lo mas relevantes, y pues con eso es suficiente

        return response()->json([
            'data' => $this->customerRepository->updateCustomer($customerId, $customerDetails)
        ]);
    }

}
