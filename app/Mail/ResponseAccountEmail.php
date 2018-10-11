<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ResponseAccountEmail extends Mailable
{
    use Queueable, SerializesModels;


public $sendInfo;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($sendInfo)
    {
        $this->sendInfo=$sendInfo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('system.messages.activateAccount')->subject("Activar cuenta");
    }
}
