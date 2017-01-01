@extends('master')



<link rel="stylesheet" href="{{ URL::to('src/css/index.css') }}">

@section('title')
    Locoroco
@endsection

@section('content')
    @include('includes.search')

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
    
    <div class="nav">
         <div class="box technology">
        <a href="#home">TECHNOLOGY
        <span class="col-lg-2">
            <img class="menu_img" src="/pictures/tech.png" alt="" />
        </span>
        <span class="col-lg-10">
            <table class="menu_table">
                <tr>
                    <td>  <a href="#">Phones     </a></td>
                    <td>  <a href="#">Laptops     </a></td>
                    <td>  <a href="#">Chargers     </a></td>
                    <td>  <a href="#">Screens     </a></td>
                    <td>  <a href="#">Keyboards     </a></td>
                </tr>
                <tr>
                    <td><a href="#"> Mouse     </a></td>
                    <td><a href="#"> Cables     </a></td>
                    <td><a href="#"> Ram     </a></td>
                    <td><a href="#"> Motherboards     </a></td>
                    <td><a href="#"> GPS     </a></td>
                </tr>
                <tr>
                    <td>  <a href="#">Phones     </a></td>
                    <td>  <a href="#">Laptops     </a></td>
                    <td>  <a href="#">Chargers     </a></td>
                    <td>  <a href="#">Screens     </a></td>
                    <td>  <a href="#">Keyboards     </a></td>
                </tr>
                
                    <td><a href="#"> Mouse     </a></td>
                    <td><a href="#"> Cables     </a></td>
                    <td><a href="#"> Ram     </a></td>
                    <td><a href="#"> Motherboards     </a></td>
                    <td><a href="#"> GPS     </a></td>
                </tr>
                
                                
                                                                
            </table>
        </span>
        <span><img src="{{ URL::to('pictures/tech.png') }}" alt="" /></span></a>
         </div>
         <div class="box home_garden">
        <a href="#about">HOME-GARDEN
               <span class="col-lg-2">
            <img class="menu_img" src="/pictures/gardening.png" alt="" />
        </span>
        <span class="col-lg-10">
            <table class="menu_table">
                <tr>
                    <td>  <a href="#">Phones     </a></td>
                    <td>  <a href="#">Laptops     </a></td>
                    <td>  <a href="#">Chargers     </a></td>
                    <td>  <a href="#">Screens     </a></td>
                    <td>  <a href="#">Keyboards     </a></td>
                </tr>
                <tr>
                    <td><a href="#"> Mouse     </a></td>
                    <td><a href="#"> Cables     </a></td>
                    <td><a href="#"> Ram     </a></td>
                    <td><a href="#"> Motherboards     </a></td>
                    <td><a href="#"> GPS     </a></td>
                </tr>
                <tr>
                    <td>  <a href="#">Phones     </a></td>
                    <td>  <a href="#">Laptops     </a></td>
                    <td>  <a href="#">Chargers     </a></td>
                    <td>  <a href="#">Screens     </a></td>
                    <td>  <a href="#">Keyboards     </a></td>
                </tr>
                
                    <td><a href="#"> Mouse     </a></td>
                    <td><a href="#"> Cables     </a></td>
                    <td><a href="#"> Ram     </a></td>
                    <td><a href="#"> Motherboards     </a></td>
                    <td><a href="#"> GPS     </a></td>
                </tr>
                
                                
                                                                
            </table>
        </span>
        <span><img src="{{ URL::to('pictures/gardening.png') }}" alt="" /></span></a>
          </div>
          
          
          
          
          
          <div class="box fashion">
        <a href="#portfolio">FASHION
       <span class="col-lg-2">
            <img class="menu_img" src="/pictures/shoes.png" alt="" />
        </span>
        <span class="col-lg-10">
            <table class="menu_table">
                <tr>
                    <td>  <a href="#">Phones     </a></td>
                    <td>  <a href="#">Laptops     </a></td>
                    <td>  <a href="#">Chargers     </a></td>
                    <td>  <a href="#">Screens     </a></td>
                    <td>  <a href="#">Keyboards     </a></td>
                </tr>
                <tr>
                    <td><a href="#"> Mouse     </a></td>
                    <td><a href="#"> Cables     </a></td>
                    <td><a href="#"> Ram     </a></td>
                    <td><a href="#"> Motherboards     </a></td>
                    <td><a href="#"> GPS     </a></td>
                </tr>
                <tr>
                    <td>  <a href="#">Phones     </a></td>
                    <td>  <a href="#">Laptops     </a></td>
                    <td>  <a href="#">Chargers     </a></td>
                    <td>  <a href="#">Screens     </a></td>
                    <td>  <a href="#">Keyboards     </a></td>
                </tr>
                
                    <td><a href="#"> Mouse     </a></td>
                    <td><a href="#"> Cables     </a></td>
                    <td><a href="#"> Ram     </a></td>
                    <td><a href="#"> Motherboards     </a></td>
                    <td><a href="#"> GPS     </a></td>
                </tr>
                
                                
                                                                
            </table>
        </span>
        <span><img src="{{ URL::to('pictures/shoes.png') }}" alt="" /></span></a>
          </div>
         <div class="box sports">
        <a href="#services">SPORTS
        <span class="col-lg-2">
            <img class="menu_img" src="/pictures/sports.png" alt="" />
        </span>
        <span class="col-lg-10">
            <table class="menu_table">
                <tr>
                    <td>  <a href="#">Phones     </a></td>
                    <td>  <a href="#">Laptops     </a></td>
                    <td>  <a href="#">Chargers     </a></td>
                    <td>  <a href="#">Screens     </a></td>
                    <td>  <a href="#">Keyboards     </a></td>
                </tr>
                <tr>
                    <td><a href="#"> Mouse     </a></td>
                    <td><a href="#"> Cables     </a></td>
                    <td><a href="#"> Ram     </a></td>
                    <td><a href="#"> Motherboards     </a></td>
                    <td><a href="#"> GPS     </a></td>
                </tr>
                <tr>
                    <td>  <a href="#">Phones     </a></td>
                    <td>  <a href="#">Laptops     </a></td>
                    <td>  <a href="#">Chargers     </a></td>
                    <td>  <a href="#">Screens     </a></td>
                    <td>  <a href="#">Keyboards     </a></td>
                </tr>
                
                    <td><a href="#"> Mouse     </a></td>
                    <td><a href="#"> Cables     </a></td>
                    <td><a href="#"> Ram     </a></td>
                    <td><a href="#"> Motherboards     </a></td>
                    <td><a href="#"> GPS     </a></td>
                </tr>
                
                                
                                                                
            </table>
        </span>
        <span><img src="{{ URL::to('pictures/sports.png') }}" alt="" /></span></a>
         </div>
         <div class="box cars">
        <a href="#contact">CARS
        <span class="col-lg-2">
            <img class="menu_img" src="/pictures/cars.png" alt="" />
        </span>
        <span class="col-lg-10">
            <table class="menu_table">
                <tr>
                    <td>  <a href="#">Phones     </a></td>
                    <td>  <a href="#">Laptops     </a></td>
                    <td>  <a href="#">Chargers     </a></td>
                    <td>  <a href="#">Screens     </a></td>
                    <td>  <a href="#">Keyboards     </a></td>
                </tr>
                <tr>
                    <td><a href="#"> Mouse     </a></td>
                    <td><a href="#"> Cables     </a></td>
                    <td><a href="#"> Ram     </a></td>
                    <td><a href="#"> Motherboards     </a></td>
                    <td><a href="#"> GPS     </a></td>
                </tr>
                <tr>
                    <td>  <a href="#">Phones     </a></td>
                    <td>  <a href="#">Laptops     </a></td>
                    <td>  <a href="#">Chargers     </a></td>
                    <td>  <a href="#">Screens     </a></td>
                    <td>  <a href="#">Keyboards     </a></td>
                </tr>
                
                    <td><a href="#"> Mouse     </a></td>
                    <td><a href="#"> Cables     </a></td>
                    <td><a href="#"> Ram     </a></td>
                    <td><a href="#"> Motherboards     </a></td>
                    <td><a href="#"> GPS     </a></td>
                </tr>
                
                                
                                                                
            </table>
        </span>
        <span><img src="{{ URL::to('pictures/cars.png') }}" alt="" /></span></a>
         </div>
    </div>
    <br>
    
        <div class="nav">
         <div class="box kids">
        <a href="#home">KIDS
        <span class="col-lg-2">
            <img class="menu_img" src="/pictures/kids.png" alt="" />
        </span>
        <span class="col-lg-10">
            <table class="menu_table">
                <tr>
                    <td>  <a href="#">Phones     </a></td>
                    <td>  <a href="#">Laptops     </a></td>
                    <td>  <a href="#">Chargers     </a></td>
                    <td>  <a href="#">Screens     </a></td>
                    <td>  <a href="#">Keyboards     </a></td>
                </tr>
                <tr>
                    <td><a href="#"> Mouse     </a></td>
                    <td><a href="#"> Cables     </a></td>
                    <td><a href="#"> Ram     </a></td>
                    <td><a href="#"> Motherboards     </a></td>
                    <td><a href="#"> GPS     </a></td>
                </tr>
                <tr>
                    <td>  <a href="#">Phones     </a></td>
                    <td>  <a href="#">Laptops     </a></td>
                    <td>  <a href="#">Chargers     </a></td>
                    <td>  <a href="#">Screens     </a></td>
                    <td>  <a href="#">Keyboards     </a></td>
                </tr>
                
                    <td><a href="#"> Mouse     </a></td>
                    <td><a href="#"> Cables     </a></td>
                    <td><a href="#"> Ram     </a></td>
                    <td><a href="#"> Motherboards     </a></td>
                    <td><a href="#"> GPS     </a></td>
                </tr>
                
                                
                                                                
            </table>
        </span>
        <span><img src="{{ URL::to('pictures/kids.png') }}" alt="" /></span></a>
         </div>
         <div class="box health">
        <a href="#about">HEALTH
       <span class="col-lg-2">
            <img class="menu_img" src="/pictures/health.png" alt="" />
        </span>
        <span class="col-lg-10">
            <table class="menu_table">
                <tr>
                    <td>  <a href="#">Phones     </a></td>
                    <td>  <a href="#">Laptops     </a></td>
                    <td>  <a href="#">Chargers     </a></td>
                    <td>  <a href="#">Screens     </a></td>
                    <td>  <a href="#">Keyboards     </a></td>
                </tr>
                <tr>
                    <td><a href="#"> Mouse     </a></td>
                    <td><a href="#"> Cables     </a></td>
                    <td><a href="#"> Ram     </a></td>
                    <td><a href="#"> Motherboards     </a></td>
                    <td><a href="#"> GPS     </a></td>
                </tr>
                <tr>
                    <td>  <a href="#">Phones     </a></td>
                    <td>  <a href="#">Laptops     </a></td>
                    <td>  <a href="#">Chargers     </a></td>
                    <td>  <a href="#">Screens     </a></td>
                    <td>  <a href="#">Keyboards     </a></td>
                </tr>
                
                    <td><a href="#"> Mouse     </a></td>
                    <td><a href="#"> Cables     </a></td>
                    <td><a href="#"> Ram     </a></td>
                    <td><a href="#"> Motherboards     </a></td>
                    <td><a href="#"> GPS     </a></td>
                </tr>
                
                                
                                                                
            </table>
        </span>
        <span><img src="{{ URL::to('pictures/health.png') }}" alt="" /></span></a>
          </div>
          <div class="box books">
        <a href="#portfolio">BOOKS
        <span class="col-lg-2">
            <img class="menu_img" src="/pictures/books.png" alt="" />
        </span>
        <span class="col-lg-10">
            <table class="menu_table">
                <tr>
                    <td>  <a href="#">Phones     </a></td>
                    <td>  <a href="#">Laptops     </a></td>
                    <td>  <a href="#">Chargers     </a></td>
                    <td>  <a href="#">Screens     </a></td>
                    <td>  <a href="#">Keyboards     </a></td>
                </tr>
                <tr>
                    <td><a href="#"> Mouse     </a></td>
                    <td><a href="#"> Cables     </a></td>
                    <td><a href="#"> Ram     </a></td>
                    <td><a href="#"> Motherboards     </a></td>
                    <td><a href="#"> GPS     </a></td>
                </tr>
                <tr>
                    <td>  <a href="#">Phones     </a></td>
                    <td>  <a href="#">Laptops     </a></td>
                    <td>  <a href="#">Chargers     </a></td>
                    <td>  <a href="#">Screens     </a></td>
                    <td>  <a href="#">Keyboards     </a></td>
                </tr>
                
                    <td><a href="#"> Mouse     </a></td>
                    <td><a href="#"> Cables     </a></td>
                    <td><a href="#"> Ram     </a></td>
                    <td><a href="#"> Motherboards     </a></td>
                    <td><a href="#"> GPS     </a></td>
                </tr>
                
                                
                                                                
            </table>
        </span>
        <span><img src="{{ URL::to('pictures/books.png') }}" alt="" /></span></a>
          </div>
         <div class="box bikes">
        <a href="#services">BIKES
        <span class="col-lg-2">
            <img class="menu_img" src="/pictures/bikes.png" alt="" />
        </span>
        <span class="col-lg-10">
            <table class="menu_table">
                <tr>
                    <td>  <a href="#">Phones     </a></td>
                    <td>  <a href="#">Laptops     </a></td>
                    <td>  <a href="#">Chargers     </a></td>
                    <td>  <a href="#">Screens     </a></td>
                    <td>  <a href="#">Keyboards     </a></td>
                </tr>
                <tr>
                    <td><a href="#"> Mouse     </a></td>
                    <td><a href="#"> Cables     </a></td>
                    <td><a href="#"> Ram     </a></td>
                    <td><a href="#"> Motherboards     </a></td>
                    <td><a href="#"> GPS     </a></td>
                </tr>
                <tr>
                    <td>  <a href="#">Phones     </a></td>
                    <td>  <a href="#">Laptops     </a></td>
                    <td>  <a href="#">Chargers     </a></td>
                    <td>  <a href="#">Screens     </a></td>
                    <td>  <a href="#">Keyboards     </a></td>
                </tr>
                
                    <td><a href="#"> Mouse     </a></td>
                    <td><a href="#"> Cables     </a></td>
                    <td><a href="#"> Ram     </a></td>
                    <td><a href="#"> Motherboards     </a></td>
                    <td><a href="#"> GPS     </a></td>
                </tr>
                
                                
                                                                
            </table>
        </span>
        <span><img src="{{ URL::to('pictures/bikes.png') }}" alt="" /></span></a>
         </div>
         <div class="box usedparts">
        <a href="#contact">SECOND HAND
        <span class="col-lg-2">
            <img class="menu_img" src="/pictures/second_hand.png" alt="" />
        </span>
        <span class="col-lg-10">
            <table class="menu_table">
                <tr>
                    <td>  <a href="#">Phones     </a></td>
                    <td>  <a href="#">Laptops     </a></td>
                    <td>  <a href="#">Chargers     </a></td>
                    <td>  <a href="#">Screens     </a></td>
                    <td>  <a href="#">Keyboards     </a></td>
                </tr>
                <tr>
                    <td><a href="#"> Mouse     </a></td>
                    <td><a href="#"> Cables     </a></td>
                    <td><a href="#"> Ram     </a></td>
                    <td><a href="#"> Motherboards     </a></td>
                    <td><a href="#"> GPS     </a></td>
                </tr>
                <tr>
                    <td>  <a href="#">Phones     </a></td>
                    <td>  <a href="#">Laptops     </a></td>
                    <td>  <a href="#">Chargers     </a></td>
                    <td>  <a href="#">Screens     </a></td>
                    <td>  <a href="#">Keyboards     </a></td>
                </tr>
                
                    <td><a href="#"> Mouse     </a></td>
                    <td><a href="#"> Cables     </a></td>
                    <td><a href="#"> Ram     </a></td>
                    <td><a href="#"> Motherboards     </a></td>
                    <td><a href="#"> GPS     </a></td>
                </tr>
                
                                
                                                                
            </table>
        </span>
        <span><img src="{{ URL::to('pictures/second_hand.png') }}" alt="" /></span></a>
         </div>
    </div>
    
    
    </div>
    <div class="container-fluid">
            <div class="block -berry edge--bottom">
      <h1>1</h1>
    </div>

    <div class="block -blue edge--bottom--reverse">
      <h1>2</h1>
      <p>2</p>
    </div>

    <div class="block -berry edge--top">
      <h1>3</h1>
    </div>

    <div class="block -blue edge--top--reverse">
      <h1>4</h1>
      <p>4</p>
    </div>

    <div class="block -orange edge--both">
      <h1>5</h1>
    </div>

    <div class="block -green edge--both--reverse">
      <h1>6</h1>
      <p>6</p>
    </div>

    </div>
@endsection