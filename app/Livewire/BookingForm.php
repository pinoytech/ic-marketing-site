<?php

namespace App\Livewire;

use App\Jobs\SendContactFormEmail;
use Livewire\Component;

class BookingForm extends Component
{
    public $name;

    public $email;

    public $mobile;

    public $company;

    public $position;

    public $employees;

    public $referral;

    public $message;

    public function submit()
    {
        // Handle form submission logic here
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|string|max:20',
            'company' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'employees' => 'required|string',
            'referral' => 'required|string',
            'message' => 'required|string|max:1000',
        ]);

        // Add logic to store the data or send an email here

        // $contactFormEmail = new SendContactFormEmail()->handle();
        SendContactFormEmail::dispatch($this->all());

        session()->flash('success', 'Your booking request has been submitted successfully!');

        // Reset form fields after submission
        $this->reset();

        $this->redirectRoute('booking', navigate: true);
    }

    public function render()
    {
        return view('livewire.booking-form');
    }
}
