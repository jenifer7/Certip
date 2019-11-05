<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'code',
        'name', 
        'description',
        'unit_price', 
        'stock',
        'date_received',
        'supplier_id'
    ];

    public function supplier(){
        return $this->belongsTo('App\Supplier');
    }

    public function details(){
        return $this->hasMany('App\Detail');
    }
}
