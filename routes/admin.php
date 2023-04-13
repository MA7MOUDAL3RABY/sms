<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.dashboard');
})->name('dashboard-show');

Route::resource('grades', 'GradeController');
Route::resource('classrooms', 'ClassroomController');
