<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Mail\RegistrationConfirmation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log; // ✅ Tambahkan ini untuk logging

class RegistrationController extends Controller
{
    public function showForm()
    {
        return view('registration.form');
    }

    public function register(Request $request)
    {
        // ✅ Validasi input
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'student_email' => 'required|email|unique:registrations,student_email',
            'password' => 'required|string|min:8|confirmed',
            'birthdate' => 'required|date|before:today',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // ✅ Simpan data ke database
        $registration = Registration::create([
            'full_name' => $request->full_name,
            'student_email' => $request->student_email,
            'password' => Hash::make($request->password),
            'birthdate' => $request->birthdate,
        ]);

        // ✅ Kirim email konfirmasi dengan logging error
        try {
            Mail::to($registration->student_email)
                ->send(new RegistrationConfirmation($registration));

            return redirect()->route('registration.email.sent')
                ->with('success', 'Registration successful! Please check your email for confirmation.');
        } catch (\Exception $e) {
            // ✅ Log error agar tahu kenapa email gagal
            Log::error('Mail sending failed: ' . $e->getMessage());

            // ✅ Pesan peringatan agar pengguna tahu registrasi tetap berhasil
            return redirect()->route('registration.email.sent')
                ->with('warning', 'Registration successful! However, we could not send the confirmation email. Please contact support.');
        }
    }

    public function emailSent()
    {
        return view('registration.email-sent');
    }

    public function showConfirmation($id)
    {
        $registration = Registration::findOrFail($id);
        return view('registration.confirmation', compact('registration'));
    }

    public function confirm($id)
    {
        $registration = Registration::findOrFail($id);
        $registration->update(['is_confirmed' => true]);

        return redirect()->route('registration.success');
    }

    public function success()
    {
        return view('registration.success');
    }
}