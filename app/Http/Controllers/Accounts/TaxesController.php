<?php

namespace App\Http\Controllers\Accounts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaxesController extends Controller
{
    public function index()
    {
        return view('accounts.taxes.taxes');
    }
}
