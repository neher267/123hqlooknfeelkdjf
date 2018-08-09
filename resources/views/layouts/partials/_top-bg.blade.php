<div class="top_bg">					
	<div class="header_top">
		<div class="top_right">
			<ul>
				<li><a href="#">@lang('customer.contact')</a></li>|
				<li><a href="#">@lang('customer.help')</a></li>|
				<li><a href="">@lang('customer.delivery')</a></li>
				<li><a href="#">@lang('customer.mobile')</a></li>		
			</ul>
		</div>
		<!-- notifications start -->

		<!-- notifications end -->
		<div class="top_left">			

			<ul class="nav navbar-nav navbar-right">
				@guest				
				<li>	
					@if(App::isLocale('en'))							
					<a href="{{url('language/bn')}}"  style="color: white; font-size: 14px; display: inline;">বাংলা</a>
					@else 
					<a href="{{url('language/en')}}"  style="color: white; font-size: 14px; display: inline;">English</a>
					@endif
					<a href="{{url('login')}}"  style="color: white; font-size: 14px; display: inline;">@lang('customer.login')</a>
				</li>

				@else
				@if(App::isLocale('en'))							
				<li><a href="{{url('language/bn')}}"  style="color: white; font-size: 14px; display: inline;">Bangla</a></li>
				@else 
				<li><a href="{{url('language/en')}}{{url('language/en')}}"  style="color: white; font-size: 14px; display: inline;">English</a></li>
				@endif
				<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" style="color: white; font-size: 14px">
                            {{ Sentinel::getUser()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{url('logout')}}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{url('logout')}}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endguest
            </ul>			
		</div>		
		<div class="clearfix"> </div>
	</div>	
</div>
<div class="clearfix"></div>