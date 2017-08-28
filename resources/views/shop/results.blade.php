@extends('master')

@section('title')
    Locoroco
@endsection

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h2 style="text-align: center;padding-top: 25px;"> You searched for: {{ Request::input('query') }} </h2>
				@if (!$products->count())
					<p class="noProducts">No products were found. Try searching again!</p>
					<img class="Frog" src="{{URL::to('pictures/frog.png')}}">
				@else
					<div class="col-md-2"></div>
					<div class="col-md-8"  style="padding-top:20px;">
						@foreach($products->chunk(4) as $productChunk)
							<div class="row">
								@foreach($productChunk as $product)
									<div class="col-sm-6 col-md-3">
										<div class="thumbnail">
											<img src="{{ $product->imagePath }}" alt="{{ $product->title }}">
											<div class="caption">
												<a href="{{route('preview_product',$product->id)}}"> <h3>{{ $product->title }}</h3></a>
												<p class="description show-read-more">{{ $product->short_desc }}</p>
												<div class="clearfix">
													<div class="pull-left price">$ {{ $product->price }}</div>
													<a href="{{ route('addToCart', ['id' => $product->id]) }}" class="btn btn-success pull-right" role="button">Add to Cart</a>
												</div>
											</div>
										</div>
									</div>
								@endforeach
							</div>
						@endforeach
				@endif
					</div>
					<div class="col-md-2"></div>
			</div>
		</div>
	</div>

   <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
   <script type="text/javascript" src="{{ URL::to('src/js/readMore.js') }}"></script>
@endsection