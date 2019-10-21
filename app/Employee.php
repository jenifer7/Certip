<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'fullname',
        'position',
        'phone',
        'address',
        'gender',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function sales(){
        return $this->hasMany('App\Sale');
    }
}
