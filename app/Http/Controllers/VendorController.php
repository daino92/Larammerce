<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
class VendorController extends Controller
{
    public function VendorProfile(){
        return view('vendor.profile');
    }

    public function preferences(){
        $user = User::all();
        return view('vendor.preferences')->withUser($user);;
    }

    public function update(){
        $user = User::find(auth()->user());
        $user->update($user);
        return redirect()->route('vendor.preferences');
    }

    public function VendorOrders(){
        return view('vendor.orders');
    }
}
