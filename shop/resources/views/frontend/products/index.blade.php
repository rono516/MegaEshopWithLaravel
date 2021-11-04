@extends('layouts.front')

@section('title')
{{ $category->name }}
@endsection

@section('content')
<div class="py-5">
    <div class="container">
        <div class="row">
            <h2>{{ $category->name }}</h2>
            
                
                @foreach ($products as $prod)
                
            
                  <div class="col-md-3 mb-3">
                     <div class="card">
                       <a href="{{ url('view-category/'.$category->slug.'/'.$prod->meta_description) }}">
                        <img src="{{ asset('assets/uploads/products/'.$prod->image ) }}" width="250" height="250" alt="Product image">
                        <div class="card-body">
                            <h5>{{ $prod->name }}</h5>
                            <span class="float-start">{{ $prod->selling_price }}</span>
                            <span class="float-end"> <s> {{ $prod->original_price }} </s></span>
                        </div>
                      </a>
                     </div>
                  </div>
                @endforeach

            
           
        </div>
    </div>
</div>   
@endsection