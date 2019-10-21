<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * La clase Customer se utiliza para llevar registro de clientes e
 * ingresar nuevos
*/
class Customer extends Model
{
    protected $fillable = [
        'fullname',
        'phone',
        'address',
        'nit'
    ];
}
