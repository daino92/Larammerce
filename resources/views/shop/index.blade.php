@extends('master')

<link rel="stylesheet" href="{{ URL::to('src/css/index.css') }}">

@section('title')
    Locoroco
@endsection

@section('content')
  <div class="search_area" style="height:450px; width:auto; background:url('pictures/header.jpg') no-repeat">
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
        </div>8
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
						<div><img src="pictures/images/5.png" alt="img05"></div>
						<figcaption>
							<h3>Technology</h3>
							<br>
							<div class="cat_men">
								<a href="#">item 1</a><br>
								<a href="#">item 2</a>
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
							<h3>Technology</h3>
							<br>
							<div class="cat_men">
								<a href="#">item 1</a><br>
								<a href="#">item 2</a>
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
							<h3>Technology</h3>
							<br>
							<div class="cat_men">
								<a href="#">item 1</a><br>
								<a href="#">item 2</a>
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
							<h3>Technology</h3>
							<br>
							<div class="cat_men">
								<a href="#">item 1</a><br>
								<a href="#">item 2</a>
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
							<h3>Technology</h3>
							<br>
							<div class="cat_men">
								<a href="#">item 1</a><br>
								<a href="#">item 2</a>
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
							<h3>Technology</h3>
							<br>
							<div class="cat_men">
								<a href="#">item 1</a><br>
								<a href="#">item 2</a>
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

  <div class="container-fluid">
      <div class="row">
          <div class="section_d">
              <div class="skew">
                  <div class="sec_inner">
                      <h1>What we Offer</h1>
                      <div class="col-md-3">
                          <div class="circle">
                              dads
                          </div>
                      </div>
                      <div class="col-md-3">
                          asdasdsa
                      </div>
                      <div class="col-md-3">
                          asdasdsa
                      </div>
                      <div class="col-md-3">
                          asdasdsa
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
    <style type="text/css">
        .shape .overlay.round {
            background: url(pictures/round.png);		
        }
    </style>
	
		



        <div class="col-md-12" style="padding-top: 80px;">
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
    

   <div class="container-fluid">
       <div class="row">
           <div class="section_d1">
               <div class="skew1">
                   <div class="sec_inner1">
                       <h1>Popular Products On Sale</h1>
                       <br>
                       <br>
                       <br>
                       <br>
                       <div class="col-md-3">
                           <div class="circle">
                               dads
                           </div>
                       </div>
                       <div class="col-md-3">
                           asdasdsa
                       </div>
                       <div class="col-md-3">
                           asdasdsa
                       </div>
                       <div class="col-md-3">
                           asdasdsa
                       </div>
                   </div>
               </div>
           </div>
       </div>
  </div>
@endsection