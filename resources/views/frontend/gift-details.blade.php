@extends('layouts.master')

@section('content')
<div class="row single">
    <div class="det">
        <div class="single_left">
            <div class="grid images_3_of_2">
                <div class="flexslider">
                    <!-- FlexSlider -->
                    <script src="{{asset('js/imagezoom.js')}}"></script>
                    <script defer="" src="{{asset('js/jquery.flexslider.js')}}"></script>
                    <link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen">

                    <script>
                        // Can also be used with $(document).ready()
                        $(window).load(function() {
                            $('.flexslider').flexslider({
                                animation: "slide",
                                controlNav: "thumbnails"
                            });
                        });
                    </script>
                    <!-- //FlexSlider-->

                    <div class="flex-viewport" style="overflow: hidden; position: relative;">
                        <ul class="slides" style="width: 1200%; transition-duration: 0.6s; transform: translate3d(-864px, 0px, 0px);">
                        	@foreach($images as $image)
                            <li data-thumb="{{asset($image->src)}}" style="width: 288px; float: left; display: block;" class="">
                                <div class="thumb-image"> 
                                	<img src="{{asset($image->src)}}" data-imagezoom="true" class="img-responsive" draggable="false"> 
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>                    
                </div>
            </div>

            <div class="desc1 span_3_of_2">
                <h3>{{$gift->name}}</h3>
                <br>
                <div class="price">
                	<span class="text">Points: {{$gift->points}}</span>
                </div>                
                <div class="btn_form">
                	<input style="text-align: center; padding: 6px 15px; border: 3px solid #b52e32; width: 111px; border-radius: 15px;" type="number" name="" value="1">
                    <a href="#" style="border-radius: 15px">Claim</a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="single-bottom1">
            <h6>Details</h6>
            <p class="prod-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option
            </p>
        </div>

        <div class="single-bottom2">
            <h6>Related Gifts</h6>
            <div class="product">
                <div class="product-desc">
                    <div class="product-img">
                        <img src="images/w8.jpg" class="img-responsive " alt="">
                    </div>
                    <div class="prod1-desc">
                        <h5><a class="product_link" href="#">Excepteur sint</a></h5>
                        <p class="product_descr"> Vivamus ante lorem, eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
@endsection



