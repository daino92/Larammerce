<link rel="stylesheet" href="{{ URL::to('src/css/header.css') }}">

<nav class="navbar navbar-default">
    <div class="container-fluid navb">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('product.index') }}">Home</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{ route('product.shoppingCart') }}">
                        <i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i> Shopping Cart
                        <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
                    </a>
                </li>
                <li class="dropdown">
                    @if (Auth::check() && Auth::user()->roles->contains(1))
                        <a href="{{ route('admin.dashboard') }}" role="button" aria-haspopup="true" aria-expanded="false" ><i class="fa fa-user fa-2x" aria-hidden="true"></i> Administration</a>
                    @elseif(Auth::check() && Auth::user()->roles->contains(2))
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ><img src="{{Auth::user()->avatar}}" class="profPic"> {{ Auth::user()->username }} <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('vendor.profile') }}"><i class="fa fa-user" aria-hidden="true"></i> My Profile</a></li><!--auth()->user()->username -->
                            <li><a href="{{ route('user.logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i> Log out</a></li>
                        </ul>
                    @elseif(Auth::check() && Auth::user()->roles->contains(3))
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ><img src="{{Auth::user()->avatar}}" class="profPic"> {{ Auth::user()->username }} <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('user.profile') }}"><i class="fa fa-user" aria-hidden="true"></i> My Profile</a></li><!--auth()->user()->username -->
                            <li><a href="{{ route('user.logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i> Log out</a></li>
                        </ul>
                    @else
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ><i class="fa fa-user fa-2x" aria-hidden="true"></i> Account <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('user.signup') }}"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</a></li>
                            <li><a href="{{ route('user.signin') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign In</a></li>
                        </ul>
                    @endif
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>