@extends('admin.adminMaster')

@section('contents')
    <div id="page-wrapper" class="dashboard" >
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Product <small>Overview</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <i class="fa fa-fw fa-bar-chart-o"></i> Products
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div id="wrapper">
        <div class="container-fluid admin" style="height:auto;background:#EDF1F5;">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr class="bg-info">
                        <th>No. </th>
                        <th>Product Creation date</th>
                        <th>Product Creation time</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>User ID</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->created_at->format('d-m-Y') }}</td>
                            <td>{{ $product->created_at->format('H:i:s') }}</td>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->category }}</td>
                            <td>{{ $product->price }}$</td>
                            <td>{{ $product->user_id }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection