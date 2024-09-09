<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\StudentSubjectController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('Frontend.home.index');
});


Route::middleware(['auth'])->group(function () {

    Route::get('/dashbord', function () {
        return view('dashbord.index');
    })->name('dashbord.index');

  
    Route::resource('students', StudentController::class);
    Route::resource('classes', ClassController::class);
    Route::resource('subjects', SubjectController::class);
    Route::resource('student_subjects', StudentSubjectController::class);

    
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});


Route::middleware(['guest'])->group(function () {

    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

   
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});
