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
    return view('app_home');
});

Route::get('/ajax_view_employees','EmployeeController@show');
Route::get('/ajax_new_employee','EmployeeController@add');
Route::post('/ajax_store_employee','EmployeeController@store');
Route::delete('/ajax_delete_record','EmployeeController@delete');
Route::get('/ajax_edit_record','EmployeeController@edit');
Route::put('/ajax_update_record','EmployeeController@update');
Route::get('/ajax_contact_us','EmployeeController@contact');
Route::get('/ajax_team','EmployeeController@team');
