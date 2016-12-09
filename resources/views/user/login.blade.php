<script type="text/javascript" src="src/js/login.js"></script>
<link rel="stylesheet" type="text/css" href="src/css/login.css">

<a href="#" role="button" data-toggle="modal" data-target="#login-modal" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-2x" aria-hidden="true"></i>Account</a>

<!-- BEGIN # MODAL LOGIN -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" align="center">
                <img class="img-circle" id="img_logo" src="https://static-resource.np.community.playstation.net/avatar/WWS_J/J0001.png">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
            </div>

            <!-- Begin # DIV Form -->
            <div id="div-forms">

                <!-- Begin # Login Form -->
                <form action="{{ route('user.signin') }}" method="post" id="login-form">
                    <div class="modal-body">
                        @if(count($errors) >0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <p> {{$error}}</p>
                                @endforeach
                            </div>
                        @endif
                            <div class="form-group">
                                <label>Login</label>
                                <input type="text" id="login_username" name="login" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" id="login_password" name="password" class="form-control" data-toggle="password">
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox">Remember me</label>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                            {{ csrf_field() }}
                        </div>
                        <div>
                            <button id="login_register_btn" type="button" class="btn btn-link">Register</button>
                            <button id="login_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                        </div>
                    </div>
                </form>
                    <!-- End # Login Form -->

                <!-- Begin | Register Form -->
                <form action="{{ route('user.signup') }}" method="post" id="register-form" style="display:none;">
                    <div class="modal-body">
                        @if(count($errors) >0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <p> {{$error}}</p>
                                @endforeach
                            </div>
                        @endif
                            <div class="form-group">
                                <label for="email">Username</label>
                                <input type="text" id="register_username" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="text" id="register_email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for=password">Password</label>
                                <input type="password" id="register_password" name="password" class="form-control" data-toggle="password">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
                            {{ csrf_field() }}
                        </div>
                        <div>
                            <button id="register_login_btn" type="button" class="btn btn-link">Log In</button>
                            <button id="register_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                        </div>
                    </div>
                </form>
                <!-- End | Register Form -->

                <!-- Begin | Lost Password Form -->
                <form id="lost-form" style="display:none;">
                    <div class="modal-body">
                        <div id="div-lost-msg">
                            <div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
                            <span id="text-lost-msg">Type your e-mail.</span>
                        </div>
                        <input id="lost_email" class="form-control" type="text" placeholder="E-Mail (type ERROR for error effect)" required>
                    </div>
                    <div class="modal-footer">
                        <div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
                        </div>
                        <div>
                            <button id="lost_login_btn" type="button" class="btn btn-link">Log In</button>
                            <button id="lost_register_btn" type="button" class="btn btn-link">Register</button>
                        </div>
                    </div>
                </form>
                <!-- End | Lost Password Form -->

            </div>
            <!-- End # DIV Form -->

        </div>
    </div>
</div>
<!-- END # MODAL LOGIN -->