@extends('layouts.front')

@section('title')
{{ $category->name }}
@endsection

@section('content')
<div class="py-5 mb-4 shadow bg-warning border-top">
  <div class="container">
      <h5 class="mb-0">Collections/{{ $category->name }}</h5>
  </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <h2>{{ $category->name }}</h2>


                @foreach ($products as $prod)


                  <div class="col-md-3 mb-3">

                     <div class="card">
                       <a href="{{ url('view-product/'.$prod->id) }}">

                        <img src="{{ asset('assets/uploads/products/'.$prod->image ) }}" width="250" height="250" alt="Product image">
                        <div class="card-body">
                            {{--<a href="{{url('view-product',$prod->id)}}"></a>---}}
                            <h5 >{{ $prod->name }}</h5>
                            <span class="float-start">Ksh. {{ number_format( $prod->selling_price) }}</span>
                            <span class="float-end"> <s>Ksh.  {{number_format( $prod->original_price) }} </s></span>
                        </div>
                      </a>
                     </div>
                  </div>
                @endforeach



        </div>
    </div>
</div>
@endsection
