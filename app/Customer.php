<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * La clase Customer se utiliza para llevar registro de clientes e
 * ingresar nuevos
*/
class Customer extends Model
{
    protected $table = 'customers';
    protected $fillable = [
        'fullname',
        'phone',
        'address',
        'nit'
    ];

    public function sales(){
        return $this->hasMany('App\Sale');
    }
}
