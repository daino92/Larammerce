@extends('master')

@section('content')
    <div id="page-wrapper" class="dashboard">
        <div class="container-fluid user">
            @include('vendor.prof')
            <div class="col-lg-10">
                <div id="page-wrapper" class="dashboard">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header">Product Management</h1>
                                <ol class="breadcrumb">
                                    <li class="active">
                                        <span class="fa fa-user"></span> <a href="{{ route('vendor.allproducts') }}">Products</a> / Edit
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <h1 class="username">Update {{$product->title}}'s information</h1>
                        {!! Form::model($product,['method' => 'PATCH','route'=>['vendor.update',$product->id],'files'=>true]) !!}
                        <div class="form-group">
                            {!! Form::label('Title', 'Title:') !!}
                            {!! Form::text('title',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('short_desc', 'Short Description:') !!}
                            {!! Form::textarea('short_desc',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Description', 'Description:') !!}
                            {!! Form::textarea('description',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Category', 'Category:') !!}
                            <select class="form-control" id="category" name="category">
                                @foreach($SubCategories as $SubCategory)
                                    <option value="{{$SubCategory->category}}">{{str_replace('_', ' & ', $SubCategory->category)}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            {!! Form::label('Subcategory', 'Subcategory:') !!}
                            <select class="form-control" id="subcategory" name="subcategory">
                                @foreach($SubCategories as $SubCategory)
                                    @foreach(json_decode($SubCategory->subcategory,true) as $sub)
                                        <option value="{{$sub['name']}}">{{$sub['name']}}</option>
                                    @endforeach
                                @endforeach
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
                            {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                            <a href="{{ route('vendor.allproducts')}}" class="btn btn-primary">Back</a>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection