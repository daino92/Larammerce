<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class adminController extends Controller
{
    public function adminIndex(){
        return view('layouts.admin.adminMaster');
    }

    /* Admin Users */
    public function adminAllUsers(){
        return view('layouts.admin.users.allusers');
    }

    public function adminAddUsers(){
        return view('layouts.admin.users.adduser');
    }

    public function adminManageRoles(){
        return view('layouts.admin.users.roles');
    }

    public function adminEditUser(){
        return view('layouts.admin.users.edituser');
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
