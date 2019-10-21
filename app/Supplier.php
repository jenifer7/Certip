<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Registro de los proveedores 
 */
class Supplier extends Model
{
    protected $fillable = [
        'name', 'phone', 'address'
    ];
}
