<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $table = 'sales'; 
    protected $fillable = [
        'customer_id',
        'user_id',
        'date_sale',
        'total_sale',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function customer(){
        return $this->belongsTo('App\Customer');
    }

    public function detail(){
        return $this->hasOne('App\Detail');
    }
}
