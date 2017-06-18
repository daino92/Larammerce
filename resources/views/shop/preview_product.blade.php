@extends('master')

@section('title')
    Locoroco
@endsection

@section('content')
<div class="container-fluid">
    <div class="content-wrapper">
		<div class="item-container">	
			<div class="container">
				<div class="col-md-12">
                    <div class="col-md-4">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="product col-md-3 service-image-left">
                                    <img id="item-display" src="{{$product->imagePath}}" alt="{{$product->title}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="product-title"><h3>{{$product->title}}</h3></div>
                        <div class="product-desc">{{$product->short_desc}}</div>
                        <hr>
                        <div class="product-stock">
                            @if ($product->stock == 0)
                                <div class="out-of-stock"><span class="badge badge-danger"> {{'Out of Stock'}}</span></div>
                            @elseif ($product->stock <= 5)
                                <div class="low-in-stock"><span class="badge badge-warning"> {{'Low in Stock'}} - {{$product->stock}} left</span></div>
                            @elseif ($product->stock > 5)
                                <div class="in-stock"><span class="badge badge-success"> {{ 'In Stock' }} - {{$product->stock}} left</span></div>
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