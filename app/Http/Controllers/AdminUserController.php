<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use Session;
use DB;
use App\User;
use App\Role;
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

    public function store(Request $request){
        $user=Request::all();
        $user=User::create($user);
        $role = Role::whereName(Request::input('role'))->first();
        $user->roles()->attach($role);
        return redirect()->back();
    }

    public function adminEditUser($id){
        $user=User::find($id);
        return view('admin.users.edituser', compact('user'));
    }

    public function update($id){
        $userUpdate=Request::all();
        $user=User::find($id);
        DB::table('user_role')->where('user_id',$id)->delete();
        $role = Role::whereName(Request::input('role'))->first();
        $user->roles()->attach($role);
        $user->update($userUpdate);
        return redirect()->back();
    }

    public function adminDestroyUser($id){
        User::find($id)->delete();
        DB::table('user_role')->where('user_id',$id)->delete();
        Session::flash('flash_message', 'User successfully deleted.');
        return redirect()->back();
    }
}