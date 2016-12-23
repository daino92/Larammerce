<?php

namespace App\Http\Controllers;


class adminController extends Controller
{
    public function adminIndex(){
        return view('layouts.admin.adminMaster');
    }

    public function adminManageRoles(){
        return view('layouts.admin.users.roles');
    }

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