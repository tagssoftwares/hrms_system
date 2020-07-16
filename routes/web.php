<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'UserController@dashboard')->name('dashboard');

Route::get('/login', 'UserController@login')->name('login');
Route::get('clients', ['as' => 'employee-management.Client.client', 'uses' => 'ClientController@client']);


/* EmployeeController */

Route::group(["namespace" => 'Employee'], function () {

    Route::get('employee', ['as' => 'employee-management.employee', 'uses' => 'EmployeeController@emp']);


});


/* close EmployeeController */

/* HolidayController */
Route::group(["namespace" => 'Employee'], function () {

    Route::get('holiday', ['as' => 'employee-management.holiday.holidays', 'uses' => 'HolidayController@holidays']);
    Route::get('attendance-employee', ['as' => 'employee-management.attendance.employee_attendance', 'uses' => 'AttendanceempController@attendance']);
    Route::get('departments', ['as' => 'employee-management.department.department', 'uses' => 'DepartmentController@department']);
    Route::get('designations', ['as' => 'employee-management.department.department', 'uses' => 'DesignationController@desig']);
    Route::get('timesheet', ['as' => 'employee-management.timesheet.timesheet', 'uses' => 'TimesheetController@timeshet']);
    Route::get('overtime', ['as' => 'employee-management.overtime.overtime', 'uses' => 'OvertimeController@ovr_time']);


});


/* close Holiday */
/* Leaves admin Controller */
Route::group(["namespace" => 'Admin'], function () {

    Route::get('leaves_admin', ['as' => 'employee-management.leaves.leaves_admin', 'uses' => 'LeaveController@leav']);
    Route::get('dashboard', ['as' => 'admin.dashboard', 'uses' => 'DashboardController@admin_dashboard']);
    Route::get('attendance_admin', ['as' => 'employee-management.attendance.admin_attendance', 'uses' => 'AttendanceadminController@admin_attend']);

});
/* close Admin */


/*Admin Dashboard  */


Route::group(["namespace" => 'Employee'], function () {

    Route::get('emp_dashboard', ['as' => 'employee-management.emp_dashboard', 'uses' => 'EmployeedashboardController@dashboard']);

});
Route::group(["namespace" => 'Employee'], function () {

    Route::get('leaves_employee', ['as' => 'leaveemp.leave_emp', 'uses' => 'EmpLeaveController@emp_leave']);
    
    Route::get('leavesetting', ['as' => 'leavemanage.leavesetting', 'uses' => 'LeavesettingController@leavesetting']);
});
Route::group(["namespace" => 'Project'], function () {

    Route::get('project', ['as' => 'projects.project', 'uses' => 'ProjectController@project']);
    
    Route::get('tasks', ['as' => 'projects.task', 'uses' => 'TaskController@task']);
});
    


