<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', 'HomeController@index')->name('home');
//register user as admin
Route::get('register-user','HomeController@registrationIndex');
Route::post('create-user-account','HomeController@createUserAccount');

// main controller
Route::get('dashboard', 'MainController@dashboard');
Route::get('admin/assign-privilege-index', 'MainController@AssignPrivilegeIndex');
Route::get('admin/assign-privilege-form', 'MainController@AssignPrivilegeForm');
Route::post('admin/assign-privilege', 'MainController@AssignPrivilege');
Route::post('admin/get-user-roles', 'MainController@getUserRoles')->name('get.user.roles');
Route::get('admin/user-accounts-index', 'MainController@UserAccountsIndex');
Route::post('admin/register-user', 'MainController@RegisterUser');


//Reset User Password Route Start
Route::get('admin/reset-password', 'MainController@resetPasswordIndex');
Route::post('reset-password', 'MainController@resetPassword');

//Change User Password
Route::get('change-password-index', 'MainController@changePasswordIndex');
Route::post('change-password', 'MainController@changePassword');


Route::post('/submit-word','TestController@getMessage');
Route::get('/message-content/{message}','TestController@readMessage')->name('message.content');
