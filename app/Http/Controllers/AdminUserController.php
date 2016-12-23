<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use Session;
use App\Http\Requests;
use App\User;
class AdminUserController extends Controller
{
    public function adminAllUsers(){    //ok
        $users = User::all();
        return view('layouts.admin.users.allusers', compact('users'));
    }

    public function adminShowUsers($id){    //ok
        $user = User::find($id);
        return view('layouts.admin.users.showusers',compact('user'));
    }

    public function adminAddUsers(){    //ok
        return view('layouts.admin.users.adduser');
    }

    public function store(Request $request){
        $user=Request::all();
        User::create($user);
        return redirect()->back();
    }

    public function adminEditUser($id){
        $user=User::find($id);
        return view('layouts.admin.users.edituser', compact('user'));
    }

    public function update($id){
        $userUpdate=Request::all();
        $user=User::find($id);
        $user->update($userUpdate);
        return redirect()->back();
    }

    public function adminDestroyUser($id){  //ok
        User::find($id)->delete();
        Session::flash('flash_message', 'User successfully deleted.');
        return redirect()->back();
    }
}