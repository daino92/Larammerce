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
                                <h1 class="page-header">Order Management</h1>
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
                                    <th>Created at</th>
                                    <th>Address</th>
                                    <th>Name</th>
                                    <th>Surname</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->created_at }}</td>
                                        <td>{{ $order->address }}</td>
                                        <td>$order->user->name </td>
                                        <td>$order->user->surname</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection