{{--@extends('layouts.front')--}}
{{--<link href="{{asset('frontend/css/product.css')}}" rel="stylesheet">--}}

{{--@section('title')--}}
{{--    Welcome to Mega E-shop--}}
{{--@endsection--}}

{{--@section('content')--}}
{{--    @include('layouts.inc.slider')--}}

{{--    <div class="py-5">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <h2>Featured Products</h2>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                @foreach ( $featured_products as $prod)--}}
{{--                <div class="col-lg-3 col-md-4 mb-3">--}}




{{--                      <div class="item">--}}
{{--                        <a href="{{ url('view-product',$prod->id)}}">--}}
{{--                         <div class="card">--}}
{{--                            <img src="{{ asset('assets/uploads/products/'.$prod->image ) }}" width="500" height="250" alt="Product image">--}}
{{--                            <div class="card-body">--}}
{{--                                <h5>{{ $prod->name }}</h5>--}}
{{--                                <span class="float-start">Ksh.{{ number_format($prod->selling_price) }}</span>--}}
{{--                                <span class="float-end"> <s>Was Ksh. {{ number_format($prod->original_price) }} </s></span>--}}
{{--                            </div>--}}
{{--                         </div>--}}
{{--                        </a>--}}
{{--                      </div>--}}

{{--                </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}

{{--    <section class="featured spad">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="section-title">--}}
{{--                        <h2>Featured Products</h2>--}}
{{--                    </div>--}}
{{--                    <div class="featured__controls">--}}
{{--                        <p>--}}
{{--                            Below are the featured products--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row featured__filter">--}}
{{--                @foreach ( $featured_products as $prod)--}}
{{--                    <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">--}}
{{--                        <div class="featured__item">--}}
{{--                            <div class="featured__item__pic set-bg" data-setbg="{{ asset('assets/uploads/products/'.$prod->image ) }}" >--}}
{{--                                <ul class="featured__item__pic__hover">--}}
{{--                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>--}}
{{--                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>--}}
{{--                                    <li><a href="{{url('cart/add',$featuredProduct->id)}}"><i class="fa fa-shopping-cart"></i></a></li>--}}
{{--                                </ul>--}}
{{--                                <div class="card">--}}
{{--                                    <img src="{{ asset('assets/uploads/products/'.$prod->image ) }}" alt="image here">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="featured__item__text">--}}
{{--                                <h6><a href="#">{{ $prod->name }}</a></h6>--}}
{{--                                <h5>Ksh. {{ number_format($prod->selling_price) }}</h5>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}


{{--    <div class="py-5">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <h2>Trending Categories</h2>--}}

{{--                    @foreach ($trending_category as $tcategory)--}}


{{--                      <div class="item">--}}
{{--                          <a href="{{ url('view-category/'.$tcategory->slug)}}">--}}
{{--                         <div class="card">--}}
{{--                            <img src="{{ asset('assets/uploads/category/'.$tcategory->image ) }}"  width="500" height="300" alt="Product image">--}}
{{--                            <div class="card-body">--}}
{{--                                <h5>{{ $tcategory->name }}</h5>--}}
{{--                                <p>--}}
{{--                                    {{ $tcategory->meta_decrip }}--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                         </div>--}}
{{--                        </a>--}}
{{--                      </div>--}}
{{--                    @endforeach--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}




{{--    <div class=" container container-fluid">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-4 col-md-3" id="left">--}}
{{--                <div class="footer-widget">--}}
{{--                    <h2>Get in Touch</h2>--}}
{{--                    <div class="contact-info">--}}
{{--                        <p><i class="fa fa-map-marker"></i>Mega E-shop</p>--}}
{{--                        <p><i class="fa fa-envelope"></i>megaeshop@gmail.com</p>--}}
{{--                        <p><i class="fa fa-phone"></i>+254792009556</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}




{{--            <div class="col-lg-4 col-md-3" id="center">--}}
{{--                <div class="footer-widget">--}}
{{--                    <h2>Company Info</h2>--}}
{{--                    <ul>--}}
{{--                        <li><a href="#">About Us</a></li>--}}
{{--                        <li><a href="#">Privacy Policy</a></li>--}}
{{--                        <li><a href="#">Terms & Condition</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-lg-4 col-md-3" id="right" >--}}
{{--                <div class="footer-widget">--}}
{{--                    <h2>Purchase Info</h2>--}}
{{--                    <ul>--}}
{{--                        <li><a href="#">Pyament Policy</a></li>--}}
{{--                        <li><a href="#">Shipping Policy</a></li>--}}
{{--                        <li><a href="#">Return Policy</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}





{{--    </div>--}}

{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-4 copyright">--}}
{{--                <p> </p><br>--}}
{{--                <h2 style="font-weight:bold">Welcome to shop with us</h2>--}}
{{--            </div>--}}

{{--            <div class="col-md-4 template-by payment-method">--}}
{{--                <p> </p><br>--}}
{{--                <h2 style="font-weight:bold">We accept: </h2>--}}
{{--                <img src="assets/images/payment-method.png" alt="Payment Method" />--}}
{{--            </div>--}}

{{--            <div class="col-md-4 template-by">--}}
{{--                <p> </p><br>--}}
{{--                <h2 style="font-weight:bold">Website by Mega E-shop</h2>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


{{--@endsection--}}

{{--@section('scripts')--}}
{{--    <script>--}}
{{--        $('.featured-carousel').owlCarousel({--}}
{{--    loop:true,--}}
{{--    margin:10,--}}
{{--    nav:true,--}}
{{--    dots:false,--}}
{{--    responsive:{--}}
{{--        0:{--}}
{{--            items:1--}}
{{--        },--}}
{{--        600:{--}}
{{--            items:3--}}
{{--        },--}}
{{--        1000:{--}}
{{--            items:4--}}
{{--        }--}}
{{--    }--}}
{{--})--}}
{{--    </script>--}}
{{--@endsection--}}


@extends('layouts.front')

@section('title')
    Welcome to Mega E-shop
@endsection

@section('content')
    @include('layouts.inc.slider')

    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>Featured Products</h2>
                <div class="owl-carousel featured-carousel owl-theme">

                    @foreach ($featured_products as $prod)


                        <div class="item">
                            <a href="{{ url('view-product',$prod->id)}}">
                                <div class="card">
                                    <img src="{{ asset('assets/uploads/products/'.$prod->image ) }}" width="500" height="250" alt="Product image">
                                    <div class="card-body">
                                        <h5>{{ $prod->name }}</h5>
                                        <span class="float-start">Ksh.{{ $prod->selling_price }}</span>
                                        <span class="float-end"> <s>Was Ksh. {{ $prod->original_price }} </s></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>Trending Categories</h2>

                <div class="owl-carousel featured-carousel owl-theme">
                    @foreach ($trending_category as $tcategory)




                        <div class="item">
                            <a href="{{ url('view-category/'.$tcategory->slug)}}">
                                <div class="card">
                                    <img  src="{{ asset('assets/uploads/category/'.$tcategory->image ) }}" width="500" height="200"  alt="Product image">
                                    <div class="card-body">
                                        <h5>{{ $tcategory->name }}</h5>
                                        <p>
                                            {{ $tcategory->meta_decrip }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>


            </div>
        </div>
    </div>




    <div class=" container container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-3" id="left">
                <div class="footer-widget">
                    <h2>Get in Touch</h2>
                    <div class="contact-info">
                        <p><i class="fa fa-map-marker"></i>Mega E-shop</p>
                        <p><i class="fa fa-envelope"></i>megaeshop@gmail.com</p>
                        <p><i class="fa fa-phone"></i>+254792009556</p>
                    </div>
                </div>
            </div>




            <div class="col-lg-4 col-md-3" id="center">
                <div class="footer-widget">
                    <h2>Company Info</h2>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Condition</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-3" id="right" >
                <div class="footer-widget">
                    <h2>Purchase Info</h2>
                    <ul>
                        <li><a href="#">Pyament Policy</a></li>
                        <li><a href="#">Shipping Policy</a></li>
                        <li><a href="#">Return Policy</a></li>
                    </ul>
                </div>
            </div>

        </div>





    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4 copyright">
                <p> </p><br>
                <h2 style="font-weight:bold">Welcome to shop with us</h2>
            </div>

            <div class="col-md-4 template-by payment-method">
                <p> </p><br>
                <h2 style="font-weight:bold">We accept: </h2>
                <img src="assets/images/payment-method.png" alt="Payment Method" />
            </div>

            <div class="col-md-4 template-by">
                <p> </p><br>
                <h2 style="font-weight:bold">Website by Mega E-shop</h2>
            </div>
        </div>
    </div>


@endsection

@section('scripts')
    <script>
        $('.featured-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            dots:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }
        })
    </script>
@endsection
