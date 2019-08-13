<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];



    public function customer()
    {
        return $this->hasMany('App\Customer', 'id', 'customer_id');
    }

    public function user()
    {
        return $this->hasMany('App\User', 'id', 'user_id');
    }
}
