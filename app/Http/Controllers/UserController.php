<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function dashboard(Request $request){

        return view('censor.dashboard');
    }

    // public function login(Request $request){

    //     return view('users.login');
    // }


}

