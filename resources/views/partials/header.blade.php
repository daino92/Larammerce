<nav class="navbar navbar-default">
    <div class="container-fluid">
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
                    @if (Auth::check() && Auth::user()->role=='admin')
                        <a href="{{ route('admin.dashboard') }}" role="button" aria-haspopup="true" aria-expanded="false" ><i class="fa fa-user fa-2x" aria-hidden="true"></i> Administration</a>
                    @elseif(Auth::check() && Auth::user()->role=='user')
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ><i class="fa fa-user fa-2x" aria-hidden="true"></i> {{ Auth::user()->username }} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('user.profile') }}">User Profile</a></li>
                        <li><a href="{{ route('user.logout') }}">Log out</a></li>
                    </ul>
                    @else
                        @include('user.login')
                        <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ><i class="fa fa-user fa-2x" aria-hidden="true"></i> Account <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('user.signup') }}">Sign Up</a></li>
                            <li><a href="{{ route('user.signin') }}">Sign In</a></li>
                        </ul>-->
                    @endif
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>