@extends('layouts.master')

@section('content')
<div class="w_content">
    <div class="women">
        <a href="#"><h4><span>{{$count}} {{trans_choice('customer.products', $count)}}</span> </h4></a>    
        <ul class="w_nav">
            @foreach($categories as $value)
            <li style="margin-right: 30px;"><a href="{{url($value->slug.'/products')}}">{{$value->name}} </a></li>
            @endforeach
            <li>Sort : </li>
            <li><a class="active" href="{{route('category.popular.products', $category)}}">popular</a></li> |
            <li><a href="{{route('category.new.products', $category)}}">new </a></li> |
            <li><a href="{{route('category.discunt.products', $category)}}">discount</a></li> |
            <li>Price : </li>
            <li><a href="{{route('category.low-price.products', $category)}}">Low </a></li>
            <li><a href="{{route('category.high-price.products', $category)}}">High</a></li>
            <div class="clear"></div>
        </ul>
        <div class="clearfix"></div>
    </div>

    <!-- grids_of_4 -->

    @foreach($products as $product_chunked)
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
                        <div style="padding: 1px">{{$product->name}}</div>
                        <div>
                            {{$product->price}} ৳ 
                            <strike style="color: red;">{{$product->old_price == '' ? "":"$product->old_price ৳"}}</strike>
                        </div>
                    </a>
                    <div class="item_add">
                        <span class="item_price">
                            <a href="#" style="border-radius: 45%">
                                <i class="fas fa-cart-plus"></i> Add to Cart
                            </a>
                        </span>
                    </div>
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
@endsection
