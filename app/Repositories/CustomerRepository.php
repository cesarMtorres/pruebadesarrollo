<?php

namespace App\Repositories;

use App\Interfaces\CustomerRepositoryInterface;
use App\Models\Customer;

class CustomerRepository implements CustomerRepositoryInterface
{
  protected $customer;

  public function __construct(Customer $customer)
  {
    $this->customer = $customer;
  }

  public function getAllCustomer()
  {
    return $this->customer->paginate(10); // paginate api
  }

  public function getCustomerById($customerId)
  {
    return $this->customer->findOrFail($customerId);
  }

  public function updateCustomer($customerId, array $newDetails)
  {
      return $this->customer->where('id',$customerId)->update($newDetails);
  }

}

