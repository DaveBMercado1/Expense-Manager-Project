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

Route::prefix('manage')->group(function () {
    Route::post('user', 'UserManagementControllers\UserManagementController@UserManagementProcess');
    Route::post('role', 'UserManagementControllers\RoleManagementController@RoleManagementProcess');
});

Route::post('expenses', 'ExpenseManagementControllers\ExpensesManagementController@ExpensesManagementProcess');
Route::post('expenses/category', 'ExpenseManagementControllers\CategoryManagementController@CategoryManagementProcess');

