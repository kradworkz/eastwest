<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendForm extends Mailable
{
    use Queueable, SerializesModels;

    protected $name, $message;

    public function __construct($name = null, $message = null )
    {
        $this->name = $name;
        $this->message = $message;
    }

    public function build()
    {
        return $this->view('views.form')->with('name',$this->name)->with('body',$this->message);
    }
}
