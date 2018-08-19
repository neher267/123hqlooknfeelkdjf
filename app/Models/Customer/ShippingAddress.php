<?php

namespace App\Models\Customer;

use Illuminate\Database\Eloquent\Model;
use App\Address;
use Cartalyst\Sentinel\Users\EloquentUser as User;

class ShippingAddress extends Model
{
    public function addresses()
    {
    	return $this->morphMany(Address::class, 'addressable');
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
