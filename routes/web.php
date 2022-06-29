<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\PatientController;
use App\Http\Controllers\doctime\docHomecontroller;

/**
 * Home Route
 */

Route::get('/', [ docHomecontroller::class, 'HomePage' ]) -> name('home.page');
Route::get('/login', [ docHomecontroller::class, 'LoginPage' ]) -> name('login.page');

/**
 * Doctor pages
 */

 Route::get('/doctor-register', [ docHomecontroller::class, 'DoctorRegisterPage' ]) -> name('doctor.reg.page');

 Route::get('/doctor-deshboard', [ docHomecontroller::class, 'DoctorDeshPage' ]) -> name('doctor.desh.page');

/**
 * Patient pages
 */

 Route::get('/patient-register', [ docHomecontroller::class, 'PatientRegisterPage' ]) -> name('patient.reg.page');

 Route::get('/patient-deshboard', [ docHomecontroller::class, 'PatientDeshPage' ]) -> name('patient.desh.page');

 Route::post('/patient-register', [ PatientController::class, 'register' ]) -> name('patient.ragister.page');

 Route::post('/patient-login', [ PatientController::class, 'Login' ]) -> name('patient.login');
