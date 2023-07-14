<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class BookingMailer extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
   
    /**
     * Create a new message instance.
     *
     * @return void
     */


   public function __construct($name)
{
    $this->name = $name;
   
  
}

public function build()
{
    $mail = $this->subject('Booking')
                 ->view('emails.booking')
                 ->with([
                     'name' => $this->name,
                     
                     
                 ]);

                 return $this->subject('Booking Mailer')
                 ->view('emails.booking');
}

    
    



    
}




