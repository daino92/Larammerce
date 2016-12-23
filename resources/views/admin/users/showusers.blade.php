@extends('admin.adminMaster')

@section('contents')
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User Management</h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <span class="fa fa-user"></span> <a href="{{ route('admin.users.allusers') }}">Users</a> / Show
                            </li>
                        </ol>
                    </div>
                </div>
                <h1>Show {{$user->username}}</h1>
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="Username" class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Username" placeholder={{$user->username}} readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">E-mail</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" placeholder={{$user->email}} readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Role" class="col-sm-2 control-label">Role</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Role" placeholder=
                            @foreach ($user->roles as $role)
                                {{$role->name}}
                            @endforeach readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <a href="{{ route('admin.users.allusers')}}" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection