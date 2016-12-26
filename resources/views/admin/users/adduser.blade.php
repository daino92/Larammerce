@extends('admin.adminMaster')

@section('contents')
<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Users Management</h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <span class="fa fa-user"></span> <a href="{{ route('admin.users.allusers') }}">Users</a> / Creation
                        </li>
                    </ol>
                </div>
            </div>
            <h1>Create new user</h1>
            {!! Form::open(['route' => 'admin.users.allusers']) !!}
            <!--<div class="form-group">
                {!! Form::label('Name', 'Name:') !!}
                {!! Form::text('name',null,['class'=>'form-control']) !!}
            </div>-->
            <div class="form-group">
                {!! Form::label('Username', 'Username:') !!}
                {!! Form::text('username',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Password', 'Password:') !!}
                {!! Form::text('password',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('E-mail', 'E-mail:') !!}
                {!! Form::text('email',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Role', 'Role:') !!}
                <select class="form-control" id="role" name="role">
                    <option value="Admin">Administrator</option>
                    <option value="Vendor">Vendor</option>
                    <option value="User" selected="selected">User</option>
                </select>
            </div>
            <div class="form-group">
                {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('admin.users.allusers')}}" class="btn btn-primary">Back</a>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection