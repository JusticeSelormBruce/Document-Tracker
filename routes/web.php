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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('dashboard', 'AdminController@Dashboard');

//Admin Route Start

Route::get('admin/role-index', 'AdminController@RoleIndex');
Route::post('admin/add-role', 'AdminController@AddRole');
Route::patch('admin/edit-role', 'AdminController@EditRole');

Route::get('admin/department-index', 'AdminController@DepartmentIndex');
Route::post('admin/add-department', 'AdminController@AddDepartment');
Route::patch('admin/edit-department', 'AdminController@EditDepartment');

Route::get('admin/assign-privilege-index', 'AdminController@AssignPrivilegeIndex');
Route::get('admin/assign-privilege-form', 'AdminController@AssignPrivilegeForm');
Route::post('admin/assign-privilege', 'AdminController@AssignPrivilege');
Route::post('admin/get-user-roles', 'AdminController@getUserRoles')->name('get.user.roles');


Route::get('admin/user-accounts-index', 'AdminController@UserAccountsIndex');
Route::post('admin/register-user', 'AdminController@RegisterUser');

Route::get('admin/offices-index', 'AdminController@OfficesIndex');
Route::post('/admin/add-office', 'AdminController@AddOffice');
//Admin Route End

//Incoming  Route Start
Route::get('/incoming-index', 'AdminController@IncomingIndex');
Route::post('save-incoming', 'AdminController@SaveIncoming');
//Route incoming end

//Dispatch  Route Start
Route::get('/dispatch-index', 'AdminController@DispatchIndex');
Route::post('save-dispatch', 'AdminController@SaveDispatch');
Route::get('decision-board','AdminController@DecisionBoard');
Route::post('check-details','AdminController@checkMemoAvailability');
Route::get('dispatch-form','AdminController@dispatchForm');
//Dispatch incoming end


//tracking route start
Route::get('tracking-index', 'AdminController@tackingIndex');
Route::get('tack-file', 'AdminController@searchFile')->name('track');

//Reset User Password Route Start
Route::get('admin/reset-password', 'AdminController@resetPasswordIndex');
Route::post('reset-password','AdminController@resetPassword');

//Change User Password
Route::get('change-password-index','AdminController@changePasswordIndex');
Route::post('change-password','AdminController@changePassword');

