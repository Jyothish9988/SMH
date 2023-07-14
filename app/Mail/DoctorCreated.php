<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class DoctorCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $password;

    /**
     * Create a new message instance.
     *
     * @param  string  $name
     * @param  string  $password
     * @return void
     */
    public function __construct($name, $password)
    {
        $this->name = $name;
        $this->password = $password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
                    $mail = $this->subject('New Doctor')
                    ->view('emails.doctor_created')
                    ->with([
                        'name' => $this->name,
                        'password' => $this->password,
                        
                    ]);
   
                    return $this->subject('Doctor Approval')
                    ->view('emails.doctor_created');
    }
}
