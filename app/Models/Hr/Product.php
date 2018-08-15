<?php

namespace App\Models\Hr;

use Illuminate\Database\Eloquent\Model;
use App\Image;
use App\Models\Settings\Category;
use App\Models\Hr\Price;
use Gloudemans\Shoppingcart\Contracts\Buyable;

class Product extends Model implements Buyable
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

    /**
     * Get the identifier of the Buyable item.
     *
     * @return int|string
     */
    public function getBuyableIdentifier($options = null)
    {
        return $this->id;
    }

    /**
     * Get the description or title of the Buyable item.
     *
     * @return string
     */
    public function getBuyableDescription($options = null)
    {
        return $this->name;
    }

    /**
     * Get the price of the Buyable item.
     *
     * @return float
     */
    public function getBuyablePrice($options = null)
    {
        return $this->price;
    }

}
