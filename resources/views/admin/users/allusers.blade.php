@extends('admin.adminMaster')

@section('contents')
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
                    <h1 class="page-header">User Management<a href="{{ route('admin.users.adduser') }}" class="btn btn-info pull-right">Add a user</a></h1>
                    <ol class="breadcrumb">
                        <li class="active"><span class="fa fa-user"></span> Users</li>
                    </ol>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr class="bg-info">
                        <th>No.</th>
                        <th>Creation date</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th colspan="3" style="text-align: center;">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->created_at->format('d-m-Y') }}</td>
                            <td>{{ $user->username }}</td>
                            @foreach ($user->roles as $role)
                                <td>{{$role->name}}</td>
                            @endforeach
                            <td><a href="{{route('admin.users.showusers',$user->id)}}" class="btn btn-success btn-block btn">Show</a></td>
                            <td><a href="{{route('admin.users.edituser',$user->id)}}" class="btn btn-warning btn-block">Edit</a></td>
                            <td>
                                {!! Form::open(['method' => 'DELETE', 'route'=>['admin.users.destroyuser', $user->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block btn-destroy']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            {!! $users->render() !!} <!--pagination-->
            </div>
        </div>
    </div>
@endsection