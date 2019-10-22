<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'name', 
        'unit_price',
        'description', 
        'stock',
        'date_received',
        'supplier_id'
    ];

    public function supplier(){
        return $this->belongsTo('App\Supplier');
    }

    public function sale(){
        return $this->belongsTo('App\Sale');
    }

    public function detail(){
        return $this->belongsTo('App\Detail');
    }
}
