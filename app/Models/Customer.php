<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'Customer';

    protected $fillable= [
        'companyName',
        'contactName',
        'contactTitle',
        'address',
        'city',
        'region',
        'postalCode',
        'country',
        'phone',
        'mobile',
        'fax',
    ];


}
