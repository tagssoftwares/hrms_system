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
    Route::get('department/store', ['as' => 'employee-management.department.department', 'uses' => 'EmployeeController@store']);

});


/* close EmployeeController */

/* HolidayController */
Route::group(["namespace" => 'Employee'], function () {

    Route::get('holiday', ['as' => 'employee-management.holiday.holidays', 'uses' => 'HolidayController@index']);
   
    
    Route::get('attendance-employee', ['as' => 'employee-management.attendance.employee_attendance', 'uses' => 'AttendanceempController@attendance']);
    Route::get('departments', ['as' => 'employee-management.department.department', 'uses' => 'DepartmentController@department']);
    Route::POST('department/store', ['as' => 'employee-management.department.department', 'uses' => 'DepartmentController@store']);
    Route::get('designations', ['as' => 'employee-management.department.department', 'uses' => 'DesignationController@desig']);
    Route::get('timesheet', ['as' => 'employee-management.timesheet.timesheet', 'uses' => 'TimesheetController@timeshet']);
    Route::get('overtime', ['as' => 'employee-management.overtime.overtime', 'uses' => 'OvertimeController@ovr_time']);

    Route::POST('holiday/store', ['as' => 'employee-management.holiday.holidays', 'uses' => 'HolidayController@store']);


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
    Route::get('task-board', ['as' => 'projects.task_bord', 'uses' => 'Task_boardController@task_board']);
});
    

/* leads controller */
Route::get('leads', 'LeadsController@index');

/* close */

//* Ticket */
Route::get('tickets', 'TicketsController@index');
/* close Ticket */

/* Performance */
Route::group(["namespace" => 'Performance'], function () {

    Route::get('performance_indicator', ['as' => 'performance.performanceindicator.performance_indicator', 'uses' => 'Performance_indicatorController@index']);
    
    Route::get('performance_review', ['as' => 'performance.performanceReview.performance_review', 'uses' => 'Performance_reviewController@index']);
    Route::get('performance-appraisal', ['as' => 'performance.performanceAppresal.performance_appresal', 'uses' => 'Performance_appresalController@index']);
});

/* close performance */

/* Goals */
Route::group(["namespace" => 'Goal'], function () {

    Route::get('goal-tracking', ['as' => 'Goals.goal_list.goal_list', 'uses' => 'Goal_listController@index']);
    
    Route::get('goal-type', ['as' => 'Goals.goal_type.goal_type', 'uses' => 'Goal_TypeController@index']);
   
});

/* close */

/* Training  */
Route::group(["namespace" => 'Training'], function () {

    Route::get('training', ['as' => 'Training.Training_list.training_list', 'uses' => 'Training_listController@index']);
    
    Route::get('trainers', ['as' => 'Training.Trainers.trainers', 'uses' => 'TrainirseController@index']);
    Route::get('training-type', ['as' => 'Training.Training_Type.training_type', 'uses' => 'Training_typeController@index']);
   
});


/* close Training */
Route::get('promotion', 'PromotionController@promotion');
Route::get('resignation', 'ResignationController@reg');
Route::get('termination', 'TerminationController@termination');


/* profile */

Route::group(["namespace" => 'Profile'], function () {

    Route::get('profile', ['as' => 'profile.clients.clients', 'uses' => 'ClientController@client']);
    
    Route::get('client-profile', ['as' => 'profile.employee.employee_profile', 'uses' => 'Employee_profileController@employee']);
   
   
});
