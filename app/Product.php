<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'stock', 'discount', 'description'];

    public function orders()
    {
        return $this->belongsToMany('App\Order');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
}
