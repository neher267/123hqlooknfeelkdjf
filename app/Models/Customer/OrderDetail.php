<?php

namespace App\Models\Customer;

use Illuminate\Database\Eloquent\Model;
use App\Models\Hr\Product;
use App\Models\Customer\Order;

class OrderDetail extends Model
{
    public function product()
    {
    	$this->belongsTo(Product::class);
    }

    public function order()
    {
    	$this->belongsTo(Order::class);
    }
}
