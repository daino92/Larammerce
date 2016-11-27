<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Mail; //new
use Auth;
use Session;
//use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    public function getSignup() {
        return view('user.signup');
    }

    public function postSignup(Request $request) {
        $this-> validate($request, [
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

        //Mail::send('mails.verify', $data, function($message) { //new
        //    $message->to($data['email'])->subject('Verify your email address');
        //});

        //Auth::login($user); //If a new user creates an account, the system automatically logs him in.

        if (Session::has('oldUrl')) {
            $oldUrl = Session::get('oldUrl');
            Session::forget('oldUrl');
            return redirect()->to($oldUrl);
        }
        return redirect()->route('user.profile');
    }

    public function getSignin(){
        return view('user.signin');
    }

    public function postSignin(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|min:4',
            'login' => 'required|max:30'
        ]);

        //Authorization attempt using either username or email.
        //If succeeds, it redirects to the user profile. Else it goes to the previous page
        //Needs refactoring
        if (Auth::attempt(['username' => $request->input('login'), 'password' => $request->input('password')])) {
            if (Session::has('oldUrl')) {
                $oldUrl = Session::get('oldUrl');
                Session::forget('oldUrl');
                return redirect()->to($oldUrl);
            }
            return redirect()->route('user.profile');
        }
        elseif (Auth::attempt(['email' => $request->input('login'), 'password' => $request->input('password')])) {
            if (Session::has('oldUrl')) {
                $oldUrl = Session::get('oldUrl');
                Session::forget('oldUrl');
                return redirect()->to($oldUrl);
            }
            return redirect()->route('user.profile');
        }
        return redirect()->back();
    }

    public function getProfile(){
        $orders = Auth::user()->orders; //for the profile page
        $orders->transform(function($order, $key) {
            $order->cart = unserialize($order->cart);
            return $order;
        });
        return view('user.profile', ['orders' => $orders]);
    }

    public function getLogout(){
        Auth::Logout();
        return redirect()->route('product.index');
    }
}