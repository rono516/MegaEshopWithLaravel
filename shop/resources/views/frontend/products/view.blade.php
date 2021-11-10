@extends('layouts.front')

@section('title', $products->name)

@section('content')

    <div class="py-5 mb-4 shadow bg-warning border-top">
        <div class="container">
            <h5 class="mb-0">Collections/{{ $products->category->name }}/{{ $products->name }}</h5>
        </div>
    </div>

   <div class="container">
       <div class="card-shadow product_data">
         <div class="card-body">
       <div class="row">
           <div class="col-md-4 border-right">
               <img src="{{ asset('assets/uploads/products/'.$products-> image) }}" class="w-100" alt="">
           </div>
           <div class="col-md-8">
               <h2 class="mb-2">
                   {{ $products->name }}
                   @if ($products->trending == "1")                       
                   
                   <label style="font-size:16px;" class="float-end badge bg-danger trending_tag">Trending</label>
                   @endif
               </h2>
               <hr>
               <label class="mb-3">Original Price: <s>Ksh.{{ $products->original_price}}</s></label>
               <label class="fw-bold">Selling Price: Ksh.{{ $products->selling_price }}</label>
               <p class="mt-3">
                   {{ $products->meta_description }}
               </p>
               <hr>
               @if ($products->qty> 0)
                   <label class="badge bg-success">In stock</label>
               @else
                  <label class="badge bg-danger">Out of Stock</label>
               @endif
               <div class="row mt-2">
                   <div class="col-md-3">
                       <input type="hidden" value="{{$products->id}}" class="prod_id">
                       <label for="Quantity">Quantity</label>
                       <div class="input-group text-center mb-3" >
                           <button class="input-group-text decrement-btn">-</button>
                           <input type="text" name="quantity " value="1" class="form-control text-center qty-input"/>
                           <button class="input-group-text increment-btn">+</button>
                       </div>
                   </div>
                   <div class="col-md-10">
                       <br>
                       <button type="button" class="btn  btn-primary mb-3 addToCartBtn float-start btn-sm">Add to Cart <i class="fa fa-shopping-cart"></i></button>
                       <button type="button" class="btn btn-success mb-3 float-start mr-1 btn-sm" style="margin-right: 5px;">Add to Wishlist <i class="fa fa-heart"></i></button>
                       
                       
                   </div>
               </div>
           </div>
        </div>
       </div>
    </div>
   </div>

@endsection

@section('scripts')
<script>

    $('.addToCartBtn').click(function (e) { 
        e.preventDefault();
        var product_id = $(this).closest('.product_data').find('.prod_id').val(); 
        var product_qty = $(this).closest('.product_data').find('.qty-input').val(); 

        $.ajaxSetup({
         headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
         });
        
        $.ajax({
            method: "POST",
            url: "/add-to-cart",
            data: {
                'product_id': product_id,
                'product_qty': product_qty,
            },
            success: function (response) {
                swal (response.status);
                
            }
        });
    });

    $(document).ready(function(){
       $('.increment-btn').click(function(e){
            e.preventDefault();

            var inc_value = $('.qty-input').val();
            var value = parseInt(inc_value, 10);
            value = isNaN(value)? 0: value;
            if (value< 10)
            {
                value++;
                $('.qty-input').val(value);

            }
       });
       $('.decrement-btn').click(function(e){
            e.preventDefault();

            var dec_value = $('.qty-input').val();
            var value = parseInt(dec_value, 10);
            value = isNaN(value)? 0: value;
            if (value> 1)
            {
                value--;
                $('.qty-input').val(value);

            }
       });
    });
</script>
    
@endsection