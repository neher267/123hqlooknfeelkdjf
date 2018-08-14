<header class="logo1">
	<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
</header>
<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
<div class="menu">
	<ul id="menu" >		
		@role('admin', 'hr')
		<li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span>Settings</span> <span class="fa fa-angle-right" style="float: right"></span></a>
			<ul id="menu-academico-sub" >
			   	<li id="menu-academico-avaliacoes" ><a href="{{route('areas.index')}}">Areas</a></li>
			   	<li id="menu-academico-avaliacoes" ><a href="{{route('branches.index')}}">Branchs</a></li>
			   	<li id="menu-academico-avaliacoes" ><a href="{{route('categories.index')}}">Categories</a></li>
			   	<li id="menu-academico-avaliacoes" ><a href="{{route('districts.index')}}">Districtss</a></li>
			   	<li id="menu-academico-avaliacoes" ><a href="{{route('departments.index')}}">Departments</a></li>
			   	<li id="menu-academico-avaliacoes" ><a href="{{route('roles.index')}}">Roles</a></li>			   	
			</ul>
		 </li>

		 <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span>Accounts</span> <span class="fa fa-angle-right" style="float: right"></span></a>
			<ul id="menu-academico-sub" >
			   	<li id="menu-academico-avaliacoes" ><a href="{{route('expenses.index')}}">Expense</a></li>
			   	<li id="menu-academico-avaliacoes" ><a href="{{route('stock.index')}}">Stock</a></li>	   				   	
			   	<li id="menu-academico-avaliacoes" ><a href="{{route('trets.index')}}">Trets</a></li>			   				   
			</ul>
		 </li>

		 <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span>Hr</span> <span class="fa fa-angle-right" style="float: right"></span></a>
			<ul id="menu-academico-sub" >
			   	<li id="menu-academico-avaliacoes" ><a href="{{route('products.index')}}">Products</a></li> 	
			</ul>
		 </li>
		@endrole

		@role('manager')	
		<li><a href="{{route('register.create')}}">Add User</a></li> 
		<li id="menu-academico-avaliacoes" ><a href="{{route('purchases.index')}}">Purcheases</a></li>
		<li id="menu-academico-avaliacoes" ><a href="{{route('expenses.index')}}">Expense</a></li>	
		<li id="menu-academico-avaliacoes" ><a href="{{route('stock.index')}}">Stock</a></li>	   				   	
		<li id="menu-academico-avaliacoes" ><a href="{{route('trets.index')}}">Trets</a></li>	   	
		@endrole	

		@role('buyer')	
		<li><a href="{{route('register.create')}}">Add User</a></li> 
		<li id="menu-academico-avaliacoes" ><a href="{{url('my-purchases')}}">Purcheases</a></li>
		<li id="menu-academico-avaliacoes" ><a href="{{url('my-expenses')}}">Expense</a></li>		   	
		@endrole

		@guest
		<li><a href="{{url('popular')}}"><i class="fa fa-fire" aria-hidden="true"></i><span>@lang('customer.popular')</span></a></li>	

		@foreach($all_departments as $department)
		<li id="menu-academico" ><a href=""><i class="fa fa-table"></i> <span>{{$department->name}}</span> <span class="fa fa-angle-right" style="float: right"></span></a>
			<ul id="menu-academico-sub" >
				@foreach($department->categories as $category)
			   	<li id="menu-academico-avaliacoes" ><a href="{{url($category->slug.'/products')}}">{{$category->name}}</a></li> 
			   	@endforeach	
			</ul>
		 </li>
		@endforeach


		@endguest
	</ul>
</div>