<?php

namespace App\Http\Controllers;

use App\Product;
use App\Order;
use App\Role;
use App\User;
use App\SubCategories;
class adminController extends Controller
{
    public function adminIndex(){
        return view('admin.adminMaster');
    }

    public function adminManageRoles(){
        $roles = Role::all();
        return view('admin.users.roles')->withRoles($roles);
    }

    public function adminVendors(){
        $roles = Role::find(2);
        $users = User::orderBy('id','ASC')->paginate(5);
        return view('admin.users.totalvendors')->withUsers($roles->users);
    }

    public function adminDashboard(){
        $products = Product::all();
        $orders = Order::all();
        $users = User::all();
        $roles = Role::find(2);
        return view('admin.dashboard',['orders' => $orders], ['products' => $products])->withUsers($users)->withRoles($roles);
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

    public function getIndexPage() {
        $SubCategories = SubCategories::all();
        return view('admin.AdminIndex')->with('SubCategories',$SubCategories);
    }
}