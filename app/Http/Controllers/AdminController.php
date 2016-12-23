<?php

namespace App\Http\Controllers;


//use Illuminate\Http\Request;
use Request;
use Session;
use App\Http\Requests;
use App\User;
class adminController extends Controller
{
    public function adminIndex(){
        return view('layouts.admin.adminMaster');
    }

    /* Admin Users */
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

    //-----------------------------------------------------

    public function adminManageRoles(){
        return view('layouts.admin.users.roles');
    }

    public function adminUsersOnly(){
        return view('layouts.admin.users.usersonly');
    }

    public function adminAdminsOnly(){
        return view('layouts.admin.users.adminsonly');
    }

    public function adminVendorsOnly(){
        return view('layouts.admin.users.vendorsonly');
    }
    /* Admin Users */

    public function adminDashboard(){
        return view('layouts.admin.dashboard');
    }

    public function adminCharts(){
        return view('layouts.admin.charts');
    }

    public function adminActivities(){
        return view('layouts.admin.activities');
    }

    public function adminTransactions(){
        return view('layouts.admin.transactions');
    }

    public function adminProducts(){
        return view('layouts.admin.adminproducts');
    }
}
