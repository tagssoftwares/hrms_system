<?php

namespace App\Http\Controllers\Report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExpensereportController extends Controller
{
    public function index()
    {
        return view('report.expensereport.expensereport');
    }
}
