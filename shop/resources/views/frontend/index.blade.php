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
                        <a href="{{ url('view-product')}}">
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
                            <img src="{{ asset('assets/uploads/category/'.$tcategory->image ) }}"  width="500" height="300" alt="Product image">
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