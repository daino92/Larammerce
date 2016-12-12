@extends('layouts.admin.adminMaster')

@section('contents')
    <div id="page-wrapper" class="dashboard">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Charts <small>Statistics</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <i class="fa fa-fw fa-bar-chart-o"></i> Charts
                        </li>
                    </ol>
                </div>
            </div>
            <!-- Flot Charts -->
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Flot Charts</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Line Graph with Tooltips</h3>
                        </div>
                        <div class="panel-body">
                            <div class="flot-chart">
                                <div class="flot-chart-content" id="flot-line-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Pie Chart with Tooltips</h3>
                        </div>
                        <div class="panel-body">
                            <div class="flot-chart">
                                <div class="flot-chart-content" id="flot-pie-chart"></div>
                            </div>
                            <div class="text-right">
                                <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Morris Charts -->
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Morris Charts</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Area Line Graph with Tooltips</h3>
                        </div>
                        <div class="panel-body">
                            <div id="morris-area-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Donut Chart</h3>
                        </div>
                        <div class="panel-body">
                            <div id="morris-donut-chart"></div>
                            <div class="text-right">
                                <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Line Graph with Tooltips</h3>
                        </div>
                        <div class="panel-body">
                            <div id="morris-line-chart"></div>
                            <div class="text-right">
                                <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Bar Graph</h3>
                        </div>
                        <div class="panel-body">
                            <div id="morris-bar-chart"></div>
                            <div class="text-right">
                                <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
    <div id="wrapper">
        <div class="container-fluid admin" style="height:auto;background:#EDF1F5;">
            <div class="row">
                <div class="col-lg-6 charts">
                    <div class="Chart-titles">Orders-per Month</div>
                    <div id="chartContainer"> </div>
                </div>
                <div class="col-lg-6 charts">
                    <div class="Chart-titles">Top Sellers</div>
                    <div id="chartContainer2"></div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
@endsection

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

<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

<script type="text/javascript" src="{{ URL::to('src/js/canvasjs.min.js') }}"></script>