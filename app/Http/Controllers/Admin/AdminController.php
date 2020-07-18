<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\Login\LoginRequest;
use App\Classes\Reply;
use App\Models\Admin;
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

   	public function admin_login(LoginRequest $request)
   	{
      $input = $request->all();

        $remember = false;

        $data = ['email' => $input['email'], 'password' => $input['password']];

        if (isset($input['remember'])) {
            $remember = true;
        }

        // Check if admin exists in database with the credentials or not

        if (auth()->guard('admin')->attempt($data, $remember)) {

            $admin = admin();

            $admin->last_login = Carbon::now();
            $admin->number_of_logins = $admin->number_of_logins + 1;
            $admin->save();

            $cookie = \Cookie::make('lock', '0'); // Reset the lock screen session;

            $reply = [];

            if ($admin->user_type == 'A') {
                // $url = (\Session::has('back_url_superadmin')) ? \Session::get('back_url_superadmin') : \URL::route('superadmin.dashboard.index');
                // $reply = Reply::redirect($url, trans('messages.loginSuccess'));


            } /*else if ($admin->type == 'admin') {

                $company = Company::where('id', '=', $admin->company_id)->first();

                if ($company->status == 'inactive') {
                    auth()->guard('admin')->logout();
                    $reply = Reply::error(trans("messages.companyDisabled"));
                } else {

                    $url = (\Session::has('back_url_admin')) ? \Session::get('back_url_admin') : \URL::route('admin.dashboard.index');
                    $reply = Reply::redirect($url, trans('messages.loginSuccess'));

                }
            }*/
        } else {
            $message = (\Session::get("lock") != 1) ? trans('messages.loginInvalid') : trans('messages.wrongPassword');
            $reply = Reply::error($message);
        }

        $response = \Response::json($reply, 200);

        if (isset($cookie)) {
            $response->withCookie($cookie);
        }

        return $response;
   		
    }

	  public function logout(Request $request ) 
	 {
    $request->session()->flush();
    Auth::logout();
    return Redirect('/');
    }

}
