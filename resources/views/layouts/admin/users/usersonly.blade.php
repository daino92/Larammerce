@extends('layouts.admin.adminMaster')

@section('contents')
    <div id="page-wrapper" class="dashboard">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">User Management<a href="{{ route('admin.users.adduser') }}" class="btn btn-info pull-right">Add a user</a></h1>
                    <ol class="breadcrumb">
                        <li class="active"><span class="fa fa-user"></span> Users</li>
                    </ol>
                </div>
            </div>
            <div id="tri" class="btn-group btn-group-sm">
                <a href="{{ route('admin.users.allusers') }}" role="button" class="btn btn-default ">All
                    <span class="badge">3</span>
                </a>
                <a href="{{ route('admin.users.adminsonly') }}" role="button" class="btn btn-default ">Administrators
                    <span class="badge">1</span>
                </a>
                <a href="{{ route('admin.users.vendorsonly') }}" role="button" class="btn btn-default ">Vendors
                    <span class="badge">1</span>
                </a>
                <a href="{{ route('admin.users.usersonly') }}" role="button" class="btn btn-default ">Users
                    <span class="badge">1</span>
                </a>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Role</th>
                        <th></th>
                        <th>Actions</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-primary"><strong>daino</strong></td>
                        <td>User</td>
                        <td><a href="#" class="btn btn-success btn-block btn">See</a></td>
                        <td><a href="{{ route('admin.users.edituser') }}" class="btn btn-warning btn-block">Edit</a></td>
                        <td>
                            <form method="POST" action="#" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden">
                                <input class="btn btn-danger btn-block btn-destroy " data-title="Really destroy this user ?" type="submit" value="Destroy">
                            </form>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection