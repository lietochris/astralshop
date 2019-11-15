<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['product_id','comment'];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
