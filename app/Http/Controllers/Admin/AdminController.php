<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\Login\LoginRequest;
use App\Classes\Reply;
use App\Models\Employee;
use Illuminate\Collective\Html\FormFacade;
use App\Http\Controllers\AdminBaseController;
//use App\Admin;


class AdminController extends Controller
{

	public function __construct()
    {
      //$this->middleware('guest:admin', ['except' => ['logout']]);
      //parent::__construct();
    }

    public function index()
    {
        if (auth()->guard('admin')->check()) {
            //return redirect()->route('admin.dashboard.index');
        }

        //return \View::make('users/login', $this->data);
        return \View::make('users/login');
    }

   	public function admin_login(Request $request)
   	{
        print_r($_REQUEST);
        die();

        $email = $request->email;
    $password = $request->password;

    $adminLoginCheck = DB::table('users')
                      ->where('email',$email)
                            ->first();

    if($adminLoginCheck){
      if (Hash::check($password, $adminLoginCheck->admin_pass)) {
        Session::put('bamaAdmin', $email);
        Session::save();
        return redirect()->route('adminHome');
      }
      else{
        return redirect()->route('adminLogin')->withErrors('Wrong Password');
      }
    }
    else{
      return redirect()->route('adminLogin')->withErrors('Email/Password Wrong');
    }




      $input = $request->all();

      $rules = array('email' => 'required|email', 'password' => 'required');

        $remember = false;

        $data = ['email' => $input['email'], 'password' => $input['password']];

        if (isset($input['remember'])) {
            $remember = true;
        }

        // Check if admin exists in database with the credentials or not

        //if (auth()->guard('admin')->attempt($data, $remember)) {
            if ($data) {
                # code...
            
             /*else if ($admin->type == 'admin') {

                $company = Company::where('id', '=', $admin->company_id)->first();

                if ($company->status == 'inactive') {
                    auth()->guard('admin')->logout();
                    $reply = Reply::error(trans("messages.companyDisabled"));
                } else {

                    $url = (\Session::has('back_url_admin')) ? \Session::get('back_url_admin') : \URL::route('admin.dashboard.index');
                    $reply = Reply::redirect($url, trans('messages.loginSuccess'));

                }
            }*/
        } 

        
   		
    }

    public function logout(Request $request ) 
	 {
    $request->session()->flush();
    Auth::logout();
    return Redirect('/');
    }

}
