<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
      
    @yield('styles')
    <link rel="stylesheet"href="{{URL::to('source/css/nav.css')}}">   
</head>

<body>
    
    
    
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Start Bootstrap
                    </a>
                </li>
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Shortcuts</a>
                </li>
                <li>
                    <a href="#">Overview</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                        <h1>Dashboard</h1>
                        <hr>
          </div>                
                     </div>
                     </div>
                     </div>
                <div id="page-content-wrapper dash-area" style="height:500px;background:#EDF1F5;">   
                      <div class="container-fluid">  
                      <div class="col-lg-12"> 
                        <div class="container-fluid statistic-region" style="height: 180px;">
                            <div class="col-lg-3 statistic-box">
                                <div class="statistic-box-inside">
                                     <div class="col-md-6">
                                         <i class="fa fa-users  fa-4x" style="    padding-top: 20px" aria-hidden="true"></i><br>
                                         Total Clients
                                     </div>
                                     <div class="col-md-6"> 25</div>
                                     <div class="col-md-12"> 
                                   
                                    </div>
                               </div>
                            </div>

                                                   <div class="col-lg-3 statistic-box">
                                <div class="statistic-box-inside">
                                     <div class="col-md-6"> 
                                       <i class="fa fa-cart-plus fa-4x" style="    padding-top: 20px" aria-hidden="true"></i><br>
                                        Products Sold
                                     
                                     </div>
                                     <div class="col-md-6"> 125 </div>
                                     <div class="col-md-12"> 1a</div>
                               </div>
                            </div>

                                                   <div class="col-lg-3 statistic-box">
                                <div class="statistic-box-inside">
                                     <div class="col-md-6">
                                        <i class="fa fa-credit-card  fa-4x" style="    padding-top: 20px" aria-hidden="true"></i><br> 
                                         Total Income
                                     
                                     </div>
                                     <div class="col-md-6"> 300</div>
                                     <div class="col-md-12"> 1a</div>
                               </div>
                            </div>

                                                   <div class="col-lg-3 statistic-box">
                                <div class="statistic-box-inside">
                                     <div class="col-md-6"> 
                                     <i class="fa fa-suitcase  fa-4x" style="    padding-top: 20px" aria-hidden="true"></i><br>
                                     
                                     Vendors
                                     
                                     </div>
                                     <div class="col-md-6"> 1120</div>
                                     <div class="col-md-12"> 1a</div>
                               </div>
                            </div>

                       
                       
                        </div>
                      </div>
                      </div>
                       
                  </div>     
                       
                       
                       
                       
                   
                
            
      
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    
    
    
    
    
</body>






 <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous">
</script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
  </script>
 

   <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</html>