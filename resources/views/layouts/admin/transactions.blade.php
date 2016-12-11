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
                        Transactions <small>Overview</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <i class="fa fa-fw fa-bar-chart-o"></i> Transactions
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
                    <div class="Chart-titles">Recent Sales</div>
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
@endsection