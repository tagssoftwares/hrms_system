<?php

namespace App\Http\Controllers\Report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoicereportController extends Controller
{
    public function index()
    {
        return view('report.invoicereport.invoicereport');
    }
}
