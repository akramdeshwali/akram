@extends('master')
@section('content')

<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h2>Order List</h2>
              @foreach ($orders as $item)
                <div class="row searched-item cart-list-devider">
                    <div class="col-sm-3">
                        <a href="detail/{{ $item->id }}">
                            <img class="trending-img" src={{$item->gallary}}>
                        </a>
                    </div>
                    <br>
                    <div class="col-sm-3">
                            <div class=" ">
                              <h2>{{ $item->name}}</h2>
                              <h5>Delivery Status : {{ $item->status}}</h5>
                              <h5>Payment Status : {{ $item->payment_status}}</h5>
                              <h5>Payment Method : {{ $item->payment_method}}</h5>
                              <h5>Delivery Address : {{ $item->address}}</h5>
                              <h5>Price : {{ $item->price}}</h5>
                            </div>
                    </div>
                    <br>
                    <div class="col-sm-3">
                        {{-- <a href="/removecart/{{ $item->cart_id }}" class="btn btn-warning">Remove from Cart</a> --}}
                    </div>
                </div>
                @endforeach
        </div>
    </div>
</div>
@endsection