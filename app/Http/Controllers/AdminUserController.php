<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use Session;
use App\Http\Requests;
use App\User;
class AdminUserController extends Controller
{
    public function adminAllUsers(){
        $users = User::all();
        return view('admin.users.allusers', compact('users'));
    }

    public function adminShowUsers($id){
        $user = User::find($id);
        return view('admin.users.showusers',compact('user'));
    }

    public function adminAddUsers(){
        return view('admin.users.adduser');
    }

    public function store(Request $request){ // ok?
        $user=Request::all();
        User::create($user);
        return redirect()->back();
    }

    public function adminEditUser($id){ //ok?
        $user=User::find($id);
        return view('admin.users.edituser', compact('user'));
    }

    public function update($id){ //ok?
        $userUpdate=Request::all();
        $user=User::find($id);
        $user->update($userUpdate);
        return redirect()->back();
    }

    public function adminDestroyUser($id){
        User::find($id)->delete();
        Session::flash('flash_message', 'User successfully deleted.');
        return redirect()->back();
    }
}