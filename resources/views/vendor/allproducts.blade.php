@extends('master')

@section('content')
    <div id="page-wrapper" class="dashboard">
        <div class="container-fluid user">
            @include('vendor.prof')
            <div class="col-lg-10">
                <div id="page-wrapper" class="dashboard">
                    <div class="container-fluid">
                        @if(Session::has('flash_message'))
                            <div class="row">
                                <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                                    <div class="alert alert-success">
                                        {{ Session::get('flash_message') }}
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header">Product Management<a href="{{ route('vendor.addproducts') }}" class="btn btn-info pull-right">Add a product</a></h1>
                                <ol class="breadcrumb">
                                    <li class="active"><span class="fa fa-user"></span> Products</li>
                                </ol>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr class="bg-info">
                                    <th>No.</th>
                                    <th>Title</th>
                                    <th>Short Description</th>
                                    <th>Description</th>
                                    <th>Category</th>
                                    <th>Subcategory</th>
                                    <th>Price</th>
                                    <th>Stock</th>
                                    <th>Image</th>
                                    <th colspan="3" class="center">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->title }}</td>
                                        <td>{{ $product->short_desc }}</td>
                                        <td>{{ $product->description }}</td>
                                        <td>{{ $product->category }}</td>
                                        <td>{{ $product->subcategory }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->stock }}</td>
                                        <td><a href='{{ asset($product->imagePath) }}' target="_blank"><img src='{{ $product->thumbnail }}'></a></td>
                                        <td><a href="{{route('vendor.showproduct',$product->id)}}" class="btn btn-success btn-block btn">Show</a></td>
                                        <td><a href="{{route('vendor.editproduct',$product->id)}}" class="btn btn-warning btn-block">Edit</a></td>
                                        <td>
                                            {!! Form::open(['method' => 'DELETE', 'route'=>['vendor.destroyproduct', $product->id]]) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block btn-destroy']) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {!! $products->render() !!} <!--pagination-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection