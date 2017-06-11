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
                                        <span class="fa fa-user"></span> <a href="{{ route('vendor.allproducts') }}">Products</a> / Creation
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <h1 class="username">Create new product</h1>
                        <div class="form_center">
                            {!! Form::open(['route' => 'vendor.allproducts', 'files'=>true]) !!}
                            <div class="form-group">
                                {!! Form::label('Title', 'Title:') !!}
                                {!! Form::text('title',null,array('class'=>'form-control','required' => 'required')) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('short_desc', 'Short Description:') !!}
                                {!! Form::textarea('short_desc',null,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('Description', 'Description:') !!}
                                {!! Form::textarea('description',null,array('class'=>'form-control','required' => 'required')) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('Category', 'Category:') !!}
                                <select class="form-control" id="category" name="category" required>
                                    <option selected value="">Please Select a category</option>
                                    @foreach($SubCategories as $SubCategory)
                                        <option value="{{str_replace('_', ' & ', $SubCategory->category)}}">{{str_replace('_', ' & ', $SubCategory->category)}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                {!! Form::label('Subcategory', 'Subcategory:') !!}
                                <select class="form-control" id="subcategory" name="subcategory" required>
                                    <option selected value="">Please Select a Subcategory</option>
                                    @foreach($SubCategories as $SubCategory)
                                        @foreach(json_decode($SubCategory->subcategory,true) as $sub)
                                            <option value="{{$sub['name']}}">{{$sub['name']}}</option>
                                        @endforeach
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                {!! Form::label('Price', 'Price:') !!}
                                {!! Form::text('price',null,array('class'=>'form-control','required' => 'required')) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('Stock', 'Stock:') !!}
                                {!! Form::text('stock',null,array('class'=>'form-control','required' => 'required')) !!}
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
    </div>
@endsection

@section('scripts')
    <script>
        $('#category').change(function(e){
            $('#subcategory').prop('disabled', !$(this).val());
        });
        $(function(){
            $('#subcategory').prop('disabled', true);
        });
    </script>
@endsection