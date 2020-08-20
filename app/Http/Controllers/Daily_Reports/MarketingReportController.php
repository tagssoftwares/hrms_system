<?php

namespace App\Http\Controllers\Daily_Reports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MarketingReportController extends Controller
{
    public function index()

    { 
       return view('daily_report.marketing_daily_report.daily_report');
    }
}
