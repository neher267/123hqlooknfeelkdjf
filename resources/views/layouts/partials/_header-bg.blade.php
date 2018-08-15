<div class="header">
	<div class="head-t">
		<div class="logo">
			<a href="{{url('/')}}"><img src="{{asset('images/logo_color.png')}}" class="img-responsive" alt="" style="height: 45px; width: 182px"> </a>
		</div>
		<!-- start header_right -->
		<div class="header_right">
			<div class="rgt-bottom">
				<div class="box_1">
					<a href="#" onclick="opencart()">
						<span class="total-items">{{ Cart::count() }}</span>
						<h3 style="font-style: bold"> <span>{{Cart::count() > 0 ? Cart::subtotal():"0.00"}} ৳</span><img src="{{asset('images/bag.png')}}" alt=""></h3>
					</a>	
					<div class="clearfix"> </div>
				</div>				
				<div class="clearfix"> </div>
			</div>
			<div class="search">
				<form>
					<input id="search_text" type="text" value="" placeholder="search...">
					<input type="submit" value="">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>