<?php

namespace App\Http\Controllers\Accounts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    public function index()
    {
        return view('accounts.invoices.invoices');
    }
    public function create()
    {
        return view('accounts.invoices.create-invoices');
    }
}
