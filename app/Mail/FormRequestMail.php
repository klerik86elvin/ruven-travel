<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class FormRequestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;
    public $view;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details, $view)
    {
        $this->details = $details;
        $this->view = $view;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function build()
    {
        return $this->view('mails.'.$this->view);
    }
}
