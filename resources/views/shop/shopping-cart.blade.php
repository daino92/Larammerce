@extends('master')

@section('title')
    Locoroco
@endsection

@section('content')
    @if (Session::has('cart'))
        <div class="container" style="margin-top:100px;">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <h5><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</h5>
                                    </div>
                                    <div class="col-xs-6">
                                        <a href="{{ route('product.index') }}" type="button" class="btn btn-primary btn-sm btn-block"><span class="glyphicon glyphicon-share-alt"></span>Continue shopping</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            @foreach($products as $product)
                               <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-2"><img class="img-responsive" src="{{ $product['item']['imagePath'] }}">
                                    </div>
                                    <div class="col-xs-4">
                                        <h4 class="product-name"><strong>{{ $product['item']['title'] }}</strong></h4><h4><small>{{ $product['item']['description'] }}</small></h4>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="col-xs-3 text-right">
                                            <h4><strong>{{ $product['price'] }} $ <span class="text-muted">x</span></strong></h4>
                                        </div>
                                        <div class="col-xs-9">
                                        <a href="{{ route('product.reduceByOne', ['id' => $product['item']['id']]) }}" type="button" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-minus"> </span></a>
                                        <input type="text" class="input-sm" value="{{ $product['qty'] }}">
                                        <a href="{{ route('product.increaseByOne', ['id' => $product['item']['id']]) }}" type="button" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-plus"> </span></a><br>
                                        <a href="{{ route('product.remove', ['id' => $product['item']['id']]) }}" type="button" class="btn btn-danger btn-sm form-control delete-item"><span class="glyphicon glyphicon-trash"> </span></a>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <hr>
                            @endforeach
                         <div class="container-fluid">
                            <div class="row">
                                <div class="text-center">
                                    <div class="col-xs-9">
                                        <h6 class="text-right">Added items?</h6>
                                    </div>
                                    <div class="col-xs-3">
                                        <button type="button" class="btn btn-default btn-sm btn-block">
                                            Update cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                         </div>
                        </div>
                        <div class="panel-footer">
                            <div class="row text-center">
                                <div class="col-xs-9">
                                    <h4 class="text-right">Total: <strong>{{ $totalPrice }} $</strong></h4>
                                </div>
                                <div class="col-xs-3">
                                    <a href="{{ route('checkout') }}" type="button" class="btn btn-success btn-block">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
       <div class="container-fluid" style="height:350px;">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2 style="text-align:center;">No items in Cart!</h2>
            </div>
        </div>
    </div>
    @endif
@endsection