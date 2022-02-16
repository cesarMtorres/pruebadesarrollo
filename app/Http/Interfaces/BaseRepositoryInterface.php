<?php

namespace App\Htpp\Interfaces;

interface BaseRepositoryInterface
{
    public function getAll();
    public function getById($entryId);
}
