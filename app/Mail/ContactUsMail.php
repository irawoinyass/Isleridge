<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactUsMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $name,$phone_no, $msg,$msg_subject, $type)
    {
         $this->name = $name;
        $this->email = $email;
        $this->type = $type;
        $this->phone_no = $phone_no;
        $this->msg = $msg;
        $this->msg_subject = $msg_subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       return $this->from('info@isleridge.com','Isleridge')->subject($this->msg_subject)->markdown('contactusmail')->with(['email'=>$this->email,'name' => $this->name, 'type' => $this->type, 'phone_no' => $this->phone_no, 'msg' => $this->msg, 'msg_subject' => $this->msg_subject]);
    }
}
