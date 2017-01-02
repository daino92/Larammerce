@extends('master')

@section('styles')
    <link rel="stylesheet" href="{{URL::to('src/css/user.css')}}">
@endsection

@section('content')
    <div id="page-wrapper" class="dashboard">
        <div class="container-fluid">
            <div class="col-lg-2 left_menu_pos">
                <div class="container">
                    <div class="row">
                        <ul class="left_menu">
                            <li class="left_menu"><a class="left_menu" href="#">Order History</a></li>
                            <li class="left_menu"><a class="left_menu" href="#">Ongoing Orders</a></li>
                            <li class="left_menu"><a class="left_menu" href="#">Settings</a></li>
                            <li class="left_menu"><a class="left_menu" href="#">Favorites</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-md-8 col-md-offset-1">
                        <h1 style="text-align:center;">{{ Auth::user()->username }}'s profile</h1>
                        <hr>
                        <h2><center>Order History</center></h2>
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

            @if (Session::has('cart'))
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2><center>Ongoing Orders</center></h2>
                            <div class="panel panel-info">
                                <div class="panel-body">
                                    @foreach($products as $product)
                                        <div class="row">
                                            <div class="col-xs-2">
                                                <img class="img-responsive" src="{{ $product['item']['imagePath'] }}">
                                            </div>
                                            <div class="col-xs-4">
                                                <h4 class="product-name"><strong>{{ $product['item']['title'] }}</strong></h4><h4><small>{{ $product['item']['description'] }}</small></h4>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="col-xs-6 text-right pull-right">
                                                    <h4><strong> {{ $product['price'] }} $ <span class="text-muted">- </span>{{ $product['qty'] }} Units</strong></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                    @endforeach
                                </div>
                                <div class="panel-footer">
                                    <div class="row text-center">
                                        <div class="col-xs-9 pull-right">
                                            <h4 class="text-right"><strong>Total Price: {{ $totalPrice }} $</strong></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection