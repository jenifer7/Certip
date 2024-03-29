<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Registro de los proveedores 
 */
class Supplier extends Model
{
    protected $table = 'suppliers';
    protected $fillable = [
        'name', 'phone', 'address'
    ];

    public function products(){
        return $this->hasMany('App\Product');
    }
}
