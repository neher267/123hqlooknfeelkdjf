@extends('layouts.master')

@section('content')
<!-- start content -->
<div class="w_content">
    <div class="women">
        @if(!empty($claims)) 
        <a href="#"><h4><span>@lang('customer.claim')</span> </h4></a>
        @endif
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
    @if(!empty($claims))    
    @foreach($claims as $gift_chunk)        
    <div class="grids_of_4">
        @foreach($gift_chunk as $gift)
        <div class="grid1_of_4">
            <div class="content_box">
                <a href="{{url('all-gifts', $gift)}}">
                    <img src="{{asset($gift->thumbnail)}}" class="img-responsive" style="width: 100%; height: 200px">
                </a>
                <div class="grid_1 simpleCart_shelfItem">
                    <a class="item_add" href="{{url('all-gifts', $gift)}}">
                        <div><i class="fas fa-search-plus"></i></div>
                        <div>{{$gift->name}}</div>
                        <div>Points: {{$gift->points}}</div>
                    </a>
                    <div class="item_add">
                        <span class="item_price">
                            <a href="#" style="border-radius: 45%">
                                <i class="fas fa-cart-plus"></i> Claim
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
    @endif      
    <!-- end grids_of_4 -->

    <!-- grids_of_4 -->
    <hr>
    <h2>ALL GIFTS</h2>
    <hr>
    @foreach($gifts as $gift_chunk)        
    <div class="grids_of_4">
        @foreach($gift_chunk as $gift)
        <div class="grid1_of_4">
            <div class="content_box">
                <a href="{{url('all-gifts', $gift)}}">
                    <img src="{{asset($gift->thumbnail)}}" class="img-responsive" style="width: 100%; height: 200px">
                </a>
                <div class="grid_1 simpleCart_shelfItem">
                    <a class="item_add" href="{{url('all-gifts', $gift)}}">
                        <div><i class="fas fa-search-plus"></i></div>
                        <div>{{$gift->name}}</div>
                        <div>Points: {{$gift->points}}</div>
                    </a>
                    <div class="item_add">
                        <span class="item_price">
                            <a href="#" style="border-radius: 45%">
                                <i class="fas fa-cart-plus"></i> Claim
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
