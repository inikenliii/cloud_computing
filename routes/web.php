<?php

use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RegistrationController::class, 'showForm'])->name('registration.form');
Route::post('/register', [RegistrationController::class, 'register'])->name('registration.submit');
Route::get('/email-sent', [RegistrationController::class, 'emailSent'])->name('registration.email.sent');
Route::get('/confirmation/{id}', [RegistrationController::class, 'showConfirmation'])->name('registration.confirmation');
Route::post('/confirm/{id}', [RegistrationController::class, 'confirm'])->name('registration.confirm');
Route::get('/success', [RegistrationController::class, 'success'])->name('registration.success');