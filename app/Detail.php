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
        'price_unit',
        'quantity',
        'sub_total',
        'total_sales'
    ];

    public function sale(){
        return $this->belongsTo('App\Sale');
    }

    public function product(){
        return $this->belongsTo('App\Product');
    }
}
