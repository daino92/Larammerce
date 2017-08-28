<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Cart;
use App\Role;
use Auth;
use Session;
class UserController extends Controller
{
    public function getSignup(){
        return view('user.signup');
    }

    public function postSignup(Request $request){
        $this->validate($request,[
            'email' => 'email|required|unique:users',
            'password' => 'required|min:4',
            'username' => 'required|max:20|alpha_num|unique:users'
        ]);

        $confirmation_code = str_random(30);

        $user = new User([
            'email' => $request->input('email'),
            'username' => $request->input('username'),
            'password' => bcrypt($request->input('password')),
            'confirmation_code' => $confirmation_code //for confirmation mail
        ]);
        $user->save();
        $user->roles()->attach(Role::where('name', 'User')->first());

        //Auth::login($user); //If a new user creates an account, the system automatically logs him in.

        if (Session::has('oldUrl')){
            $oldUrl = Session::get('oldUrl');
            Session::forget('oldUrl');
            return redirect()->to($oldUrl);
        }
        return redirect()->route('user.profile');
    }

    public function getSignin(){
        return view('user.signin');
    }

    public function postSignin(Request $request){
        $this->validate($request,[
            'password' => 'required|min:4',
            'login' => 'required|max:30'
        ]);

        //Authorization attempt using either username or email. If succeeds, it redirects to the user profile. Else it goes to home page
        $login = $request->get('login');
        $password = $request->get('password');
        if ((Auth::attempt(['username' => $login, 'password' => $password])) || (Auth::attempt(['email' => $login, 'password' => $password]))){
            if (Session::has('oldUrl')){
                $oldUrl = Session::get('oldUrl');
                Session::forget('oldUrl');
                return redirect()->to($oldUrl);
            }
            if(Auth::user()->roles->contains(1))
                return redirect()->route('admin.dashboard');
            else if (Auth::user()->roles->contains(2))
                return redirect()->route('vendor.profile');
            else if(Auth::user()->roles->contains(3))
                return redirect()->route('user.profile');
        }
        return redirect()->back();
    }

    public function OrderHistory(){
        $orders = Auth::user()->orders; // Return completed orders to the profile page
        $orders->transform(function($order, $key){
            $order->cart = unserialize($order->cart);
            return $order;
        });
        return view('user.orderhistory', ['orders' => $orders]);
    }

    public function OngoingOrders(){
        $emptyCart = Session::get('cart'); // If there is a cart, fetch it.
        $cart = new Cart($emptyCart);
        return view('user.ongoingorders', ['products' => $cart->products, 'totalPrice' => $cart->totalPrice]);
    }

    public function userProfile(){
        $user = User::all();
        return view('user.profile')->withUser($user);;
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
        return redirect()->route('user.profile');
    }

    public function getLogout(){
        Auth::Logout();
        return redirect()->route('indexPage');
    }
}