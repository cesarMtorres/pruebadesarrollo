<?php

namespace App\Interfaces;


interface CustomerRepositoryInterface
{
    public function getAllCustomer();
    public function getCustomerById($customerId);
    public function updateCustomer($customerId, array $newDetails);
}
