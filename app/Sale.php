<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
        'employee_id',
        'date_sale',
        'customer_id',
        'product_id',
    ];
}
