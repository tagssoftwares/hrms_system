<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Hash;
use Session;

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
      //print_r($_REQUEST);

        /*$this->validate($request, [
        'employeeID'           => 'required',
        'password'           => 'required|confirmed',
    ]);*/
    	$input = $request->all();

        $employeeID = $request->employeeID;
        $password = $request->password;

        $adminLoginCheck = DB::table('users')
                          ->where('employeeID',$employeeID)
                          ->first();

                          
       // $userID = $adminLoginCheck->id;
        //print_r($adminLoginCheck);
       /*if($adminLoginCheck->email['admin@example.com']){
        return 'Invalid Username';
       }*/
       //print_r($adminLoginCheck->email['admin@example.com']);die();
        if($adminLoginCheck){

          if (Hash::check($password, $adminLoginCheck->password)) {
            Session::put('bamaAdmin', $employeeID);
            Session::save();
            return 1;
          }
          else
          {
            return 'Invalid Password';
            //return redirect('/')->with('flash_message_error','Invalid Username or Password');
          }
      }
      else{
        return 'Invalid Username';
      }
       

    }
}
