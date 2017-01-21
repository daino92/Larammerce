@extends('master')

@section('styles')
    <link rel="stylesheet" href="{{URL::to('src/css/user.css')}}">
@endsection

@section('content')
    <div id="page-wrapper" class="dashboard">
        <div class="container-fluid" style="height:700px;">
            @include('vendor.prof')
            <div class="col-lg-10">
                <div id="page-wrapper" class="dashboard">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header">Product Management</h1>
                                <ol class="breadcrumb">
                                    <li class="active">
                                        <span class="fa fa-user"></span> <a href="{{ route('vendor.allproducts') }}">Products</a> / Creation
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <h1>Create new product</h1>
                        {!! Form::open(['route' => 'vendor.allproducts', 'files'=>true]) !!}
                        <div class="form-group">
                            {!! Form::label('Title', 'Title:') !!}
                            {!! Form::text('title',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Description', 'Description:') !!}
                            {!! Form::text('description',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Category', 'Category:') !!}
                            <select class="form-control" id="category" name="category">
                                <option value="Books">Books</option>
                                <option value="Mobiles">Mobiles</option>
                                <option value="HealthProducts">Health Products</option>
                                <option value="PCs">Personal Computers</option>
                                <option value="Electronics">Electronics</option>
                                <option value="Games">Games</option>
                            </select>
                        </div>
                        <div class="form-group">
                            {!! Form::label('Price', 'Price:') !!}
                            {!! Form::text('price',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Stock', 'Stock:') !!}
                            {!! Form::text('stock',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('File', 'File:') !!}
                            {!! Form::file('image') !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
                            <a href="{{ route('vendor.allproducts')}}" class="btn btn-primary">Back</a>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection