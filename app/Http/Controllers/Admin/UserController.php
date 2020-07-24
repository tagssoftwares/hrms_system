<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use DB;
use App\Models\Employee;
use App\Models\Department;
use App\Models\Designation;
use App\Models\User_Role;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon; 

class UserController extends Controller
{
    public function index()
    {
        
        $employees = DB::table('Employees')
            ->join('Users', 'Employees.user_id', '=','Users.id' )
            ->select('*')
            //->select('Department.name', 'Designation.designation', 'Employees.Age', 'Departments.Name')
            ->get();
            //$this->date = Carbon::now()->format('Y-m-d');
            //$this->date = date('Y-m-d');
        //$employees = Employee::get();
        $rolename = Role::all();
        $departments = Department::get();
        $designations = Designation::get();
    	return view('elements.users.index', ['rolename' => $rolename, 'employees' => $employees, 'departments' => $departments, 'designations' => $designations]);
    }

    public function myformAjax($id)
    {
        $designation = DB::table("designation")
                    ->where("department_id",$id)
                    //->lists("name","id");
                    ->get();
        return json_encode($designation);
    }

    /*public function view_create_form()
    {
        //$rolename = Role::all();
       // return view('admin.users.create', ['rolename' => $rolename]);
    	return view('elements.users.create');
    }*/

    public function create_user(Request $request)
    {
         // validate form fields
        $request->validate([
                'first_name'        =>      'required',
                'middel_name'        =>     'required',
                'last_name'         =>      'required',
                'username'          =>      'required|email',
                'email'             =>      'required|email',
                'password'          =>      'required|min:6',
                'confirm_password'  =>      'required|same:password',
                'employeeID'        =>      'required|max:10',
                'joining_date'      =>      'required',
                'department'        =>      'required',
                'designation'       =>      'required'
            ]);

        $input          =           $request->all();

        $usersinputArray      =           array(

            'name'              =>      $request->first_name . " ". $request->middel_name. " ". $request->last_name,
            'username'          =>      $request->username,
            'email'             =>      $request->email,
            'password'          =>      Hash::make($request->password),
            'confirm_password'  =>      Hash::make($request->confirm_password),
            'role'              =>      $request->roleName,
            'employeeID'        =>      $request->employeeID
        );

        $user           =           User::create($usersinputArray);

        echo $user_id = $user->id;
        
         //= Carbon::parse();
         //$dateTime = Carbon::createFromFormat('m-d-Y', $request->joining_date)->get();


            $employeeinputArray      =           array(
            'user_id'           =>      $user_id,
            'employeeID'        =>      $request->employeeID,
            'first_name'        =>      $request->first_name,
            'middel_name'       =>      $request->middel_name,
            'last_name'         =>      $request->last_name,
            'email'             =>      $request->email,
            'joining_date'      =>      $request->joining_date,
            'department'        =>      $request->department,
            'designation'       =>      $request->designation
            
            
        );

            $employee           =           Employee::create($employeeinputArray);


            $user_id = $user->id;

             $usersrolesinputArray      =           array(
            'role_id'           =>      $request->role,
            'user_id'        =>     $user_id          
            
        );

             $users_roles           =           User_Role::create($usersrolesinputArray);
        /*if(!is_null($user)) {
            return back()->with('success', 'You have registered successfully.');
        }*/
    }
}
