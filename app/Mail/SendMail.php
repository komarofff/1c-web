<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;


    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if($this->details['file'] !='') {
            return $this->subject('Mail from  1c-web.by')
                ->view('mail.sendMail')
                ->attach(base_path() . '/storage/app/public/mail-attachments/' . $this->details['file']);//->attach('public/mail-attachments/'.$file);
        } else {
            return $this->subject('Mail from  1c-web.by')
                ->view('mail.sendMail');
        }
    }
}
