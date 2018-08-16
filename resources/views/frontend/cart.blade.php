
<div id="cart_details" class="cart-neher">
	<div class="cart-title">
		<span id="items">{{Cart::count()}}</span> Items		
		<button id="cart_details_btn" class="btn btn-default" style="float: right; color: red; padding: 3px;" onclick="closecart()">Close</button>
	</div>
	<div style="overflow-y: auto; height: 485px;">
		@if(Cart::count() > 0)
		<table class="table">
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
				<tr id="{{$content->rowId}}1">
					<td>
						<img src="{{asset($content->options->image)}}" style="height: 35px; margin-top: 20px">
					</td>
					<td>{{$content->name}}</td>
					<td style="text-align: center;">
						<div>
							<button class="btn btn-default" style="background-color: #f5f5f5; padding: 0px 6px" onclick="increase_qty('<?php echo $content->rowId ?>')"><i class="fa fa-angle-up"></i></button>
						</div>
						<div id="{{$content->rowId}}">{{$content->qty}}</div>
						<div>
							<button class="btn btn-default" style="background-color: #f5f5f5; padding: 0px 6px" onclick="decrease_qty('<?php echo $content->rowId ?>')"><i class="fa fa-angle-down"></i>
							</button>
						</div>
					</td>
					<td style="text-align: right;"> 
						<div style="margin-top: 25px;">
							<span style="font-size: 8px">৳</span> <span id="{{$content->rowId}}price">{{$content->price}}</span>
							<button class="btn btn-default" style="padding: 0px 3px" onclick="remove_item('<?php echo $content->rowId ?>')">
								X
							</button>
						</div>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@else
		<img src="{{asset('images/empty.png')}}" class="empty-cart">
		@endif
	</div>
	<div class="cart-footer">
		<button class="btn btn-info">Place order</button>
		
		৳ {{Cart::subtotal()}}

	</div>
</div>