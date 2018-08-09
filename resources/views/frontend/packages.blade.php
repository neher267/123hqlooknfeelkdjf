@extends('layouts.master')

@section('content')
<!-- start content -->
<div class="w_content">
    <div class="women">
        <a href="#"><h4><span>{{$count}} {{trans_choice('customer.packages', $count)}}</span> </h4></a>
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
    @foreach($packages as $package_chunked)
    <div class="grids_of_4">
        @foreach($package_chunked as $package)
        <div class="grid1_of_4">
            <div class="content_box">
                <?php 
                    $title = str_replace(' ', '-', $package->title);
                ?>
                <a href="{{url($title.'/'.$package->slug)}}">
                    <img src="{{asset($package->thumbnail)}}" class="img-responsive" style="width: 100%">
                </a>
                <div class="grid_1 simpleCart_shelfItem">
                    <a class="item_add" href="{{url($title.'/'.$package->slug)}}">
                        <div><i class="fas fa-search-plus"></i></div>
                        <div>{{$package->title}}</div>
                        <div>100 TK</div>
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
<!-- end content -->
@endsection
