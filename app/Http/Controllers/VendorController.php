<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class VendorController extends Controller
{
    public function VendorProfile(){
        return view('vendor.profile');
    }

    public function preferences(){
        return view('vendor.preferences');
    }

    public function VendorOrders(){
        return view('vendor.orders');
    }
}
