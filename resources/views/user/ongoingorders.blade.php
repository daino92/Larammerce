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
                        @if (Session::has('cart'))
                            <h2 class="user section">Ongoing Orders</h2>
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
                        @else
                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                                    <h2>No items in Cart!</h2>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection