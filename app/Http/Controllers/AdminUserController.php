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
        return view('admin.users.allusers')->withUsers($users);
    }

    public function adminShowUsers($id){
        $user = User::find($id);
        return view('admin.users.showusers')->withUser($user);
    }

    public function adminAddUsers(){
        return view('admin.users.adduser');
    }

    public function store(Request $request){
        $user=Request::all();
        $user=User::create($user);
        $role = Role::whereName(Request::input('role'))->first();
        $user->roles()->attach($role);
        return redirect()->route('admin.users.allusers');
    }

    public function adminEditUser($id){
        $user=User::find($id);
        return view('admin.users.edituser')->withUser($user);
    }

    public function update($id){
        $userUpdate=Request::all();
        $user=User::find($id);
        DB::table('user_role')->where('user_id',$id)->delete(); //deletes pivot's table entry
        $role = Role::whereName(Request::input('role'))->first();
        $user->roles()->attach($role);
        $user->update($userUpdate);
        return redirect()->route('admin.users.allusers');
    }

    public function adminDestroyUser($id){
        User::find($id)->delete();
        DB::table('user_role')->where('user_id',$id)->delete();
        Session::flash('flash_message', 'User successfully deleted.');
        return redirect()->back();
    }
}