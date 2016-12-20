@extends('layouts.master')

@section('title')
    Locoroco
@endsection

@section('content')
   <div class="container-fluid search-area" style="background: url('{{ URL::to('pictures/search.jpg') }}');background-repeat:no-repeat;">
       <div class="row">
           <div class="algn-center">
               <div id="custom-search-input">
                   <div class="input-group col-md-12">
                       <input type="text" class="form-control input-lg" placeholder="Search" />
                       <span class="input-group-btn">
                           <button class="btn btn-info btn-lg" type="button">
                               <i class="glyphicon glyphicon-search"></i>
                           </button>
                       </span>
                   </div>
               </div>
           </div>
       </div>
   </div>
   @if(Session::has('success'))
       <div class="row">
           <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
               <div id="charge-message" class="alert alert-success">
                   {{ Session::get('success') }}
               </div>
           </div>
       </div>
   @endif
    <div class="container">
    @foreach($products->chunk(4) as $productChunk)
        <div class="row">
            @foreach($productChunk as $product)
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="{{ $product->imagePath }}" alt="...">
                        <div class="caption">
                            <h3>{{ $product->title }}</h3>
                            <p class="description">{{ $product->description }}</p>
                            <div class="clearfix">
                                <div class="pull-left price">$ {{ $product->price }}</div>
                                <a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn btn-success pull-right" role="button">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
    <!-- Place to store menu styles, sub menus and other goodies! -->
    </div>
@endsection