@extends('master')

<link rel="stylesheet" href="{{ URL::to('src/css/index.css') }}">

@section('title')
    Locoroco
@endsection

@section('content')
   <img src="pictures/header.jpg" alt="" style="width:100%;height:auto;">
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
         <div class="container">
             <div class="row">
                 <h1 style="text-align:center;"> How it Works</h1>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta vitae obcaecati aspernatur error assumenda, harum perspiciatis culpa repellat sed! Ipsum placeat veritatis eius error excepturi ipsa, consequatur, magnam mollitia a.
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta vitae obcaecati aspernatur error assumenda, harum perspiciatis culpa repellat sed! Ipsum placeat veritatis eius error excepturi ipsa, consequatur, magnam mollitia a.
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta vitae obcaecati aspernatur error assumenda, harum perspiciatis culpa repellat sed! Ipsum placeat veritatis eius error excepturi ipsa, consequatur, magnam mollitia a.
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta vitae obcaecati aspernatur error assumenda, harum perspiciatis culpa repellat sed! Ipsum placeat veritatis eius error excepturi ipsa, consequatur, magnam mollitia a.
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta vitae obcaecati aspernatur error assumenda, harum perspiciatis culpa repellat sed! Ipsum placeat veritatis eius error excepturi ipsa, consequatur, magnam mollitia a.
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta vitae obcaecati aspernatur error assumenda, harum perspiciatis culpa repellat sed! Ipsum placeat veritatis eius error excepturi ipsa, consequatur, magnam mollitia a.
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta vitae obcaecati aspernatur error assumenda, harum perspiciatis culpa repellat sed! Ipsum placeat veritatis eius error excepturi ipsa, consequatur, magnam mollitia a.
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta vitae obcaecati aspernatur error assumenda, harum perspiciatis culpa repellat sed! Ipsum placeat veritatis eius error excepturi ipsa, consequatur, magnam mollitia a.</p>
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
       <div class="container">
           <div class="row">
               <h1 style="text-align:center;"> Popular Vendors</h1>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta vitae obcaecati aspernatur error assumenda, harum perspiciatis culpa repellat sed! Ipsum placeat veritatis eius error excepturi ipsa, consequatur, magnam mollitia a.
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta vitae obcaecati aspernatur error assumenda, harum perspiciatis culpa repellat sed! Ipsum placeat veritatis eius error excepturi ipsa, consequatur, magnam mollitia a.
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta vitae obcaecati aspernatur error assumenda, harum perspiciatis culpa repellat sed! Ipsum placeat veritatis eius error excepturi ipsa, consequatur, magnam mollitia a.
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta vitae obcaecati aspernatur error assumenda, harum perspiciatis culpa repellat sed! Ipsum placeat veritatis eius error excepturi ipsa, consequatur, magnam mollitia a.
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta vitae obcaecati aspernatur error assumenda, harum perspiciatis culpa repellat sed! Ipsum placeat veritatis eius error excepturi ipsa, consequatur, magnam mollitia a.
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta vitae obcaecati aspernatur error assumenda, harum perspiciatis culpa repellat sed! Ipsum placeat veritatis eius error excepturi ipsa, consequatur, magnam mollitia a.
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta vitae obcaecati aspernatur error assumenda, harum perspiciatis culpa repellat sed! Ipsum placeat veritatis eius error excepturi ipsa, consequatur, magnam mollitia a.
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta vitae obcaecati aspernatur error assumenda, harum perspiciatis culpa repellat sed! Ipsum placeat veritatis eius error excepturi ipsa, consequatur, magnam mollitia a.</p>
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