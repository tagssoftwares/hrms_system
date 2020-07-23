<?php

namespace App\Http\Controllers\Payroll;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeesalaryController extends Controller
{
    public function index()
    {
        return view('payroll.employee-salary.employee-salary');
    }
}
