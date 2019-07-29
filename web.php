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
    return view('student_login');
});

Route::get('/backend', function () {
    return view('admin.admin_login');
});
//adminlogin
route::post('/adminlogin','AdminController@login_dashboard');
route::post('/studentlogin','AdminController@student_dashboard');
route::get('/allstudent','Allstudentscontroller@allstudent')->name('all.student');

//student
route::get('/student_view/{student_id}','Allstudentscontroller@studentview');
route::get('/student_edit/{student_id}','Allstudentscontroller@studentedit');
route::post('/update_student/{student_id}','Allstudentscontroller@studentupdate');
route::delete('/student_delete/{student_id}', 'Allstudentscontroller@destroy')->name('student.destroy');


route::get('/admin_dashboard','AdminController@admin_dashboard');
//addstudent
route::get('/addstudent','Addstudentscontroller@addstudent');
route::post('/save_student','Addstudentscontroller@savestudent');