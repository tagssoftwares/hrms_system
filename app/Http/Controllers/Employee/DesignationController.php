<?php

namespace App\Http\Controllers\Employee;
use App\Models\Department;
use App\Models\Designation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class DesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {  $departments = Department::get();
       $data = DB::table('Designation')
             ->join('Department','Designation.department_id','=','Department.id')
             ->select('Department.name','Designation.designation')
             ->get();
       return view('employee-management.designation.designation', ['departments' => $departments,'data' =>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Designation::create([
            'department_id' => $request['department'],
            'designation' => $request['designation']
        ]);

        return redirect()->intended('designations');

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
