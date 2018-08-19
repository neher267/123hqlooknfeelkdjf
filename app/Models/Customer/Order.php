<?php

namespace App\Models\Customer;

use Illuminate\Database\Eloquent\Model;
use Cartalyst\Sentinel\Users\EloquentUser as User;
use App\Address;

class Order extends Model
{
    // public function orderDetails()
    // {
    // 	return $this->hasOne(OrderDetail::class);
    // }

    // public function shippingAddress()
    // {

    // }

	public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function orderDetails()
    {
    	return $this->belongsTo(OrderDetail::class);
    }

    public function shippingAddress()
    {
    	return $this->belongsTo(Address::class, 'id', 'shipping_address_id');
    }
}
