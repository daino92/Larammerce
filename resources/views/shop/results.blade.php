@extends('master')

@section('title')
    Locoroco
@endsection

@section('content')
   <style>

    	.behclick-panel  .list-group {
    		margin-bottom: 0px;
		}
		.behclick-panel .list-group-item:first-child {
			border-top-left-radius:0px;
			border-top-right-radius:0px;
		}
		.behclick-panel .list-group-item {
			border-right:0px;
			border-left:0px;
		}
		.behclick-panel .list-group-item:last-child{
			border-bottom-right-radius:0px;
			border-bottom-left-radius:0px;
		}
		.behclick-panel .list-group-item {
			padding: 5px;
		}
		.behclick-panel .panel-heading {
			/* 				padding: 10px 15px;
                            border-bottom: 1px solid transparent; */
			border-top-right-radius: 0px;
			border-top-left-radius: 0px;
			border-bottom: 1px solid darkslategrey;
		}
		.behclick-panel .panel-heading:last-child{
			/* border-bottom: 0px; */
		}
		.behclick-panel {
			border-radius: 0px;
			border-right: 0px;
			border-left: 0px;
			border-bottom: 0px;
			box-shadow: 0 0px 0px rgba(0, 0, 0, 0);
		}
		.behclick-panel .radio, .checkbox {
			margin: 0px;
			padding-left: 10px;
		}
		.behclick-panel .panel-title > a, .panel-title > small, .panel-title > .small, .panel-title > small > a, .panel-title > .small > a {
			outline: none;
		}
		.behclick-panel .panel-body > .panel-heading{
			padding:10px 10px;
		}
		.behclick-panel .panel-body {
			padding: 0px;
		}
		 /* unvisited link */
		.behclick-panel a:link {
		    text-decoration:none;
		}

		/* visited link */
		.behclick-panel a:visited {
		    text-decoration:none;
		}

		/* mouse over link */
		.behclick-panel a:hover {
		    text-decoration:none;
		}

		/* selected link */
		.behclick-panel a:active {
		    text-decoration:none;
		}


    </style>
    
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
         <h2 style="text-align: center;padding-top: 25px;">
                You searched for: {{ Request::input('query') }} </h2>
                 @if (!$products->count())
            <h2><p style="    text-align: center;
    height: auto;
   
    padding-bottom: 38px;
    color: red;">
      No Details found. Try searching again!</p></h2>
       <img  src="{{URL::to('pictures/frog.png')}}" style="display: block;
    margin: 0px auto;
    text-align: center;">
        @else
		<div class="col-md-3" style="padding-top:20px;">
			<div id="accordion" class="panel panel-primary behclick-panel">
				<div class="panel-heading">
					<h3 class="panel-title">Advanced Search</h3>
				</div>
				<div class="panel-body" >
					<div class="panel-heading " >
						<h4 class="panel-title">
							<a data-toggle="collapse" href="#collapse0">
								<i class="indicator fa fa-caret-down" aria-hidden="true"></i> Price
							</a>
						</h4>
					</div>
					<div id="collapse0" class="panel-collapse collapse in" >
						<ul class="list-group">
							<li class="list-group-item">
								<div class="checkbox">
									<label>
										<input type="checkbox" value="">
										0 - 1000$
									</label>
								</div>
							</li>
							<li class="list-group-item">
								<div class="checkbox" >
									<label>
										<input type="checkbox" value="">
										1000$ - 2000$
									</label>
								</div>
							</li>
							<li class="list-group-item">
								<div class="checkbox"  >
									<label>
										<input type="checkbox" value="">
										2000$ - 6000$
									</label>
								</div>
							</li>
							<li class="list-group-item">
								<div class="checkbox"  >
									<label>
										<input type="checkbox" value="">
										More Than 6000$
									</label>
								</div>
							</li>
						</ul>
					</div>

					<div class="panel-heading " >
						<h4 class="panel-title">
							<a data-toggle="collapse" href="#collapse1">
								<i class="indicator fa fa-caret-down" aria-hidden="true"></i> Brand
							</a>
						</h4>
					</div>
					<div id="collapse1" class="panel-collapse collapse in" >
						<ul class="list-group">
							<li class="list-group-item">
								<div class="checkbox">
									<label>
										<input type="checkbox" value="">
										Adidas
									</label>
								</div>
							</li>
							<li class="list-group-item">
								<div class="checkbox" >
									<label>
										<input type="checkbox" value="">
										Volcom
									</label>
								</div>
							</li>
							<li class="list-group-item">
								<div class="checkbox"  >
									<label>
										<input type="checkbox" value="">
										Nike
									</label>
								</div>
							</li>
						</ul>
					</div>
					<div class="panel-heading" >
						<h4 class="panel-title">
							<a data-toggle="collapse" href="#collapse3"><i class="indicator fa fa-caret-down" aria-hidden="true"></i> Color</a>
						</h4>
					</div>
					<div id="collapse3" class="panel-collapse collapse in">
						<ul class="list-group">
							<li class="list-group-item">
								<div class="checkbox">
									<label>
										<input type="checkbox" value="">
										red
									</label>
								</div>
							</li>
							<li class="list-group-item">
								<div class="checkbox" >
									<label>
										<input type="checkbox" value="">
										blue
									</label>
								</div>
							</li>
							<li class="list-group-item">
								<div class="checkbox"  >
									<label>
										<input type="checkbox" value="">
										green
									</label>
								</div>
							</li>
						</ul>
					</div>
					<div class="panel-heading" >
						<h4 class="panel-title">
							<a data-toggle="collapse" href="#collapse2"><i class="indicator fa fa-caret-right" aria-hidden="true"></i> Dummy Collapse</a>
						</h4>
					</div>
					<div id="collapse2" class="panel-collapse collapse">
						<ul class="list-group">
							<li class="list-group-item">
								<div class="checkbox">
									<label>
										<input type="checkbox" value="">
										7
									</label>
								</div>
							</li>
							<li class="list-group-item">
								<div class="checkbox" >
									<label>
										<input type="checkbox" value="">
										8
									</label>
								</div>
							</li>
							<li class="list-group-item">
								<div class="checkbox">
									<label>
										<input type="checkbox" value="">
										9
									</label>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
    
    <div class="col-md-9"  style="padding-top:20px;">
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
        	</div>

    </div>
    </div>
</div>

    
    <script>
    	

        function toggleChevron(e) {
		$(e.target)
				.prev('.panel-heading')
				.find("i.indicator")
				.toggleClass('fa-caret-down fa-caret-right');
	}
	$('#accordion').on('hidden.bs.collapse', toggleChevron);
	$('#accordion').on('shown.bs.collapse', toggleChevron);


</script>
@endsection