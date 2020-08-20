<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use DB;
use App\Models\Role;
use View;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function emp()
    {
      $employees = DB::table('Employees')
            ->join('Users', 'Employees.user_id', '=','Users.id' )
            ->select('*')
            //->select('Department.name', 'Designation.designation', 'Employees.Age', 'Departments.Name')
            ->get();
            $rolename = Role::all();
       return view('employee-management.employee',['rolename' => $rolename, 'employees' => $employees]);
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
        //
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
    public function editEmp($id)
    {
        $employees = Employee::find($id);
        return view('employee-management.employee',['employees' => $employees]);
    //return view('Admin.BaseFare.editBaseFare')->with('base', $base);
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateEmp(Request $request, $id)
    {
         //$data['id'] = $empID;
        $employees = Employee::find($id);
//print_r($employees);die();
    //$base->fareinpercentage = $request->fareinpercentage;

    //$base->fareinrupees = $request->fareinrupees;

    //$base->save();

    //Session::flash('success','Base fare successfully updated');

    //return redirect()->route('base.fare');
        return view('employee-management.employee',['employees' => $employees]);

    }

public function editEmpProfile($id)
    {
        //$employees = Employee::find($id);
        $employees = DB::table('employees')
                    ->where('user_id',$id)
                    ->get();
                    /*$employees = DB::table('Employees')
            ->join('Users', 'Employees.user_id', '=','Users.id' )
            ->select('*')
            ->where('user_id',$id)
            //->select('Department.name', 'Designation.designation', 'Employees.Age', 'Departments.Name')
            ->get();*/
        

        return view('profile.employee.employee_profile',['employees' => $employees]);
        
    }    
    public function updateEmpProfile(Request $request, $id)
    {
        $employees = Employee::find($id);

    //$base->fareinpercentage = $request->fareinpercentage;

    //$base->fareinrupees = $request->fareinrupees;

    //$base->save();

    //Session::flash('success','Base fare successfully updated');

    //return redirect()->route('base.fare');
        return view('profile.employee.employee_profile',['employees' => $employees]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
       // print_r($_POST);die();
        $employee = Employee::find($id)->delete($id);
  
    return response()->json([
        'success' => 'Record deleted successfully!'
    ]);


    //return redirect('/admin/users'); 

    }
}
