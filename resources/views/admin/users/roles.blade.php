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
                            <span class="fa fa-user"></span> <a href="{{ route('admin.users.allusers') }}">Users</a> / Roles
                        </li>
                    </ol>
                </div>
            </div>
            <div class="col-sm-12">
                @foreach($roles as $role)
                    <form class="form-horizontal panel">
                        <div class="form-group">
                            <label for="admin" class="control-label">Title for {{ $role->name }}</label>
                            <input class="form-control" name="{{ $role->name }}" type="text" value="{{ $role->name }}" id="{{ $role->name }}" readonly/>
                        </div>
                    </form>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection