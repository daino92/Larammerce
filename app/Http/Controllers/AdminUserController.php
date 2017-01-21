<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use App\User;
use App\Role;
class AdminUserController extends Controller
{
    public function index(){
        $users = User::orderBy('id','ASC')->paginate(5); //pagination
        return view('admin.users.allusers')->withUsers($users);
    }

    public function show($id){
        $user = User::find($id);
        return view('admin.users.showusers')->withUser($user);
    }

    public function create(){
        return view('admin.users.adduser');
    }

    public function store(Request $request){
        $this->validate($request,[
            'email' => 'email|required|unique:users',
            'password' => 'required|min:4',
            'username' => 'required|alpha_dash|max:20|unique:users',
            'name' => 'max:30|alpha',
            'surname' => 'max:30|alpha'
        ]);

        $user = new User([
            'email' => $request->input('email'),
            'username' => $request->input('username'),
            'password' => bcrypt($request->input('password')),
            'name' => $request->input('name'),
            'surname' => $request->input('surname')
        ]);
        $user->save();
        $role = Role::whereName($request->input('role'))->first();
        $user->roles()->attach($role);
        return redirect()->route('admin.users.allusers');
    }

    public function edit($id){
        $user=User::find($id);
        return view('admin.users.edituser')->withUser($user);
    }

    public function update(Request $request,$id){
        $userUpdate = $request->all();
        $user = User::find($id);
        DB::table('user_role')->where('user_id',$id)->delete(); //deletes pivot's table entry
        $role = Role::whereName($request->input('role'))->first();
        $user->roles()->attach($role);
        $user->update($userUpdate);
        return redirect()->route('admin.users.allusers');
    }

    public function destroy($id){
        User::destroy($id);
        DB::table('user_role')->where('user_id',$id)->delete();
        Session::flash('flash_message', 'User successfully deleted.');
        return redirect()->back();
    }
}