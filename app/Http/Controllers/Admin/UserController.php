<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        //$users = DB::table('users')->select('*')->get();
        //return view('admin.users.view')->with('users',$users);
    	return view('elements.users.index');
    }

    public function view_create_form()
    {
        //$rolename = Role::all();
       // return view('admin.users.create', ['rolename' => $rolename]);
    	return view('elements.users.create');
    }
}
