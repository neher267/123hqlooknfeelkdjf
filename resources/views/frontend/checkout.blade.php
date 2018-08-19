@extends('layouts.master')

@section('content')

<!-- start content -->
<div class="check">	 
	<div class="col-md-3 col-sm-12 cart-total">
		<a class="continue" href="{{url('/')}}">Continue to basket</a>
		<div class="price-details">
			<h3>Price Details</h3>
			<span>Total</span>
			<span class="total1">{{Cart::subtotal()}}</span>
			<span>Discount</span>
			<span class="total1">---</span>
			<span>Delivery Charges</span>
			<span class="total1">00.00</span>
			<div class="clearfix"></div>				 
		</div>	
		<ul class="total_price">
			<li class="last_price"> <h4>TOTAL</h4></li>	
			<li class="last_price"><span>{{Cart::subtotal()}}</span></li>
			<div class="clearfix"> </div>
		</ul>
		<div class="clearfix"></div>
		<a class="order" href="{{route('place-order.create')}}">Place Order</a>
			<div class="total-item">
			<h3>OPTIONS</h3>
			<h4>COUPONS</h4>
			<a class="cpns" href="#">Apply Coupons</a>
		</div>
	</div>

	<div class="col-md-9 col-sm-12 cart-items">
		@foreach(Cart::content() as $content)		
		<div class="cart-header">
			<div class="close1"></div>
			<div class="cart-sec simpleCart_shelfItem">
				<div class="cart-item cyc">
					<img src="{{asset($content->options->image)}}" class="img-responsive" alt="">
				</div>
				<div class="cart-item-info">
					<h3 style="margin: 0px 0px 15px 0px; ">{{$content->name}}</h3>
					<p>Unit Price : ৳ {{$content->price}}</p>	
					<p>Size : 5</p>	
					<p>Qty : {{$content->qty}}</p>	
					<p>Color : Blue</p>	
				</div>
				<div class="clearfix"></div>
			</div>
		</div>	
		@endforeach
	</div>
	<div class="clearfix"> </div>
</div>
<!-- end content -->
<script>$(document).ready(function(c) {
		$('.close1').on('click', function(c){
			$('.cart-header').fadeOut('slow', function(c){
			$('.cart-header').remove();
			});
		});	  
	});
</script>
@endsection



