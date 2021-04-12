<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CommunicationMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject, $message,$attached = [],$user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject,$message,$attached=[],$user = null)
    {
        $this->subject = $subject;
        $this->message = $message;
        $this->attached = $attached;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $message = $this->markdown('emails.communication');
        $message->subject($this->subject);
        if(count($this->attached) > 0){
            foreach($this->attached as $a)
            {
                $message->attachData($a['data'], $a['name'],[
                    'mime'=>$a['mime']
                ]);
            }
        }

        return $message;
    }
}
