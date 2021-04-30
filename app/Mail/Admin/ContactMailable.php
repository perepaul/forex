<?php

namespace App\Mail\Admin;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $email,$Sender_name,$subjectInfo,$question;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->email = $data['email'];
        $this->Sender_name = $data['name'];
        $this->subjectInfo = $data['subject'];
        $this->question = $data['message'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->email,$this->Sender_name)->markdown('emails.admin.contact')->subject($this->subjectInfo);
    }
}
