<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Search;

class Sale extends Model
{
    use HasFactory;
    use Search;
    protected $table = "SalesOrder";

    protected $searchable = [
      #  'custId',
      #  'orderId',
        'shipName',
    ];
}
