<style type="text/css">
	.cart-neher{
		width: 300px;
	    height: 500px;
	    background-color: #f5f5f5;
	    padding: 5px;
	    position: fixed;
	    top: 99px;
	    right: 9px;
	    border-radius: 5px;
	    -webkit-box-shadow: 0px 0px 2px 1px rgba(37, 37, 37, 0.39);
    	box-shadow: 0px 0px 2px 1px rgba(37, 37, 37, 0.39);
    	z-index: 500;
    	visibility: collapse;
	}

	.cart-title{
		padding: 7px 5px;
		background-color: #31708f;
		color: white;
		font-size: 20px;
		border-radius: 4px;
		margin-bottom: 10px;
	}

	.cart-footer{
		position: absolute;
		bottom: 0px;
		padding: 7px 5px;
		background-color: #a94442;
		color: white;
		font-size: 20px;
		border-radius: 4px;
		margin-bottom: 10px;
		width: 96.5%;
		text-align: right;

	}
</style>

<div id="cart_details" class="cart-neher">
	<div class="cart-title">Title
		<button id="cart_details_btn" class="btn btn-default" style="float: right; color: red; padding: 3px;" onclick="closecart()">Close</button>
	</div>
	<table class="table" style="overflow-y: scroll;">
		<thead>
			<tr>
				<td></td>
				<td></td>
				<td style="text-align: center;"></td>
				<td style="text-align: right; width: 110px;"></td>
			</tr>
		</thead>
		<tbody>
			@foreach(Cart::content() as $content)
			<tr>
				<td>
					<img src="http://looknfeel.test/images/Category/1534229475.jpg" style="width: 15px; margin-top: 20px">
				</td>
				<td>{{$content->name}}</td>
				<td style="text-align: center;">
					<div><button class="btn btn-default" style="background-color: #f5f5f5; padding: 0px 6px"><i class="fa fa-angle-up"></i></button></div>
					<div>{{$content->qty}}</div>
					<div><button class="btn btn-default" style="background-color: #f5f5f5; padding: 0px 6px"><i class="fa fa-angle-down"></i></button></div>
				</td>
				<td style="text-align: right;"> 
					<div style="margin-top: 25px;">
						<span style="font-size: 8px">৳</span> {{$content->price}}
						<button class="btn btn-default" style="padding: 0px 3px">
							X
						</button>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<div class="cart-footer">
		<button class="btn btn-info">Place order</button>

		৳ {{Cart::subtotal()}}

	</div>
</div>