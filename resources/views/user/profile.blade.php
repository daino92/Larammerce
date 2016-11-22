@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>{{ Auth::user()->username }}'s profile</h1>
                <hr>
                <h2><center>Order History</center></h2>
                <div class="panel panel-info">
                    <div class="panel-body">
                        @foreach($orders as $order)
                            @foreach($order->cart->items as $item)
                                <div class="row">
                                    <div class="col-xs-2">
                                        <img class="img-responsive" src="{{ $item['item']['imagePath'] }}">
                                    </div>
                                    <div class="col-xs-4">
                                        <h4 class="product-name"><strong>{{ $item['item']['title'] }}</strong></h4><h4><small>{{ $item['item']['description'] }}</small></h4>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="col-xs-6 text-right pull-right">
                                            <h4><strong> {{ $item['price'] }} $ <span class="text-muted">- </span>{{ $item['qty'] }} Units</strong></h4>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            @endforeach
                        @endforeach
                    </div>
                    <div class="panel-footer">
                        <div class="row text-center">
                            <div class="col-xs-9 pull-right">
                                <h4 class="text-right"><strong>Total Price: {{ $order->cart->totalPrice }} $</strong></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (Session::has('cart'))
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2><center>Ongoing Orders</center></h2>
                    <div class="panel panel-info">
                        <div class="panel-body">
                            @foreach($orders as $order)
                                @foreach($order->cart->items as $item)
                                    <div class="row">
                                        <div class="col-xs-2">
                                            <img class="img-responsive" src="{{ $item['item']['imagePath'] }}">
                                        </div>
                                        <div class="col-xs-4">
                                            <h4 class="product-name"><strong>{{ $item['item']['title'] }}</strong></h4><h4><small>{{ $item['item']['description'] }}</small></h4>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="col-xs-6 text-right pull-right">
                                                <h4><strong> {{ $item['price'] }} $ <span class="text-muted">- </span>{{ $item['qty'] }} Units</strong></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                @endforeach
                            @endforeach
                        </div>
                        <div class="panel-footer">
                            <div class="row text-center">
                                <div class="col-xs-9 pull-right">
                                    <h4 class="text-right"><strong>Total Price: {{ $order->cart->totalPrice }} $</strong></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection