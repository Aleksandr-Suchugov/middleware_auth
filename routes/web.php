<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GroupStudentController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::group(['middleware' => 'auth'], function () {

    Route::resource('groups', GroupController::class);
    Route::resource('students', StudentController::class);
    Route::resource('groups.students', GroupStudentController::class);

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
