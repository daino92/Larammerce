<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Request;
use App\Http\Requests;
use App\User;
class AdminUserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('admins.users.index', compact('users'));
    }

    public function show($id){
        $users=User::find($id);
        return view('admin.users.show',compact('users'));
    }

    public function create(){
        return view('admin.users.create');
    }

    public function store(){
        $user=Request::all();
        User::create($user);
        return redirect('admin.users');
    }

    public function edit($id){
        $user=User::find($id);
        return view('admin.users.edit', compact('user'));
    }

    public function update($id){
        $userUpdate=Request::all();
        $user=User::find($id);
        $user->update($userUpdate);
        return view('admin.users');
    }

    public function destroy($id){
        User::find($id)->delete();
        return redirect('admin.users');
    }


}
