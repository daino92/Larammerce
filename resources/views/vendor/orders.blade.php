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
                                            <td>@if(isset($order->user->name)){{($order->user->name)}}@endif </td>
                                            <td>@if(isset($order->user->name)){{($order->user->surname)}}@endif </td>
                                            <td>@if(isset($order->user->price)){{($order->user->price)}}@endif </td>
                                            <td>@if(isset($order->user->quantity)){{($order->user->quantity)}}@endif </td>
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