<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ProfileConfirmation extends Mailable
{
    use Queueable, SerializesModels;
    public $mailInfo;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailInfo)
    {
        $this->mailInfo=$mailInfo;
        var_dump($this->mailInfo=$mailInfo);
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
         return $this->from('mydesignteam4@gmail.com')->subject($this->mailInfo['subject'])->view('emails.profileConfirmation');
    }
}
