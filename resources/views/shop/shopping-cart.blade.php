@extends('master')

@section('title')
    Locoroco
@endsection

@section('content')
    @if (Session::has('cart'))
       <style>
           .inc a{
                   font-size: 19px;
                   text-decoration: none;
                   font-weight: bold;
                   padding: 2px;
           }
            .inc a:nth-child(2){
                
                    color:green;
           }
            .inc a:nth-child(3){
                
                    color:blue;
           }
            .inc a:nth-child(4){
                
                    color:red;
           }              
           .title{
                 display: inline-block;
                font-size: 14px;
                padding: 5px;
               }
           .det p{
               font-size: 18px;
           }
    </style>
                        
        <div class="container">
<div class="row">
	 <br>
            <div class="col-md-12">
               <h2 style="text-align:center; margin-bottom:20px;">My Shopping Cart</h2>
                <div class="col-md-6">
                   @foreach($products as $product) 
                   <div class="col-md-12" style=" margin-bottom: 50px;
    border: 1px solid rgb(234, 234, 234);
    padding-bottom: 25px;
    padding-top: 19px;">
                     <p style="text-align:center;font-size:18px; font-weight:bold; padding-bottom:8px;">{{ $product['item']['title'] }}</p>

                       <div class="col-md-3">
                        <img class="img-responsive" style="max-height:150px;" src="{{ $product['item']['imagePath'] }}">         

                       </div>
                       <div class="col-md-4 det">
                           <p>Quantity: {{ $product['qty'] }}</p>
                           <p>Price:{{ $product['price'] }} $</p> 
                           <p>ID : 204123</p> 
  
                       </div>
                       <div class="col-md-4 det">
                           <p>Size: XXL </p>
                           <p>Seller:Manos G</p> 
  
                       </div>
                       
                       <p style="position:absolute;left:80%; bottom:5px;" class="btn btn-success">View Product</p>
                   </div>   
                 @endforeach
                    <!--REVIEW ORDER-->

                    <!--REVIEW ORDER END-->
                </div>
                <div class="col-md-6 ">

                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            <h4>Review Order</h4>
                        </div>
                        <div class="panel-body">
                                @foreach($products as $product)
                                <div class="col-md-12">
                                   <p class="title">{{ $product['item']['title'] }}</p> 
                                   
                                    <div class="pull-right inc">
                                     <span style="font-weight:bold;">{{ $product['price'] }}$  </span>
                                      
                                      
                                      <a href="{{ route('product.increaseByOne', ['id' => $product['item']['id']]) }}">
                                      +
                                         </a>
                                       <a href="{{ route('product.reduceByOne', ['id' => $product['item']['id']]) }}">
                                      -
                                        </a>
                                         <a href="{{ route('product.remove', ['id' => $product['item']['id']]) }}">
                                      X 
                                        </a>
                                     <input type="number" class="input-sm" value="{{ $product['qty'] }}">
                                                                     
                                     </div>
                                     
                                </div>
                                   @endforeach
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                      <a href="{{ route('product.index') }}" type="button" class="btn btn-primary btn-lg btn-block"><span class="glyphicon glyphicon-share-alt"></span>Continue shopping</a>  
                                    </div>
                                    <div class="col-md-6">
                                <a href="{{ route('checkout') }}">  <button type="button" class="btn btn-primary btn-lg btn-block"> Checkout </button> </a>                                           
                                    </div>
                                </div>   
                                   
                                  
                                    
                                
                        </div>
                        
                    </div>                           
    						
                        </div>
                    </div>
                    <!--SHIPPING METHOD END-->
                </div>
                </div>
                </div>
</div>
       
       
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
            <div class="col-md-12">
                <h2 style="text-align:center;padding-top: 50px; text-decoration:underline;">Cart is Empty</h2>
                <img src="{{URL::to('pictures/empty_cart.jpg')}}" style="display:block;text-align:center;margin: 0px auto;">
            </div>
        </div>
    </div>
    @endif
@endsection