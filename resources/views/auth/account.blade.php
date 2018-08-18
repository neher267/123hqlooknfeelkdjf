@extends('layouts.master')

@section('content')
<div class="registration">
		<div class="registration_left">
		<h2 style="text-transform: uppercase;">Log in or Registration</h2>	 
		
		 <div class="registration_form">
		 <!-- Form -->
		 	@include('common.flash-message')
			<form action="{{url('account')}}" method="post">
			{{ csrf_field() }}	
													
				<div>
					<label>
						<input name="mobile" placeholder="Mobile No" type="text" tabindex="3" required="">
					</label>
				</div>						
				<div>
					<input type="submit" value="Log in">
				</div>				
			</form>
			<!-- /Form -->
		</div>
	</div>
	<div class="clearfix"></div>
	</div>

@endsection