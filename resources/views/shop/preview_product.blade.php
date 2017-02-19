@extends('master')

@section('title')
    Locoroco
@endsection

@section('content')

    <link rel="stylesheet" href="{{ URL::to('src/css/preview_product.css') }}">

<div class="container-fluid">
    <div class="content-wrapper">	
		<div class="item-container">	
			<div class="container">	
				<div class="col-md-12">
                    <div class="col-md-4">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="product col-md-3 service-image-left" style="text-align: center;">
                                    <img id="item-display" src="{{$product->imagePath}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="product-title"><h3>{{$product->title}} </h3> </div>
                        <div class="product-desc">{{$product->short_desc}}</div>
                        <hr>
                        <div class="product-stock">
                            @if ($product->stock == 0)
                               <div class="out-of-stock"> {{'Out of Stock'}}</div>
                            @elseif ($product->stock <= 5)
                                <div class="low-in-stock"> {{'Low in Stock'}} - {{$product->stock}} left</div>
                            @elseif ($product->stock > 5)
                                <div class="in-stock"> {{ 'In Stock' }} - {{$product->stock}} left</div>
                            @endif
                        </div>
                        <div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> </div>
                        <h3>${{$product->price}}</h3>
                        <hr>
                        <div class="btn-group cart">
                            <a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn btn-success pull-right" role="button">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="container-fluid">		
			<div class="col-md-12 product-info">
                <ul id="myTab" class="nav nav-tabs nav_tabs">
                    <li class="active"><a href="#service-one" data-toggle="tab">DESCRIPTION</a></li>
                    <li><a href="#service-two" data-toggle="tab">REVIEWS</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade in active" id="service-one">
                        <section class="container product-info">{{$product->description}}</section>
                    </div>
					<div class="tab-pane fade" id="service-two">
						<section class="container">... </section>
					</div>
                </div>
                <hr>
            </div>
		</div>
	</div>
</div>
@endsection