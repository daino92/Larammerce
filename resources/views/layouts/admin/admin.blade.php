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
    <link rel="stylesheet"href="{{URL::to('src/css/nav.css')}}">
    <link rel="stylesheet" href="{{ URL::to('src/css/app.css') }}">
    <script type="text/javascript" src="{{ URL::to('src/js/canvasjs.min.js') }}"></script>
</head>

<body>
<nav class="navbar navbar-default admin-nav">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administrator <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Approve Products</a></li>
                        <li><a href="#">User Management</a></li>
                        <li><a href="#">Emails</a></li>
                        <li><a href="#">Homepage</a></li>
                        <li><a href="{{route('product.index')}}">Return to site</a></li>
                        <li><a href="{{ route('user.logout') }}">Log out</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

    <div id="wrapper">
        <!-- Sidebar -->

        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->



            <div class="container-fluid admin " style="height:auto%;background:#EDF1F5;">
               <div class="row">
                <div class="col-lg-12">
                    <div class="statistic-region" style="height: 180px;">
                        <div class="col-lg-3 statistic-box">
                            <div class="statistic-box-inside">
                                <div class="col-md-6">
                                    <i class="fa fa-users  fa-4x" style="    padding-top: 20px" aria-hidden="true"></i><br>
                                    <h4>  Total Clients</h4>
                                </div>
                                <div class="col-md-6 text-right statistic-num" style="color: #3dabce;"> 25</div>
                                    <div class="col-md-12 pr-bar">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:55%;background-color: #3dabce;">
                                            <span class="sr-only">70% Complete</span>
                                        </div>
                                    </div>
                            </div>
                        </div>

                        <div class="col-lg-3 statistic-box">
                            <div class="statistic-box-inside">
                                <div class="col-md-6">
                                    <i class="fa fa-cart-plus fa-4x" style="    padding-top: 20px" aria-hidden="true"></i><br>
                                    <h4>Products Sold</h4>
                                </div>
                                <div class="col-md-6 text-right statistic-num" style="color: #b255c7;"> 125 </div>
                                <div class="col-md-12 pr-bar">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:60%;background-color: #b255c7;">
                                        <span class="sr-only">70% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 statistic-box">
                            <div class="statistic-box-inside">
                                <div class="col-md-6">
                                    <i class="fa fa-credit-card  fa-4x" style="    padding-top: 20px" aria-hidden="true"></i><br>
                                    <h4>Total Income</h4>
                                </div>
                                <div class="col-md-6 text-right statistic-num" style="color: #23b953;"> 300</div>
                                <div class="col-md-12 pr-bar">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%;background-color: #23b953;">
                                        <span class="sr-only">70% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 statistic-box">
                            <div class="statistic-box-inside">
                                <div class="col-md-6">
                                    <i class="fa fa-suitcase  fa-4x" style="    padding-top: 20px" aria-hidden="true"></i><br>
                                    <h4>Vendors</h4>
                                </div>
                                <div class="col-md-6 text-right statistic-num" style="    color: #ff1212;"> 1120</div>
                                     <div class="col-md-12 pr-bar">
                                         <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:30%;background-color: #ff1212;">
                                             <span class="sr-only">70% Complete</span>
                                         </div>
                                     </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>



<div class="row">
       <div class="col-lg-6 charts">
                      <div class="Chart-titles">
                Orders-per Month
            </div>
           <div id="chartContainer"> </div>
        </div>
       <div class="col-lg-6 charts">
                      <div class="Chart-titles">
                Top Sellers
            </div>
           <div id="chartContainer2"></div>
        </div>
</div>


<div class="row">
      <div class="col-lg-6 charts">
                      <div class="Chart-titles">
                Recent Activities
            </div>
                        <table class="sales-table">
                <tr>
                    <td><b>Manos Gaitanakis</b></td>
                    <td><b>21:36</b></td>
                    <td><b>Jacket Upload</b></td>
                </tr>
                <tr>
                    <td><b>Dionisis Kalepanagos</b></td>
                    <td><b>19:00</b></td>
                    <td><b>Red Tshirt Upload</b></td>
                </tr>
                <tr>
                    <td><b>Foo Bar</b></td>
                    <td><b>1:24</b></td>
                    <td><b>Shoes DC 24' Upload</b></td>
                </tr>
                <tr>
                    <td><b>John Snow</b></td>
                    <td><b>13:23</b></td>
                    <td><b>Epic Sword 24 inch Upload</b></td>
                </tr>
                <tr>
                    <td><b>Nikola Tesla</b></td>
                    <td><b>18:23</b></td>
                    <td><b>Tesla Coil Prototype Uploaded</b></td>
                </tr>


            </table>

        </div>
        <div class="col-lg-6 charts">
            <div class="Chart-titles">
                Recent Sales
            </div>
            <table class="sales-table">
                <tr>
                    <td><b>Red Shirt</b></td>
                    <td><b>17:36</b></td>
                    <td><b>+5.56$</b></td>
                </tr>
                <tr>
                    <td><b>Jacket Volcom</b></td>
                    <td><b>16:00</b></td>
                    <td><b>+13.56$</b></td>
                </tr>
                <tr>
                    <td><b>Hight heels PRADA</b></td>
                    <td><b>12:24</b></td>
                    <td><b>+222.56$</b></td>
                </tr>
                <tr>
                    <td><b>Snowboard OSIRIS</b></td>
                    <td><b>1:23</b></td>
                    <td><b>+345.56$</b></td>
                </tr>
                <tr>
                    <td><b>BMX 24'' Size</b></td>
                    <td><b>6:24</b></td>
                    <td><b>+80.56$</b></td>
                </tr>


            </table>
        </div>
</div>
            </div>
            <!-- /#page-content-wrapper -->
        </div>
        <!-- /#wrapper -->
    @include('partials.footer')

</body>

<script type="text/javascript">
  window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer",
    {
      theme: "theme2",
      title:{
        text: ""
      },
      animationEnabled: true,
      axisX: {
        valueFormatString: "MMM",
        interval:1,
        intervalType: "month"

      },
      axisY:{
        includeZero: false
      },
      data: [
      {
        type: "line",
        dataPoints: [
        { x: new Date(2016, 00, 1), y: 450 },
        { x: new Date(2016, 01, 1), y: 414},
        { x: new Date(2016, 02, 1), y: 520, indexLabel: "highest",markerColor: "red", markerType: "triangle"},
        { x: new Date(2016, 03, 1), y: 460 },
        { x: new Date(2016, 04, 1), y: 450 },
        { x: new Date(2016, 05, 1), y: 500 },
        { x: new Date(2016, 06, 1), y: 480 },
        { x: new Date(2016, 07, 1), y: 480 },
        { x: new Date(2016, 08, 1), y: 410 , indexLabel: "lowest",markerColor: "DarkSlateGrey", markerType: "cross"},
        { x: new Date(2016, 09, 1), y: 500 },
        { x: new Date(2016, 10, 1), y: 480 },
        { x: new Date(2016, 11, 1), y: 510 }]
      }
      ]
    });
          var chart2 = new CanvasJS.Chart("chartContainer2",
    {
      title:{
        text: ""
      },
      animationEnabled: true,
      axisY: {
        title: "Total Sales"
      },
      legend: {
        verticalAlign: "bottom",
        horizontalAlign: "center"
      },
      theme: "theme3",
      data: [
      {
        type: "column",
        showInLegend: true,
        legendMarkerColor: "grey",
        legendText: "Top Sellers",
        dataPoints: [
        {y: 4571, label: "Bob"},
        {y: 3017,  label: "Nick" },
        {y: 2200,  label: "Tasos"},
        {y: 1580,  label: "Manos"},
        {y: 6000,  label: "Diogenis"},
        {y: 800, label: "Dionisis"},
        {y: 682,  label: "Dimitris"},
        {y: 350,  label: "Emmanouela"}
        ]
      }
      ]
    });
    chart2.render();
chart.render();
}
</script>

<script type="text/javascript">
</script>

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