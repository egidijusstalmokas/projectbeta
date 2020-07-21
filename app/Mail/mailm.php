<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class mailm extends Mailable
{
    use Queueable, SerializesModels;


   public $mailm;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailm)
    {
        $this->mailm = $mailm;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Laiškas nuo N-WEB.lt')->view('mails.mailm');
    }}

