<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class adminController extends Controller
{
    public function adminIndex(){
        return view('layouts.admin.adminMaster');
    }

    public function adminUsers(){
        return view('layouts.admin.users');
    }

    public function adminDashboard(){
        return view('layouts.admin.dashboard');
    }
}
