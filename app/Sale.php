<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $table = 'sales';
    protected $fillable = [
        'employee_id',
        'date_sale',
        'customer_id',
        'product_id',
    ];

    public function employee(){
        return $this->belongsTo('App\Employee');
    }

    public function customer(){
        return $this->belongsTo('App\Customer');
    }

    public function products(){
        return $this->hasMany('App\Product');
    }

    public function detail(){
        return $this->hasOne('App\Detail');
    }
}
