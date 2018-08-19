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
		<a class="order" href="#" onclick="document.getElementById('myForm').submit()">Order Now</a>
			<div class="total-item">
			<h3>OPTIONS</h3>
			<h4>COUPONS</h4>
			<a class="cpns" href="#">Apply Coupons</a>
		</div>
	</div>

	<div class="col-md-9 col-sm-12 cart-items">
		<h1>Shipping Address</h1>
		<form id="myForm" action="{{route('place-order.store')}}" method="post">			
			{{ csrf_field() }}    

			@if($shippingAddress)
			@foreach($shippingAddress->addresses()->get() as $address)
			<div class="form-group col-md-12">
			    <div class="radio" class="col-md-12">
			      <label><input type="radio" name="optradio">
			      	{{$address->area == '' ? "":"Area-$address->area, "}}
			      	{{$address->block == '' ? "":"Block-$address->block, "}}

			      </label>
			    </div>
			</div>
			@endforeach

			<div class="form-group col-md-12">
			    <button type="button" class="btn btn-default" onclick="document.getElementById('new_address').style.display ='inline'">New Shipping Address</button>
			</div>
			@else
			<script type="text/javascript">
				$(document).ready(function() {
					document.getElementById('new_address').style.display ='inline';
				});
			</script>
			@endif
			
			<div id="new_address" style="display: none;">
				<div class="form-group col-md-6">
				    <input type="text" name="block" class="form-control" id="block" placeholder="Area Ex: Dhaka" required>
				</div>

				<div class="form-group col-md-6">
				    <input type="text" name="road_no" class="form-control" id="road_no" placeholder="Block/Sector Ex: B">
				</div>

				<div class="form-group col-md-6">
				    <input type="text" name="road_no" class="form-control" id="road_no" placeholder="Road Ex: Dhanmondi 32">
				</div>

				<div class="form-group col-md-6">
				    <input type="text" name="house_no" class="form-control" id="house_no" placeholder="House Ex: 278">
				</div>

				<div class="form-group col-md-6">
				    <input type="text" name="floor" class="form-control" id="floor" placeholder="Floor Ex: 5B">
				</div>
			</div>
		</form>
	</div>

	<div class="col-md-9 col-sm-12 cart-items">		 
		<h1>Payment Method</h1>
		<div class="form-group col-md-12">
		    <div class="radio">
		      <label><input type="radio" name="optradio" checked>Cash On Delevary</label>
		    </div>
		</div>
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



