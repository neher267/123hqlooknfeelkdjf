<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hr\Product;
use Cart;

class CartController extends Controller
{
	
    public function add(Product $product)
    {

    	//dd($product);
    	Cart::add($product, 1);
    	//Cart::destroy();
    	//dd(Cart::content());
    	//dd($product);
    	return redirect('/');
    }

}
