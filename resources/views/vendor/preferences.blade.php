@extends('master')

@section('styles')
    <link rel="stylesheet" href="{{URL::to('src/css/user.css')}}">
@endsection

@section('content')
    <div id="page-wrapper" class="dashboard">
        <div class="container-fluid" style="height:700px;">
            @include('vendor.prof')
            <div class="col-lg-10">
                preferences
            </div>
        </div>
    </div>
@endsection