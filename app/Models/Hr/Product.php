<?php

namespace App\Models\Hr;

use Illuminate\Database\Eloquent\Model;
use App\Image;
use App\Models\Settings\Category;
use App\Models\Hr\Price;

class Product extends Model
{

    public function getRouteKeyName()
    {
        return 'slug';
    }
    
    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    public function images()
    {
    	return $this->morphMany(Image::class, 'imageable');
    }

    public function unit_prices()
    {
        return $this->morphMany(Price::class, 'priceable');
    }

}
