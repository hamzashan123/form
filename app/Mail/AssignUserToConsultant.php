<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AssignUserToConsultant extends Mailable
{
    use Queueable, SerializesModels;


    protected $username;
    protected $email;
    protected $usertype;
    protected $messagetype;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->username = $data['username'];
        $this->email = $data['email'];
        $this->usertype = $data['usertype'];
        $this->messagetype = $data['messagetype'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.AssignUserToConsultant')
        ->with([
                'username' => $this->username,
                'email' => $this->email,
                'usertype' => $this->usertype,
                'messagetype' => $this->messagetype
            ]);
    }
}