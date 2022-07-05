<?php

namespace eightbityard\Contact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
  
    public $email;
    public $subject;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email,$subject)
    {
        $this->email   = $email;
        $this->subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('contact::contact.email')->with([
            'email'   => $this->email,
            'message' => $this->subject
        ]);
    }
}
