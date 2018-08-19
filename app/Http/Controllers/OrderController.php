<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Models\Customer\ShippingAddress;
use App\Models\Customer\Order;
use App\Models\Customer\OrderDetail;
use App\Address;
use Cart;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('customer');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $shippingAddress = Sentinel::getUser()->shippingAddress()->first();
        return view('frontend.place-order', compact('shippingAddress'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Sentinel::getUser();
        $order = new Order;
        $order->user()->associate($user);
        $order->amount = (int)Cart::subtotal();        
        $order->shipping_addresse_id = $this->getShipingAddress($user)->id;
        $order->save();

        $this->saveOrderDetails($order);
        return redirect('/')->withSuccess('Thank you for your order! We will contact you soon');
    }


    private function getShipingAddress($user)
    {
        if($shippingAddress = $user->shippingAddress()->first()){

        } else {
            $shippingAddress = new ShippingAddress;  
            $shippingAddress->user()->associate($user)->save();                  
        } 
        $address = new Address;
        $address->block = "B";
        $shippingAddress->addresses()->save($address);  
        return $address;     
    }

    public function saveOrderDetails($order)
    {
        foreach (Cart::content() as $content) {
            $details = new OrderDetail;
            $details->product_id = $content->id;
            $details->qty = $content->qty;
            $details->order_id = $order->id;
            // $details->size = $content->options->size;
            // $details->color = $content->options->color;
            $details->save();
        }
        Cart::destroy();
        return;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
