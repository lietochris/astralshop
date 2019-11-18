<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'price', 'stock', 'discount', 'description'];

    public function orders()
    {
        return $this->belongsToMany('App\Order');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }

    public function commentaries()
    {
        return $this->hasMany('App\Comment');
    }

    public function images()
    {
        return $this->hasMany('App\Image');
    }

    //Scopes

    public function scopeTitle($query, $title)
    {
        if ($title){
            return $query->where('title', 'LIKE',"%$title%");
        }
    }

    public function scopeCategory($query, $category)
    {
        if ($category){
            return $query->whereHas('categories', function ($query) use ($category) {
                $query->where('categories.name', 'LIKE', "%$category%");
            });
        }
    }
}
