<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CorrectionMail extends Mailable
{
    use Queueable, SerializesModels;
    
    
    
    protected $email;
    protected $fieldsname;
    protected $fieldsvalue;
    protected $fieldscomments;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->email = $data['email'];
        $this->fieldsname = $data['fieldsname'];
        $this->fieldsvalue = $data['fieldsvalue'];
        $this->fieldscomments = $data['fieldscomments'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.correction-email')
                    ->with([
                        'fieldsname' => $this->fieldsname,
                        'email' => $this->email,
                        'fieldsvalue' => $this->fieldsvalue,
                        'fieldscomments' => $this->fieldscomments
                    ]);
    }
}