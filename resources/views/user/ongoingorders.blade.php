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