<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class FeedbackMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $input;

    public function __construct($input)
    {
        $this->input = $input;
    }

    public function build()
    {
        return $this->view('mails.mail')
        ->from(['address' => env('MAIL_FROM')])
        ->with(['data' => $this->input])
        ->subject('Письмо с блога');
    }
}
