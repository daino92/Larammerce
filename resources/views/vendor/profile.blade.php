@extends('master')

@section('styles')
    <link rel="stylesheet" href="{{URL::to('src/css/user.css')}}">
@endsection

@section('content')
    <div id="page-wrapper" class="dashboard" >
        <div class="container-fluid" style="height:700px;">
            <div class="col-lg-2 left_menu_pos">
                        <div class="row">
                         <img class="userpic" src="/pictures/userpic.png" alt="" />
                             <h4 style="text-align:center;">Dionisis Manos</h4>
                             <hr>
                             <ul class="profile">
                                 <a href=""><li>View Profile</li></a>
                                 <a href=""><li>Profile</li></a>
                                 <a href=""><li>Account</li></a>
                                 <a href=""><li>History</li></a>
                                 <a href=""><li>Privacy</li></a>
                                 <a href=""><li>Preferences</li></a>
                                 <a href=""><li>Logout</li></a>
                             </ul>
                    </div>
                </div>
            <div class="col-lg-10">

            </div>
        </div>
    </div>
@endsection