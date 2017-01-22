@extends('master')

@section('styles')
    <link rel="stylesheet" href="{{URL::to('src/css/user.css')}}">
@endsection

@section('content')
    <div id="page-wrapper" class="dashboard">
        <div class="container-fluid" style="height:auto;">
            @include('user.prof')
            <div class="col-lg-10">
                <div id="page-wrapper" class="dashboard">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header">User Management</h1>
                                <ol class="breadcrumb">
                                    <li class="active">
                                        <span class="fa fa-user"></span> User / Show
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="col-lg-3">
                                        
                                    </div>
                                    <div class="col-lg-6">
                                        <h1>Update {{Auth::user()->username}}'s information</h1>
                        {!! Form::model($user,['method' => 'PATCH','route'=>['update.user',Auth::user()->id],'files'=>true]) !!}
                        <fieldset>
                            <div class="form-group">
                                {!! Form::label('Name', 'Name:') !!}
                                {!! Form::text('name',Auth::user()->name,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('Surname', 'Surname:') !!}
                                {!! Form::text('surname',Auth::user()->surname,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('Username', 'Username:') !!}
                                {!! Form::text('username',Auth::user()->username,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('E-mail', 'E-mail:') !!}
                                {!! Form::text('email',Auth::user()->email,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('Password', 'Password:') !!}
                                {!! Form::text('password',Auth::user()->password,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('File', 'Change Profile Picture:') !!}
                                {!! Form::file('avatar') !!}
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </fieldset>
                        {!! Form::close() !!}
                                    </div>
                                    <div class="col-lg-3">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection