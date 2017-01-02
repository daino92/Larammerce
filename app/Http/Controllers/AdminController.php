<?php

namespace App\Http\Controllers;

use App\Product;
use App\Order;
use App\Role;
class adminController extends Controller
{
    public function adminIndex(){
        return view('admin.adminMaster');
    }

    public function adminManageRoles(){
        $roles = Role::all();
        return view('admin.users.roles')->withRoles($roles);
    }

    public function adminDashboard(){
        $products = Product::all();
        return view('admin.dashboard')->withProducts($products);
    }

    public function adminCharts(){
        return view('admin.charts');
    }

    public function adminActivities(){
        return view('admin.activities');
    }

    public function adminTransactions(){
        $orders = Order::all();
        return view('admin.transactions')->withOrders($orders);
    }

    public function adminProducts(){
        $products = Product::all();
        return view('admin.adminproducts')->withProducts($products);
    }
}