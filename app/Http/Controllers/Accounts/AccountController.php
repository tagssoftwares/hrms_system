<?php

namespace App\Http\Controllers\Accounts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class AccountController extends Controller
{
    public function index()
    {
        return view('accounts.estimates.estimates');
    }
    public function create()
    {
        return view('accounts.estimates.create-estimate');
    }
}
