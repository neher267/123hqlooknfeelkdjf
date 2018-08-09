@extends('layouts.master')

@section('content')

	<!-- start content -->	
	<div class="w_content">
		<div class="women">
			<a href="#"><h4>Enthecwear - <span>4449 items</span> </h4></a>
			<ul class="w_nav">
				<li>Sort : </li>
	     			<li><a class="active" href="#">popular</a></li> |
	     			<li><a href="#">new </a></li> |
	     			<li><a href="#">discount</a></li> |
	     			<li><a href="#">price: Low High </a></li> 
	     			<div class="clear"></div>	
		     	</ul>
		     	<div class="clearfix"></div>	
		</div>
		<!-- grids_of_4 -->
		<div class="grids_of_4">
			@for($i=0; $i<4; $i++)
			<div class="grid1_of_4">
				<div class="content_box"><a href="details.html">
			   	   	<img src="{{asset('images/b1.jpg')}}" class="img-responsive" alt="">
				   	</a>
					<h4><a href="details.html"> Duis autem</a></h4>
					<p>It is a long established fact that</p>
					<div class="grid_1 simpleCart_shelfItem">
				    
						 <div class="item_add"><span class="item_price"><h6>ONLY $109.00</h6></span></div>
						<div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>
					 </div>
			   	</div>
			</div>
			@endfor

			<div class="clearfix"></div>
		</div>			
		<!-- end grids_of_4 -->	
			
	</div>
  	<div class="clearfix"></div>
  </div>
<!-- end content -->
@endsection
