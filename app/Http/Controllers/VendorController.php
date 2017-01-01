<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class VendorController extends Controller
{
    //
    
       public function getVendorprofile(){
        return view('vendor.profile');
    }
}
