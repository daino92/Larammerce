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
                            <span class="fa fa-user"></span> <a href="{{ route('admin.users.allusers') }}">Users</a> / Edition
                        </li>
                    </ol>
                </div>
            </div>
            <div class="col-sm-12">
                <form method="POST" action="#/user/5" accept-charset="UTF-8" class="form-horizontal panel">
                    <div class="form-group  ">
                        <label for="username" class="control-label">Name</label>
                        <input class="form-control" name="username" type="text" value=".." id="username">
                    </div>
                    <div class="form-group">
                        <label for="email" class="control-label">Email</label>
                        <input class="form-control" name="email" type="email" value=".." id="email">
                    </div>
                    <div class="form-group" style="width:200px;">
                        <label for="role" class="control-label">Role</label>
                        <select class="form-control" id="role" name="role">
                            <option value="1">Administrator</option>
                            <option value="2">Vendor</option>
                            <option value="3" selected="selected">User</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <label><input name="confirmed" type="checkbox" value="0">Confirmed</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-default" type="submit" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(function() {
        $('#logout').click(function(e) {
            e.preventDefault();
            $('#logout-form').submit();
        });
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.btn-destroy').on('click',function(e){
            e.preventDefault();
            var form = $(this).parents('form');
            swal({
                title: $(this).attr('data-title'),
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes",
                cancelButtonText: "No"
            }, function(isConfirm){
                if (isConfirm) form.submit();
            });
        });
    });
</script>
@endsection