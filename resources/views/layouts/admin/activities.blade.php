@extends('layouts.admin.adminMaster')
<head>
    <link rel="stylesheet"href="{{URL::to('src/css/nav.css')}}">
</head>
@section('contents')
    <div id="page-wrapper" class="dashboard" >
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Activities <small>Overview</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <i class="fa fa-fw fa-bar-chart-o"></i> Activities
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div id="wrapper">
        <div class="container-fluid admin " style="height:auto;background:#EDF1F5;">
            <div class="row">
                <div class="col-lg-6 charts">
                    <div class="Chart-titles">Recent Activities</div>
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
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
@endsection