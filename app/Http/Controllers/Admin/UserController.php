<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use DB;
use App\Models\Department;
use App\Models\Designation;

class UserController extends Controller
{
    public function index()
    {
        //$users = DB::table('users')->select('*')->get();
        //return view('admin.users.view')->with('users',$users);
        $employees = DB::table('employees')
        ->leftJoin('Department', 'employees.department', '=', 'department.id')
        ->leftJoin('Designation', 'employees.designation', '=', 'Designation.id')
        /*->leftJoin('state', 'employees.state_id', '=', 'state.id')
        ->leftJoin('country', 'employees.country_id', '=', 'country.id')
        ->leftJoin('division', 'employees.division_id', '=', 'division.id')
        ->select('employees.*', 'department.name as department_name', 'department.id as department_id', 'division.name as division_name', 'division.id as division_id')
        ->paginate(5);*/
         ->get();
        $data = DB::table('Designation')
            ->join('Department', 'Designation.department_id', '=','Department.id' )
            ->select('Department.name', 'Designation.designation')
            //->select('Department.name', 'Designation.designation', 'Employees.Age', 'Departments.Name')
            ->get();
        $rolename = Role::all();
        $departments = Department::get();
        $designations = Designation::get();
    	return view('elements.users.index', ['rolename' => $rolename, 'employees' => $employees, 'departments' => $departments, 'designations' => $designations]);
    }

    // public function demo()
    // {
    //  $department_list = DB::table('designation')
    //      ->groupBy('department')
    //      ->get();
    //  return view('dynamic_dependent')->with('country_list', $country_list);
    // }
    public function view_create_form()
    {
        //$rolename = Role::all();
       // return view('admin.users.create', ['rolename' => $rolename]);
    	return view('elements.users.create');
    }

    public function create_user(Request $request)
    {
        $data = $_POST;
        print_r($data);
        //dd($data);
        $result = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role' => $data['roleName'],
            'password' => Hash::make($data['password']),
        ]);
       echo $user_id = $result->id;
        //print_r($user_id);die();
        $users_roles = Users_Roles::create([
             'role_id' => $data['role'],
             'user_id' => $user_id,
         ]);
    }
}
