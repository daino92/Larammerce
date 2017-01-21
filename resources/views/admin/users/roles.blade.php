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
                <fieldset style="margin-right: 900px;">
                    <div class="col-sm-12">
                        @foreach($roles as $role)
                            <form class="form-horizontal panel">
                                <div class="form-group">
                                    <label for="admin" class="control-label">Title for {{ $role->name }}</label>
                                    <input type="text" class="form-control" id="{{ $role->name }}"  placeholder="{{ $role->name }}" readonly/>
                                </div>
                            </form>
                        @endforeach
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
@endsection