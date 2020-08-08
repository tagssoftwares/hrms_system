
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
//     return view('users.login');
//  });
Route::get('/', 'Employee\LoginController@index');
Route::get('employee-dashboard', 'Employee\LoginController@Login');
Route::get('login-admin', 'Admin\AdminController@index');
Route::group(["namespace" => 'Admin', "prefix" => "admin"], function () {
	//Route::get('/', ['as' => 'admin.getlogin', 'uses' => 'AdminController@index']);
	//Route::post('login', ['as' => 'users.login', 'uses' => 'AdminController@admin_login']);
});
//Route::get('dashboard', 'UserController@dashboard')->name('dashboard');

Route::get('admin_login', 'Admin\AdminController@admin_login');
Route::get('logout', 'Admin\AdminController@logout');

Route::get('userlist', 'Admin\UserController@index');
Route::get('myform/ajax/{id}','Admin\UserController@myformAjax');
Route::post('user-create', 'Admin\UserController@create_user');

Route::get('rolelist', 'Admin\RoleController@index');
//Route::get('roleform', 'Admin\RoleController@view_role_form');
Route::post('create_role', 'Admin\RoleController@create_role');

//     return view('welcome');
// });



Route::get('clients', ['as' => 'employee-management.Client.client', 'uses' => 'ClientController@index']);
Route::POST('clients/store', ['as' => 'employee-management.Client.client', 'uses' => 'ClientController@store']);



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
    Route::POST('designation/store', ['as' => 'employee-management.designation.designation', 'uses' => 'DesignationController@store']);
    Route::get('designations', ['as' => 'employee-management.designation.designation', 'uses' => 'DesignationController@index']);
    Route::get('designations', ['as' => 'employee-management.designation.designation', 'uses' => 'DesignationController@index']);
    Route::POST('designation/store', ['as' => 'employee-management.designation.designation', 'uses' => 'DesignationController@store']);
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
    Route::POST('goals/store', ['as' => 'Goals.goal_type.goal_type', 'uses' => 'Goal_TypeController@store']);
    Route::get('changeStatus', ['as' => 'Goals.goal_list.goal_list', 'uses' => 'Goal_TypeController@index']);
   
});

/* close */

/* Training  */
Route::group(["namespace" => 'Training'], function () {

    Route::get('training', ['as' => 'Training.Training_list.training_list', 'uses' => 'Training_listController@index']);
    
    Route::get('trainers', ['as' => 'Training.Trainers.trainers', 'uses' => 'TrainirseController@index']);
    Route::get('training-type', ['as' => 'Training.Training_Type.training_type', 'uses' => 'Training_typeController@index']);
   
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


// Account

Route::group(["namespace" => 'Accounts'], function () {

    Route::get('estimates', ['as' => 'accounts.estimates.estimates', 'uses' => 'AccountController@index']);
    Route::get('create-estimate', ['as' => 'accounts.estimates.create-estimate', 'uses' => 'AccountController@create']);
});

Route::group(["namespace" => 'Accounts'], function () {

    Route::get('invoices', ['as' => 'accounts.invoices.invoices', 'uses' => 'InvoicesController@index']);
    Route::get('create-invoices', ['as' => 'accounts.invoices.create-invoices', 'uses' => 'InvoicesController@create']);
});
    
route::group(["namespace" => 'Accounts'], function () {

    route::get('payments', ['as' => 'accounts.payments.payments', 'uses' => 'PaymentsController@index']);
});

route::group(["namespace" => 'Accounts'], function () {

    route::get('expenses', ['as' => 'accounts.expenses.expenses', 'uses' => 'ExpensesController@index']);
});

route::group(["namespace" => 'Accounts'], function () {

    route::get('providendfund', ['as' => 'accounts.providendfund.providendfund', 'uses' => 'ProvidendfundController@index']);
});

route::group(["namespace" => 'Accounts'], function () {

    route::get('taxes', ['as' => 'accounts.taxes.taxes', 'uses' => 'TaxesController@index']);
});

// payroll

Route::group(["namespace" => 'Payroll'], function () {

    Route::get('employee-salary', ['as' => 'payroll.employee-salary.employee-salary', 'uses' => 'EmployeesalaryController@index']);
    Route::get('payslip', ['as' => 'payroll.payslip.payslip', 'uses' => 'PayslipController@index']);
    Route::get('payrollitems', ['as' => 'payroll.payrollitems.payrollitems', 'uses' => 'PayrollitemsController@index']);
    
});

// Policies
Route::group(["namespace" => 'Policies'], function () {

    Route::get('policies', ['as' => 'policies.policies', 'uses' => 'PoliciesController@index']);

});

// Reports

Route::group(["namespace" => 'Report'], function () {

    Route::get('expensereport', ['as' => 'report.expensereport.expensereport', 'uses' => 'ExpensereportController@index']);
    Route::get('invoicereport', ['as' => 'report.invoicereport.invoicereport', 'uses' => 'InvoicereportController@index']);
});

// Administration

Route::group(["namespace" => 'Administration'], function () {

    Route::get('setting', ['as' => 'administration.setting', 'uses' => 'SettingController@index']);
    Route::get('setting', ['as' => 'administration.setting', 'uses' => 'SettingController@index']);
   
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
