@extends('master')

@section('title')
    Locoroco
@endsection

@section('content')
    <div id="container">
        <h2 style="text-align: center">You searched for: {{ Request::input('query') }} </h2>
        @if (!$products->count())
            <p>No Details found. Try searching again!</p>
        @else
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
        @endif
    </div>
@endsection