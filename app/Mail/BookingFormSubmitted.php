<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class BookingFormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Booking Form Submitted',
            from: new Address('support@infinitcare.co', 'InfinitCare'),
            to: [new Address('support@infinitcare.co', 'InfinitCare')],
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.booking-form-submitted',
            text: 'mail.booking-form-submitted-text',
            with: [
                'fullName' => $this->data['name'],
                'mobileNumber' => $this->data['mobile'],
                'emailAddress' => $this->data['email'],
                'companyName' => $this->data['company'],
                'position' => $this->data['position'],
                'numberOfEmployees' => $this->data['employees'],
                'referralSource' => $this->data['referral'],
                'additionalMessage' => $this->data['message'],
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
