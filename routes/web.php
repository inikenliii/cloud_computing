<?php

use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegistrationConfirmation;
use App\Models\Registration;

Route::get('/', [RegistrationController::class, 'showForm'])->name('registration.form');
Route::post('/register', [RegistrationController::class, 'register'])->name('registration.submit');
Route::get('/email-sent', [RegistrationController::class, 'emailSent'])->name('registration.email.sent');
Route::get('/confirmation/{id}', [RegistrationController::class, 'showConfirmation'])->name('registration.confirmation');
Route::post('/confirm/{id}', [RegistrationController::class, 'confirm'])->name('registration.confirm');
Route::get('/success', [RegistrationController::class, 'success'])->name('registration.success');

Route::get('/test-mail', function () {
    try {
        $reg = \App\Models\Registration::first();
        if (!$reg) {
            return '⚠️ Tidak ada data di tabel registrations.';
        }

        Mail::to('kjonathan07@student.ciputra.ac.id')->send(new RegistrationConfirmation($reg));
        return '✅ Test email terkirim — periksa inbox/spam.';
    } catch (\Exception $e) {
        return '❌ Gagal kirim email: ' . $e->getMessage();
    }
});