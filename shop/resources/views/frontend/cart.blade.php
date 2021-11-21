@extends('layouts.front')

@section('title')
    My Cart
@endsection

@section('content') 

<div class="py-5 mb-4 shadow bg-warning border-top">
    <div class="container">
        <h5 class="mb-0">
            <a href="{{ url('/') }}">Home</a>
            /
            <a href="{{ url('cart') }}">
                Cart
            </a>
        </h5>
    </div>
</div>
        <div class="container my-5">
            <div class="card shadow">
                <div class="card-body">
                    @php
                        $total = 0;
                    @endphp
                    @foreach ($cartItems as $item)                       
                    
                    <div class="row product_data">
                        <div class="col-md-2 my-auto">
                            <img src="{{ asset('assets/uploads/products/'.$item->products->image) }}" height="70px" width="70px" alt="Image here">
                        </div>
                        <div class="col-md-3 my-auto">
                            <h3>{{ $item->products->name }}</h3>
                        </div>
                        <div class="col-md-2 my-auto">
                            <h3>Ksh. {{ $item->products->selling_price }}</h3>
                        </div>
                        <div class="col-md-3 my-auto">
                            <input type="hidden" class="prod_id" value="{{ $item->prod_id }}">
                            <label for="Quantity">Quantity</label>
                            <div class="input-group text-center mb-3" style="width:130px;">
                                <button class="input-group-text changeQuantity decrement-btn">-</button>
                                <input type="text" name="quantity" class="form-control qty-input text-center" value="{{ $item->prod_qty }}">
                                <button class="input-group-text changeQuantity increment-btn">+</button>

                            </div>
                        </div>
                        <div class="col-md-2 my-auto">
                            <button class="btn btn-danger delete-cart-item"> <i class="fa fa-trash"></i> Remove</button>
                        </div>
                    </div>
                    @php
                        $total +=  $item->products->selling_price*$item->prod_qty
                    @endphp
                    @endforeach
                </div>  
                <div class="card-footer">
                    <h6>Total Price: Ksh.{{ $total }}  
                    <a href="{{ url('checkout') }}" class="btn btn-outline-success float-end">Proceed to Checkout</a>
                    </h6>

                </div>             

            </div>
        </div>

@endsection