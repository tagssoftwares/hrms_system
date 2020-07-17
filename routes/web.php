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
Route::get('/', 'Admin\AdminController@index');
Route::group(["namespace" => 'Admin', "prefix" => "admin"], function () {
	//Route::get('/', ['as' => 'admin.getlogin', 'uses' => 'AdminController@index']);
	//Route::post('login', ['as' => 'users.login', 'uses' => 'AdminController@admin_login']);
});
Route::get('dashboard', 'UserController@dashboard')->name('dashboard');

Route::post('admin_login', 'Admin\AdminController@admin_login');
Route::get('logout', 'Admin\AdminController@logout');

Route::get('userlist', 'Admin\UserController@index');
Route::get('userform', 'Admin\UserController@view_create_form');

Route::get('rolelist', 'Admin\RoleController@index');
Route::get('roleform', 'Admin\RoleController@view_role_form');