<?php

namespace App\Jobs;

use App\Mail\BookingFormSubmitted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Mail;

class SendContactFormEmail implements ShouldQueue
{
    use Queueable;

    public $tries = 3;

    // public $backoff = 2;
    public $backoff = [2, 3];

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::send(new BookingFormSubmitted);
        // sleep(3);
        // echo 'Hello!';
    }
}
