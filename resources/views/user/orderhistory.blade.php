@extends('master')

@section('content')
    <div id="page-wrapper" class="dashboard">
        <div class="container-fluid user">
            @include('user.prof')
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-md-8 col-md-offset-1">
                        <h1 class="username">{{ Auth::user()->username }}'s profile</h1>
                        <hr>
                        <h2 class="user section">Order History</h2>
                        @foreach($orders as $order)
                            <div class="panel panel-info">
                                <div class="panel-body">
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
                                </div>
                                <div class="panel-footer">
                                    <div class="row text-center">
                                        <div class="col-xs-9 pull-right">
                                            <h4 class="text-right"><strong>Total Price: {{ $order->cart->totalPrice }} $</strong></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection