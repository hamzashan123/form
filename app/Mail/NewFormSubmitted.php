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
    protected $surname;
    protected $email;
    protected $admin;
    public $subject;
    protected $consultant;
    
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->messagetype = $data['messagetype'];
        $this->username = $data['username'];
        $this->surname = $data['surname'];
        $this->email = $data['email'];
        $this->subject = isset($data['subject']) ? $data['subject'] : 'Application Form';
        $this->admin = $data['admin'];
        $this->consultant = $data['consultant'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.newformsubmitted')
        ->subject(ucfirst($this->surname) .' - '.ucfirst($this->subject))
            ->with([
                    'messagetype' => $this->messagetype,
                    'username' => $this->username,
                    'surname' => $this->surname,
                    'email' => $this->email,
                    'admin' => $this->admin,
                    'consultant' => $this->consultant,
                    
                ]);
    }
}
