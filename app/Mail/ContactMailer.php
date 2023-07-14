<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ContactMailer extends Mailable
{
    use Queueable, SerializesModels;

    public $reply;
    public $messagee;
    public $name;

    /**
     * Create a new message instance.
     *
     * @param  string  $reply
     * @param  string  $message
     * @param  string  $name
     * @return void
     */
    public function __construct($reply, $messagee, $name)
    {
        $this->reply = $reply;
        $this->messagee = $messagee;
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Eshopify Enquiry')
                    ->view('emails.contact')
                    ->with([
                        'name' => $this->name,
                        'messagee' => $this->messagee,
                        'reply' => $this->reply,
                    ]);
    }
 
    


    
}