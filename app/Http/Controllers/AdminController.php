<?php

namespace App\Http\Controllers;


class adminController extends Controller
{
    public function adminIndex(){
        return view('admin.adminMaster');
    }

    public function adminManageRoles(){
        return view('admin.users.roles');
    }

    public function adminDashboard(){
        return view('admin.dashboard');
    }

    public function adminCharts(){
        return view('admin.charts');
    }

    public function adminActivities(){
        return view('admin.activities');
    }

    public function adminTransactions(){
        return view('admin.transactions');
    }

    public function adminProducts(){
        return view('admin.adminproducts');
    }
}