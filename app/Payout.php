<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payout extends Model
{
    protected $fillable = ['name', 'description', 'image'];

    public function orders()
    {
        return $this->hasMany('App\Order');
    }
}
