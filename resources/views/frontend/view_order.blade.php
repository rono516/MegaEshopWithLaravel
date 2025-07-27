@extends('layouts.front')

@section('title')
   Order Details
@endsection

@section('content')


    <div class="container mt-5">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <h6>Order {{$order->tracking_no}} items  | <a href="{{url('orders')}}"> All Orders</a></h6>
                    <hr>
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($oItems as $oI)

                            <tr>


                                <td>{{$oI->id}}</td>
                                <td>{{\App\Models\Product::where('id',"=",$oI->prod_id)->first()->name}}</td>
                                <td>{{$oI->qty}}</td>
                                <td>{{$oI->price}}</td>



                            </tr>

                        @endforeach

                        </tbody>
                    </table>
                    <hr>

                    <p>Number of orders items | {{$oItems->count()}}</p>



                </div>
            </div>
        </div>
    </div>


@endsection
