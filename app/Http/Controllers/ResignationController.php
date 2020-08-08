<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\Resignation;

use Illuminate\Http\Request;
use DB;

class ResignationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reg()
    {      $employees = Employee::get();
        $resignation = DB::table('resignation')
             ->join('employees','resignation.employees_id','=','employees.id')
             ->select('employees.first_name','employees.middel_name','employees.last_name','resignation.notice_date','resignation.resignation_date','resignation.reason')
            // ->lists('name','employees')
             ->get();
             
      
        return view('Resignation.resignation',['employees'=>$employees,'resignation'=>$resignation]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $resignation=Resignation::create([
          'employees_id'=> $request['employees'],
          'notice_date'=>$request['notice_date'],
          'resignation_date'=> $request['resignation_date'] ,
          'reason'=>$request['resons'],
         
        ]);
        return redirect()->intended('resignation');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
