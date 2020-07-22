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


