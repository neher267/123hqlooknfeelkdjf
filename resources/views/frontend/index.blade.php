@extends('layouts.master')

@section('content')
<!-- start content -->
<div class="w_content">
    <div class="women">
        <a href="#"><h4><span>{{$count}} {{trans_choice('customer.products', $count)}}</span> </h4></a>        
        <div class="clearfix"></div>
    </div>

    <?php 
    $add_cart = __('customer.cart_add');
    $packages2 = __('customer.packages2');
    ?>

    <!-- grids_of_4 -->
    @foreach($categories as $category_chunked)
    <div class="grids_of_4">
        @foreach($category_chunked as $category)
        <div class="grid1_of_4">
            <div class="content_box"><a href="{{url($category->slug.'/types')}}">
					<img src="{{asset($category->thumbnail)}}" class="img-responsive" style="width: 100%">
				   	</a>
                <h4><a href="{{url($category->slug.'/types')}}">{{$category->name}}</a></h4>
                <div class="grid_1 simpleCart_shelfItem">

                    <div class="item_add"><span class="item_price"><a href="{{url($category->slug.'/types')}}" style="border-radius: 50%">{{$packages2}}</a></span></div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="clearfix"></div>
    </div>
    @endforeach
    <!-- end grids_of_4 -->

    <div class="women">
        <a href="#"><h4><span>@lang('customer.popular')</span> </h4></a>
        <ul class="w_nav">
            <li>Sort : </li>
            <li><a href="#">new</a></li> |
            <li><a href="#">discount</a></li> |
            <li><a href="#">price: Low High </a></li>
            <div class="clear"></div>
        </ul>
        <div class="clearfix"></div>
    </div>
    
</div>
<div class="clearfix"></div>
<!-- end content -->
@endsection
