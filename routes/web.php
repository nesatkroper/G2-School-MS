<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('sub', 'App\Http\Controllers\SubjectController');
Route::put('sub/{put}/change', [App\Http\Controllers\SubjectController::class, 'change'])->name('sub.change');

// ---------------Staff------------------//

Route::get('/create',function(){
    return view('staff.create');
});

Route::get('/edit',function(){
    return view('staff.edit');
});

// ---------------Attendace------------------//
Route::get('/atttendace',function(){
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


