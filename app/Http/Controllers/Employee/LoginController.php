<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
      //$this->middleware('guest:admin', ['except' => ['logout']]);
      //parent::__construct();
    }
    public function index(){

    	return \View::make('employee-management/login');
    }
    public function Login(Request $request){
    	$input = $request->all();

        $remember = false;

        $data = ['email' => $input['email'], 'password' => $input['password']];

        if (isset($input['remember'])) {
            $remember = true;
        }

        
            if ($data) {
               
        } 

    }
}
