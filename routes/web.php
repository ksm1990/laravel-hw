<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\JobTitleController;

Route::get('/', function () {
    return view('mainpage');
});

Route::get('/employees',  [EmployeeController::class, 'index'])->name('employees.index');

Route::get('/employees/create', function () {
    return view('createEmployee');
});

Route::resource('employees', EmployeeController::class);

Route::resource('rooms', RoomController::class);

Route::resource('jobtitles', JobTitleController::class);
