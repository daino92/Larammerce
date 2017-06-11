<link rel="stylesheet" href="{{URL::to('src/css/app.css')}}">
<footer class="footer-distributed">
    <div class="footer-left">
        <h3>Locoroco<img class="img-circle" id="img_logo" src="{{ URL::to('pictures/locoroco.png') }}"> </h3>
        <p class="footer-links">
            <a href="{{ route('product.index') }}">Home</a> ·
            <a href="#">Blog</a> ·
            <a href="#">Pricing</a> ·
            <a href="#">About us</a> ·
            <a href="#">Shipping</a> ·
            <a href="#">Contact</a>
        </p>
        <p class="footer-company-name">Locoroco &copy; 2016</p>
    </div>
    <div class="footer-center">
        <div>
            <i class="fa fa-map-marker"></i>
            <p><span>Thivon 250</span> Athens, Greece</p>
        </div>
        <div>
            <i class="fa fa-phone"></i>
            <p>+30 210 538 1100</p>
        </div>
        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:support@.com">info@locoroco.com</a></p>
        </div>
    </div>
    <div class="footer-right">
        <p class="footer-company-about">
            <span>About Locoroco</span> A multi-purpose e-commerce application.
        </p>
        <div class="footer-icons">
            <a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="http://www.linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a>
            <a href="http://www.github.com" target="_blank"><i class="fa fa-github"></i></a>
            <p class="footer-company-about"> Join us by sending a message: info@locoroco.com</p>
        </div>
    </div>
</footer>