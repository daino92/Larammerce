@extends('master')

@section('title')
    Locoroco
@endsection

<style>
    .cat_Box{
        width: 250px;
        height: auto;
        border-radius: 13px;
        -webkit-box-shadow: 0 0 7px 0 rgba(153,153,153,0.4);
        -moz-box-shadow: 0 0 7px 0 rgba(153,153,153,0.4);
        box-shadow: 0 0 7px 0 rgba(153,153,153,0.4);
        padding-bottom: 10px;
        padding-top: 10px;
    }
    .cat_Box:hover{
        -webkit-box-shadow: 0 0 17px 0 rgba(223,194,153,1.4);
        -moz-box-shadow:0 0 17px 0 rgba(223,194,153,1.4);
        box-shadow:0 0 17px 0 rgba(223,194,153,1.4);
    }
    .cat_Box img{
        text-align: center;
        margin: 0px auto;
        display: block;
        padding-bottom: 5px;
    }
    .cat_Descr h4{
        text-align: center;  
    }
</style>

@section('content')

<h2 style="text-align:center; margin-bottom:50px;"> Sub-Categories About Technology</h2>
<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="cat_Box">
                    <div><img src="pictures/images/1cat.png" alt="img05"></div>
                    <div class="cat_Descr"><h4>Technology</h4></div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3">
                <div class="cat_Box">
                    <div><img src="pictures/images/1cat.png" alt="img05"></div>
                    <div class="cat_Descr"><h4>Technology</h4></div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="cat_Box">
                    <div><img src="pictures/images/1cat.png" alt="img05"></div>
                    <div class="cat_Descr"><h4>Technology</h4></div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="cat_Box">
                    <div><img src="pictures/images/1cat.png" alt="img05"></div>
                    <div class="cat_Descr"><h4>Technology</h4></div>
                </div>
            </div>
        </div>                                                                                   
    </div>
</div>

@endsection