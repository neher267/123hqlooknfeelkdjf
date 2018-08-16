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
            <div class="content_box"><a href="{{url($category->slug.'/products')}}">
					<img src="{{asset($category->thumbnail)}}" class="img-responsive" style="width: 100%; height: 250px">
				   	</a>
                <h4><a href="{{url($category->slug.'/products')}}">{{$category->name}}</a></h4>                
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
    
    <!-- grids_of_4 -->
    @foreach($popular_products as $product_chunked)
    <div class="grids_of_4">
        @foreach($product_chunked as $product)
        <div class="grid1_of_4">
            <div class="content_box">
                <a href="{{route('product.details', $product)}}">
                    <img src="{{asset($product->thumbnail)}}" class="img-responsive" style="width: 100%; height: 275px;">
                </a>
                <div class="grid_1 simpleCart_shelfItem">
                    <a class="item_add" href="{{route('product.details', $product)}}">
                        <div><i class="fas fa-search-plus"></i></div>
                        <div style="height: 40px; overflow: hidden;">{{$product->name}}</div>
                        <div>
                            {{$product->price}} ৳ 
                            <strike style="color: red;">{{$product->old_price == '' ? "":"$product->old_price ৳"}}</strike>
                        </div>
                    </a>
                    <form method="post" action="{{route('cart.add', $product)}}">
                        {{ csrf_field() }}
                        
                        <div class="item_add">
                        <span class="item_price">
                            <button class="btn btn-success" type="submit" style="border-radius: 45%;"><i class="fas fa-cart-plus"></i> Add to Cart</button>                            
                        </span>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
        <div class="clearfix"></div>
    </div>
    @endforeach
    <!-- end grids_of_4 -->
</div>
<div class="clearfix"></div>
<!-- end content -->
@endsection
