<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Order;
use Auth;
use Intervention\Image\ImageManagerStatic as Image;

class VendorController extends Controller
{
    public function vendorProfile(){
        $user = User::all();
        return view('vendor.profile')->withUser($user);
    }

    public function update(Request $request, $id){
        $userUpdate = $request->all();
        $user = User::find($id);

        $this->validate($request, [
            //   'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($file = $request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $extension = $file->getClientOriginalName();
            $username = Auth::user()->username;
            $destinationPath = public_path('/uploads/avatar/' . $username);
            $file->move($destinationPath, $extension);
            $user['avatar'] = '/uploads/avatar/'. $username . '/' . $extension;
        }

        $user->update($userUpdate);
        return redirect()->route('vendor.profile');
    }

    public function VendorOrders(){
        $orders = Order::orderBy('id','ASC')->paginate(5);
        return view('vendor.orders')->withOrders($orders);
    }
}