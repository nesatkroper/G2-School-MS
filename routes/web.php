<?php
use Illuminate\Support\Facades\Route;
// ---------------Login------------------//
Route::get('/',function(){
    return view('auth.login');
});
Route::get('/dashboard', function () {
    return view('dashboard.index');
});
// ---------------Staff------------------//
Route::get('/create',function(){
    return view('staff.create');
});
Route::get('/edit',function(){
    return view('staff.edit');
});
// ---------------Attendace------------------//
Route::get('/attendance',function(){
    return view('attendance.index');
});
// --------------Teacher------------------//
Route::get('/allteacher',function(){
    return view('teacher.allteacher');
});
Route::get('/teacherdetails',function(){
    return view('teacher.teacherdetails');
});
Route::get('/addteacher',function(){
    return view('teacher.addteacher');
});
//----------------student--------------------//
Route::get('/addstudent', function () {
    return view('students.addstudent');
});
Route::get('/allstudent', function (){
    return view('students.allstudent');
});
Route::get('/studentdetail', function(){
    return view('students.studentdetail');
});
// -----------books------------------------//
Route::get('/allbook', function(){
    return view('books.allbook');
});
Route::get('/addbook', function(){
    return view('books.addbook');
});
// -----------Class------------------------//
Route::get('/allclass', function(){
    return view('class.allclass');
});
Route::get('/addclass', function(){
    return view('class.addclass');
});