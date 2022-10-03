<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewFormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    protected $messagetype;
    protected $username;
    protected $email;
    
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->messagetype = $data['messagetype'];
        $this->username = $data['username'];
        $this->email = $data['email'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.newformsubmitted')
        ->subject('New Application Recieved !')
            ->with([
                    'messagetype' => $this->messagetype,
                    'username' => $this->username,
                    'email' => $this->email,
                ]);
    }
}
