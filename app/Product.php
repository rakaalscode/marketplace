<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];


    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function category()
    {
        return $this->hasOne('App\Category', 'id', 'category_id');
    }
}
