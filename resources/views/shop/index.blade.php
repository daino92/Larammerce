@extends('master')

<link rel="stylesheet" href="{{ URL::to('src/css/index.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('src/css/style.css') }}" />
    <style type="text/css">
        .shape .overlay.round {
            background: url(pictures/round.png);		
        }
    </style>
@section('title')
   
    Locoroco
@endsection

@section('content')

 
  <div class="search_area" style="height:500px; width:auto; center; 0; background:url('pictures/header.jpg') no-repeat">
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
	</head>
	<body>
		<div class="container demo-3">
			<ul class="grid cs-style-4">
			
				<li>
					<figure>
						<div><img src="pictures/images/1.png" alt="img05"></div>
						<figcaption>
							<h3>Electronics</h3>
							<br>
							<div class="cat_men">
								<a href="#">Smart Phones</a><br>
								<a href="#">Computers</a><br>
								<a href="#">Televisions</a><br>
								<a href="#">Gadgets</a>
							</div>
							<div class="take_a_look">
							<a href="http://dribbble.com/shots/1116775-Safari">Take a look</a>
							</div>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<div><img src="pictures/images/2.png" alt="img05"></div>
						<figcaption>
							<h3>Books</h3>
							<br>
							<div class="cat_men">
								<a href="#">Action</a><br>
								<a href="#">Drama</a><br>
								<a href="#">Romance</a><br>
								<a href="#">Biography</a>
							</div>
							<div class="take_a_look">
							<a href="http://dribbble.com/shots/1116775-Safari">Take a look</a>
							</div>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<div><img src="pictures/images/3.png" alt="img05"></div>
						<figcaption>
							<h3>Fashion</h3>
							<br>
							<div class="cat_men">
								<a href="#">Hoodies</a><br>
								<a href="#">T-shirts</a><br>
								<a href="#">Pants</a><br>
								<a href="#">Underwear</a>
							</div>
							<div class="take_a_look">
							<a href="http://dribbble.com/shots/1116775-Safari">Take a look</a>
							</div>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<div><img src="pictures/images/4.png" alt="img05"></div>
						<figcaption>
							<h3>Sports</h3>
							<br>
							<div class="cat_men">
								<a href="#">Snowboards</a><br>
								<a href="#">Bikes</a><br>
								<a href="#">Tennis</a><br>
								<a href="#">Skate</a>
							</div>
							<div class="take_a_look">
							<a href="http://dribbble.com/shots/1116775-Safari">Take a look</a>
							</div>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<div><img src="pictures/images/5.png" alt="img05"></div>
						<figcaption>
							<h3>Toys</h3>
							<br>
							<div class="cat_men">
								<a href="#">Babies</a><br>
								<a href="#">Kids</a><br>
								<a href="#">Adults</a><br>
							</div>
							<div class="take_a_look">
							<a href="http://dribbble.com/shots/1116775-Safari">Take a look</a>
							</div>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<div><img src="pictures/images/6.png" alt="img05"></div>
						<figcaption>
							<h3>Games</h3>
							<br>
							<div class="cat_men">
								<a href="#">Action</a><br>
								<a href="#">FPS</a><br>
								<a href="#">RPG</a><br>
								<a href="#">MMO</a>
							</div>
							<div class="take_a_look">
							<a href="http://dribbble.com/shots/1116775-Safari">Take a look</a>
							</div>
						</figcaption>
					</figure>
				</li>
			</ul>
		</div><!-- /container -->
		<script src="{{ URL::to('src/js/toucheffects.js') }}"></script>
             </div>
         </div>
    </div>
<style>
#divSocial  img
{
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
                                    <div id="divSocial">
                                      <img src="{{ URL::to('pictures/qual.png') }}" />
                                    </div>
                                    <h4>Top Quality</h4>
                                    <p>
                                       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam optio quas facere natus magnam unde nesciunt voluptas sequi aspernatur eum enim aperiam numquam repudiandae fugit, perspiciatis, tempore ex soluta eius. 
                                    </p>                             
                          </div>
                      </div>
                      <div class="col-md-3">
                
                                    <div id="divSocial">
                                      <img src="{{ URL::to('pictures/sales.png') }}" />
                                    </div>
                                    
                                    <h4>Fast Sales</h4>
                                    <p>
                                       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam optio quas facere natus magnam unde nesciunt voluptas sequi aspernatur eum enim aperiam numquam repudiandae fugit, perspiciatis, tempore ex soluta eius. 
                                    </p>
                      </div>
                      <div class="col-md-3">
                                    <div id="divSocial">
                                      <img src="{{ URL::to('pictures/new.png') }}" />
                                    </div>                    
                                    <h4>Management System</h4>
                                    <p>
                                       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam optio quas facere natus magnam unde nesciunt voluptas sequi aspernatur eum enim aperiam numquam repudiandae fugit, perspiciatis, tempore ex soluta eius. 
                                    </p>
                      </div>
                      <div class="col-md-3">
                                    <div id="divSocial">
                                      <img src="{{ URL::to('pictures/support.png') }}" />
                                    </div>  
                                    <h4>24/7 Support</h4>
                                    <p>
                                       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam optio quas facere natus magnam unde nesciunt voluptas sequi aspernatur eum enim aperiam numquam repudiandae fugit, perspiciatis, tempore ex soluta eius. 
                                    </p>                                    
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>  
  

   <div class="container-fluid index2">
       <!-- Front Page:: Place to store menu styles, sub menus and other goodies! -->
           <div class="row">
               <h1 style="text-align:center;"> Popular Vendors</h1>		
        <div class="col-md-12 popular_ven">
            <div class="col-md-4">
            <ul>  
               <li> 
                <div class="shape">
                        <a href="#"  class="overlay round"></a>
                        <div class="details">
                    <span class="heading">Lora Bob</span>
                    <hr />
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>		
                    <a href="#" class="button">VIEW</a>		
                </div>
                <div class="bg"></div>
                <div class="base">
                    <img src="pictures/img/1.jpg" alt="" />
                </div>
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
                    <span class="heading">Bard Lagard</span>
                    <hr />
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>		
                    <a href="#" class="button">VIEW</a>		
                </div>
                <div class="bg"></div>
                <div class="base">
                    <img src="pictures/img/2.jpg" alt="" />
                </div>
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
                    <span class="heading">Julia Kaula</span>
                    <hr />
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>		
                    <a href="#" class="button">VIEW</a>		
                </div>
                <div class="bg"></div>
                <div class="base">
                    <img src="pictures/img/3.jpg" alt="" />
                </div>
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
						<li><a href="#"><img src="{{ URL::to('picturesslider/1.png') }}" alt="img01"><h4>Boots</h4></a></li>
						<li><a href="#"><img src="{{ URL::to('picturesslider/1.png') }}" alt="img01"><h4>Boots</h4></a></li>
						<li><a href="#"><img src="{{ URL::to('picturesslider/1.png') }}" alt="img01"><h4>Boots</h4></a></li>
						<li><a href="#"><img src="{{ URL::to('picturesslider/1.png') }}" alt="img01"><h4>Boots</h4></a></li>


					</ul>
										<ul>
						<li><a href="#"><img src="{{ URL::to('picturesslider/1.png') }}" alt="img01"><h4>Boots</h4></a></li>
						<li><a href="#"><img src="{{ URL::to('picturesslider/1.png') }}" alt="img01"><h4>Boots</h4></a></li>
						<li><a href="#"><img src="{{ URL::to('picturesslider/1.png') }}" alt="img01"><h4>Boots</h4></a></li>
						<li><a href="#"><img src="{{ URL::to('picturesslider/1.png') }}" alt="img01"><h4>Boots</h4></a></li>


					</ul>
										<ul>
						<li><a href="#"><img src="{{ URL::to('picturesslider/1.png') }}" alt="img01"><h4>Boots</h4></a></li>
						<li><a href="#"><img src="{{ URL::to('picturesslider/1.png') }}" alt="img01"><h4>Boots</h4></a></li>
						<li><a href="#"><img src="{{ URL::to('picturesslider/1.png') }}" alt="img01"><h4>Boots</h4></a></li>
						<li><a href="#"><img src="{{ URL::to('picturesslider/1.png') }}" alt="img01"><h4>Boots</h4></a></li>


					</ul>
										<ul>
						<li><a href="#"><img src="{{ URL::to('picturesslider/1.png') }}" alt="img01"><h4>Boots</h4></a></li>
						<li><a href="#"><img src="{{ URL::to('picturesslider/1.png') }}" alt="img01"><h4>Boots</h4></a></li>
						<li><a href="#"><img src="{{ URL::to('picturesslider/1.png') }}" alt="img01"><h4>Boots</h4></a></li>
						<li><a href="#"><img src="{{ URL::to('picturesslider/1.png') }}" alt="img01"><h4>Boots</h4></a></li>


					</ul>
					
					<nav>
						<a href="#">Shoes</a>
						<a href="#">Accessories</a>
						<a href="#">Watches</a>
						<a href="#">Bags</a>
					</nav>
				</div>
				</div>
		</div><!-- /container -->

           </div>
               </div>
           </div>
       </div>
  </div>
  
   <script>


@endsection