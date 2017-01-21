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
                                <span class="fa fa-user"></span> <a href="{{ route('admin.users.allusers') }}">Users</a> / Vendors
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr class="bg-info">
                            <th>No.</th>
                            <th>Creation date</th>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Username</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->created_at->format('d-m-Y') }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->surname }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                        <!--pagination {! ! $users->render() !!}-->
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection