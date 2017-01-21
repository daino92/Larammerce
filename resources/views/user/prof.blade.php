<div class="col-lg-2 left_menu_pos">
    <div class="row">
        <img src="{{Auth::user()->avatar}}" class="userPic">
        <h4 style="text-align:center;">{{ Auth::user()->username }}</h4>
        <hr>
        <ul class="profile">
            <li><a href="{{ route('user.profile') }}">Preferences</a></li>
            <li><a href="{{ route('order.history') }}">Order History</a></li>
            <li><a href="{{ route('ongoing.orders') }}">Products in Cart</a></li>
            <li><a href="{{ route('user.logout') }}">Logout</a></li>
        </ul>
    </div>
</div>