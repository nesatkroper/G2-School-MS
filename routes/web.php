<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('sub', 'App\Http\Controllers\SubjectController');
Route::put('sub/{put}/change', [App\Http\Controllers\SubjectController::class, 'change'])->name('sub.change');
