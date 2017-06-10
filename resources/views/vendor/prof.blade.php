<div class="col-lg-2 left_menu_pos">
    <div class="row">
        <img src="{{Auth::user()->avatar}}" class="userPic">
        <h4 class="username">{{ Auth::user()->username }}</h4>
        <hr>
        <ul class="profile">
            <li><a href="{{ route('vendor.profile') }}">Preferences</a></li>
            <li><a href="{{ route('vendor.orders') }}">Orders</a></li>
            <li><a href="{{ route('vendor.allproducts') }}">See my products</a></li>
            <li><a href="{{ route('vendor.addproducts') }}">Create new products</a></li>
            <li><a href="{{ route('user.logout') }}">Logout</a></li>
        </ul>
    </div>
</div>