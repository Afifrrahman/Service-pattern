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

// Hanya bisa diakses jika sudah login
Route::middleware(['auth'])->group(function () {
    // Dashbord
    Route::get('/dashbord', function () {
        return view('dashbord.index');
    })->name('dashbord.index');

    // Resource routes untuk akses setelah login
    Route::resource('students', StudentController::class);
    Route::resource('classes', ClassController::class);
    Route::resource('subjects', SubjectController::class);
    Route::resource('student_subjects', StudentSubjectController::class);

    // Logout route
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Hanya bisa diakses jika belum login
Route::middleware(['guest'])->group(function () {
    // Login routes
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    // Register routes
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});
