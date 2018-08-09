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
                <h3>{{$package->title}}</h3>
                <br>
                <div class="price">
                	<p>
                     <div>
                         <?php 
                        $text = $package->description;
                        if (str_word_count($text, 0) > 50) {
                            $words = str_word_count($text, 2);
                            $pos = array_keys($words);
                            $text = substr($text, 0, $pos[50]) . '...';
                        }
                        echo $text;
                        ?> 
                     </div>  
                    </p>
                    <span class="text">Price:</span>
                    <span class="price-new">৳ 110.00</span><span class="price-old">৳ 100.00</span>
                    <br>
                    <span class="points"><small>Price in reward points: 20</small></span>
                    <br>
                </div>                
                <div class="btn_form">
                	<input style="text-align: center; padding: 6px 15px; border: 3px solid #b52e32; width: 111px; border-radius: 15px;" type="number" name="" value="1">
                    <a href="#" style="border-radius: 15px">buy</a>
                </div>
                <a href="#"><span>login to save in wishlist </span></a>

            </div>
            <div class="clearfix"></div>
        </div>

        <div class="single-bottom1">
            <h6>Details</h6>
            <p class="prod-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option
            </p>
        </div>

        <div class="single-bottom2">
            <h6>Popular Packages</h6>
            <!-- grids_of_4 -->
                @foreach($popular_packages as $package_chunked)
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
    </div>
</div>
@endsection



