@extends('master')

@section('styles')
    <link rel="stylesheet" href="{{URL::to('src/css/user.css')}}">
@endsection

@section('content')
    <div id="page-wrapper" class="dashboard">
        <div class="container-fluid" style="height:auto;">
            @include('vendor.prof')
            <div class="col-lg-10">
                <div id="page-wrapper" class="dashboard">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header">User Management</h1>
                                <ol class="breadcrumb">
                                    <li class="active">
                                        <span class="fa fa-user"></span> <a href="{{ route('vendor.allproducts') }}">Products</a> / Show
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <h1>Show {{$product->title}}'s information</h1>
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label for="Title" class="col-sm-2 control-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="Title" placeholder={{$product->title}} readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="short_desc" class="col-sm-2 control-label">Short Description</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="short_desc" placeholder={{$product->short_desc}} readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Description" class="col-sm-2 control-label">Description</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="Description" placeholder={{$product->description}} readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Category" class="col-sm-2 control-label">Category</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="Category" placeholder={{$product->category}} readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Price" class="col-sm-2 control-label">Price</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="Price" placeholder={{$product->price}} readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Stock" class="col-sm-2 control-label">Stock</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="Stock" placeholder={{$product->stock}} readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <a href="{{ route('vendor.allproducts')}}" class="btn btn-primary">Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection