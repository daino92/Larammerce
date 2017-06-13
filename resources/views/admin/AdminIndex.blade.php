@extends('admin.adminMaster')

<link rel="stylesheet" href="{{URL::to('src/css/admin.css')}}">

@section('contents')
    <div id="page-wrapper" class="dashboard">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Index Page <small>Overview</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <i class="fa fa-home" aria-hidden="true"></i> Front Page
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
                        <th>Category</th>
                        <th>Category Image</th>
                        <th>Sub-category</th>
                        <th>Sub-category Image</th>
                        <th colspan="3" style="text-align: center;">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($SubCategories as $SubCategory)
                        <tr>
                            <td>{{str_replace('_', ' & ', $SubCategory->category)}}</td>
                            <td><img src="../pictures/categories/{{$SubCategory->image}}"></td>
                            @foreach((json_decode($SubCategory->subcategory,true)) as $sub)
                                <td><a href="#">{{$sub['name']}}</a></td>
                                <td><img src="../{{$sub['img']}}"></td>
                            @endforeach
                            {{--<td><a href="{{route('admin.users.showusers',$user->id)}}" class="btn btn-success btn-block btn">Show</a></td>
                            <td><a href="{{route('admin.users.edituser',$user->id)}}" class="btn btn-warning btn-block">Edit</a></td>
                            <td>
                                {!! Form::open(['method' => 'DELETE', 'route'=>['admin.users.destroyuser', $user->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block btn-destroy']) !!}
                                {!! Form::close() !!}
                            </td>--}}
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection