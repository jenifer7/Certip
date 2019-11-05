<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * El modelo de detalle nos ayuda con informcion mas amplia 
 * de cada venta realizada
 */
class Detail extends Model
{
    protected $table = 'details';
    protected $fillable = [
        'sale_id',
        'product_id',
        'quantity',
        'price',
    ];

    public function sale(){
        return $this->belongsTo('App\Sale');
    }

    public function product(){
        return $this->belongsTo('App\Product');
    }
}
