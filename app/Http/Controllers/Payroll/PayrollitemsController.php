<?php

namespace App\Http\Controllers\Payroll;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PayrollitemsController extends Controller
{
   public function index()
   {
       return view('payroll.payrollitems.payrollitems');
   }
}
