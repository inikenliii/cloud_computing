<?php

namespace App\Mail;

use App\Models\Registration;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegistrationConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $registration;
    public $confirmationUrl;

    /**
     * Create a new message instance.
     */
    public function __construct(Registration $registration)
    {
        $this->registration = $registration;
        $this->confirmationUrl = route('registration.confirmation', $registration->id);
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Cloud Computing 2025 - Registration Confirmation')
                    ->from('inikenli@kenley.team6.my.id', 'Cloud Computing 2025') // ✅ pastikan sama dengan MAIL_FROM di .env
                    ->view('emails.registration-confirmation')
                    ->with([
                        'registration' => $this->registration,
                        'confirmationUrl' => $this->confirmationUrl,
                    ]);
    }
}
