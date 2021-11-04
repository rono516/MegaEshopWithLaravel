@extends('layouts.front')

@section('title', $products->name)

@section('content')

    <div class="py-5 mb-4 shadow bg-warning border-top">
        <div class="container">
            <h5 class="mb-0">Collections/Category/Product Name</h5>
        </div>
    </div>

   <div class="container">
       <div class="card-shadow">
         <div class="card-body">
       <div class="row">
           <div class="col-md-4 border-right">
               <img src="{{ asset('assets/uploads/products/'.$products-> image) }}" class="w-100" alt="">
           </div>
           <div class="col-md-8">
               <h2 class="mb-2">
                   {{ $products->name }}
                   <label style="font-size:16px;" class="float-end badge bg-danger trending_tag">Trending</label>

               </h2>
               <hr>
               <label class="mb-3">Original Price: <s>Ksh.{{ $products->original_price}}</s></label>
               <label class="fw-bold">Selling Price: Ksh.{{ $products->selling_price }}</label>
               <p class="mt-3">
                   {{ $products->small_description }}
               </p>
               <hr>
               @if ($products->qty> 0)
                   <label class="badge bg-success">In stock</label>
               @else
                  <label class="badge bg-danger">Out of Stock</label>
               @endif
               <div class="row mt-2">
                   <div class="col-md-2">
                       <label for="Quantity">Quantity</label>
                       <div class="input-group text-center mb-3">
                           <span class="input-group-text"></span>
                           <input type="text" name="quantity" value="1" class="form-control"/>
                           <span class="input-group-text"></span>
                       </div>
                   </div>
                   <div class="col-md-10">
                       <br>
                       <button type="button" class="btn btn-success mb-3 float-start">Add to Wishlist</button>
                       
                       <button type="button" class="btn  btn-primary mb-3 float-start">Add to Cart</button>
                   </div>
               </div>
           </div>
        </div>
       </div>
    </div>
   </div>

@endsection