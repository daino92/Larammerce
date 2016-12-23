@extends('layouts.admin.adminMaster')

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
                <form method="POST" action="#/roles" accept-charset="UTF-8" class="form-horizontal panel">
                    <div class="form-group">
                        <label for="admin" class="control-label">Title for administrators</label>
                        <input class="form-control" name="admin" type="text" value="Administrator" id="admin">
                    </div>
                    <div class="form-group">
                        <label for="redac" class="control-label">Title for Vendors</label>
                        <input class="form-control" name="vendor" type="text" value="Vendor" id="vendor">
                    </div>
                    <div class="form-group">
                        <label for="user" class="control-label">Title for Users</label>
                        <input class="form-control" name="user" type="text" value="User" id="user">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-default" type="submit" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection