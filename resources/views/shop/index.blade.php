@extends('master')

<link rel="stylesheet" href="{{ URL::to('src/css/index.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('src/css/style.css') }}" />
<style type="text/css">
    .shape .overlay.round {  background: url(pictures/round.png);  }
</style>
@section('title')
    Locoroco
@endsection

@section('content')
    <div class="search_area" style="height:500px; width:auto; background:url('pictures/header.jpg') no-repeat">
        <div class="search_button">
            @include('includes.search')
        </div>
    </div>

    @if(Session::has('success'))
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                <div id="charge-message" class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            </div>
        </div>
    @endif
    <div class="container-fluid index">
        <!-- Front Page:: Place to store menu styles, sub menus and other goodies! -->
        <div class="container">
            <div class="row">
                <link rel="stylesheet" type="text/css" href="{{ URL::to('src/css/component.css') }}" />
                <script src="{{ URL::to('src/js/modernizr.custom.js') }}"></script>
                <div class="container demo-3">
                    <ul class="grid cs-style-4">
                        @foreach($SubCategories as $SubCategory)
                        <li>
                            <figure>
                                <div><img src="pictures/categories/{{$SubCategory->image}}" alt="img05"></div>
                                <figcaption>
                                    <h3>{{str_replace('_', ' & ', $SubCategory->category)}}</h3>
                                    <br>
                                    <!--We decode the json and slice the array in order to show 4 Subcategories only-->
                                    @foreach(array_slice(json_decode($SubCategory->subcategory,true),0,4) as $sub)
                                        <div class="cat_men">
                                            <a href="#">{{$sub['name']}}</a>
                                        </div>
                                    @endforeach
                                    <div class="take_a_look"><a href="{{route('shop.categories','cat='.$SubCategory->category)}}">Take a look</a></div>
                                </figcaption>
                            </figure>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <script src="{{ URL::to('src/js/toucheffects.js') }}"></script>
            </div>
        </div>
    </div>
    <style>
        #divSocial  img {
            position: relative;  
            border: none;
        }
    </style>
    <div class="container-fluid what_we">
        <div class="row">
            <div class="section_d">
                <div class="skew">
                    <div class="sec_inner">
                        <h1>What we Offer</h1>
                        <div class="col-md-3">
                            <div class="circle">
                                <div id="divSocial"><img src="{{ URL::to('pictures/Offer/Quality.png') }}"/></div>
                                <h4>Top Quality</h4>
                                <p class="Offer">We give priority to quality and trust our vendors. The packages are always double checked and packed nicely!</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="circle">
                                <div id="divSocial"><img src="{{ URL::to('pictures/Offer/Sales.png') }}"/></div>
                                <h4>Fast Sales</h4>
                                <p class="Offer">This platform provides an easy to use and fast system regarding to sales! </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="circle">
                                <div id="divSocial"><img src="{{ URL::to('pictures/Offer/Management.png') }}"/></div>
                                <h4>Management System</h4>
                                <p class="Offer">A simple but functional management system is provided to both vendors and buyers.</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="circle">
                                <div id="divSocial"><img src="{{ URL::to('pictures/Offer/Support.png') }}"/></div>
                                <h4>24/7 Support</h4>
                                <p class="Offer">We provide 24/7 e-mail or 10h/week phone support to our loyal customers for any problem that might occur.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid index2">
        <div class="row">
            <h1 style="text-align:center;"> Popular Vendors</h1>
            <div class="col-md-12 popular_ven">
                <div class="col-md-4">
                    <ul>
                        <li>
                            <div class="shape">
                                <a href="#" class="overlay round"></a>
                                <div class="details">
                                    <span class="heading">Lora Bob</span><hr>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                    <a href="#" class="button">VIEW</a>
                                </div>
                                <div class="bg"></div>
                                <div class="base"><img src="pictures/top_vendor/1.jpg" alt=""/></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul>
                        <li>
                            <div class="shape">
                                <a href="#" class="overlay round"></a>
                                <div class="details">
                                    <span class="heading">Bard Lagard</span><hr>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                    <a href="#" class="button">VIEW</a>
                                </div>
                                <div class="bg"></div>
                                <div class="base"><img src="pictures/top_vendor/2.jpg" alt=""/></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul>
                        <li>
                            <div class="shape">
                                <a href="#"  class="overlay round"></a>
                                <div class="details">
                                    <span class="heading">Julia Kaula</span><hr>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                    <a href="#" class="button">VIEW</a>
                                </div>
                                <div class="bg"></div>
                                <div class="base"><img src="pictures/top_vendor/3.jpg" alt="" /></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid popular_pr">
        <div class="row">
            <div class="section_d1">
                <div class="skew1">
                    <h1 style="text-align:center;">Popular Products On Sale</h1>
                    <div class="slide_container">
                        <div id="mi-slider" class="mi-slider">
                            <ul>
                                <li><a href="#"><img src="{{ URL::to('/pictures/top_products/1.png') }}" alt="img01"><h4>Boots</h4></a></li>
                                <li><a href="#"><img src="{{ URL::to('/pictures/top_products/1.png') }}" alt="img01"><h4>Boots</h4></a></li>
                                <li><a href="#"><img src="{{ URL::to('/pictures/top_products/1.png') }}" alt="img01"><h4>Boots</h4></a></li>
                                <li><a href="#"><img src="{{ URL::to('/pictures/top_products/1.png') }}" alt="img01"><h4>Boots</h4></a></li>
                            </ul>
                            <ul>
                                <li><a href="#"><img src="{{ URL::to('/pictures/top_products/1.png') }}" alt="img01"><h4>Boots</h4></a></li>
                                <li><a href="#"><img src="{{ URL::to('/pictures/top_products/1.png') }}" alt="img01"><h4>Boots</h4></a></li>
                                <li><a href="#"><img src="{{ URL::to('/pictures/top_products/1.png') }}" alt="img01"><h4>Boots</h4></a></li>
                                <li><a href="#"><img src="{{ URL::to('/pictures/top_products/1.png') }}" alt="img01"><h4>Boots</h4></a></li>
                            </ul>
                            <ul>
                                <li><a href="#"><img src="{{ URL::to('/pictures/top_products/1.png') }}" alt="img01"><h4>Boots</h4></a></li>
                                <li><a href="#"><img src="{{ URL::to('/pictures/top_products/1.png') }}" alt="img01"><h4>Boots</h4></a></li>
                                <li><a href="#"><img src="{{ URL::to('/pictures/top_products/1.png') }}" alt="img01"><h4>Boots</h4></a></li>
                                <li><a href="#"><img src="{{ URL::to('/pictures/top_products/1.png') }}" alt="img01"><h4>Boots</h4></a></li>
                            </ul>
                            <ul>
                                <li><a href="#"><img src="{{ URL::to('/pictures/top_products/1.png') }}" alt="img01"><h4>Boots</h4></a></li>
                                <li><a href="#"><img src="{{ URL::to('/pictures/top_products/1.png') }}" alt="img01"><h4>Boots</h4></a></li>
                                <li><a href="#"><img src="{{ URL::to('/pictures/top_products/1.png') }}" alt="img01"><h4>Boots</h4></a></li>
                                <li><a href="#"><img src="{{ URL::to('/pictures/top_products/1.png') }}" alt="img01"><h4>Boots</h4></a></li>
                            </ul>
                            <nav>
                                <a href="#">Shoes</a>
                                <a href="#">Accessories</a>
                                <a href="#">Watches</a>
                                <a href="#">Bags</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection