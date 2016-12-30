@extends('layouts.master')

@section('title')
    Locoroco
@endsection

@section('content')
    @include('shop.search')

    @if(Session::has('success'))
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                <div id="charge-message" class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            </div>
        </div>
    @endif
    <div class="container">
    <!-- Front Page:: Place to store menu styles, sub menus and other goodies! -->
    </div>
@endsection