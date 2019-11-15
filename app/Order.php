<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'payout_id', 'status', 'tax', 'total'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function payout()
    {
        return $this->belongsTo('App\Payout');
    }

    public function products()
    {
        return $this->belongsToMany('App\Product')->withPivot('quantity','total');
    }
}
