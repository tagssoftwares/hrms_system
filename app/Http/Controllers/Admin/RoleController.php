<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\validateInput;

use App\models\Role;

class RoleController extends Controller
{
    public function index()
    {
    	$rolename = Role::paginate(6);
    	return view('elements.role.index',['rolename' =>$rolename]);
    }

    /*public function view_role_form()
    {
        return view('elements.role.create');
    }*/
    public function create_role(Request $request)
    {
    
    //$this->validateInput($request);
         $result= Role::create([
            'name' => $request['roleName'],
        ]);
        if ($result) {
        	$role_addded = "Role Added Successfully";

         	return redirect()->intended('rolelist')->withMessage($role_addded);
         } 
       


    }
}
