<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        //$users = DB::table('users')->select('*')->get();
        //return view('admin.users.view')->with('users',$users);
        $rolename = Role::all();
    	return view('elements.users.index', ['rolename' => $rolename]);
    }

    public function view_create_form()
    {
        //$rolename = Role::all();
       // return view('admin.users.create', ['rolename' => $rolename]);
    	return view('elements.users.create');
    }

    public function create_user(Request $request)
    {
        $data = $_POST;
        print_r($data);
        //dd($data);
        $result = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role' => $data['roleName'],
            'password' => Hash::make($data['password']),
        ]);
       echo $user_id = $result->id;
        //print_r($user_id);die();
        $users_roles = Users_Roles::create([
             'role_id' => $data['role'],
             'user_id' => $user_id,
         ]);
    }
}
