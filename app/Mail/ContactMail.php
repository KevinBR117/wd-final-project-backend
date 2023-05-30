<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Mail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $cellphone;
    public $comments;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $cellphone, $comments)
    {
        $this->name = $name;
        $this->cellphone = $cellphone;
        $this->comments = $comments;
    }

    public function build()
    {
        // return $this->subject('Mail from '.$this->mailData->name)
        //             ->view('demoMail');
        return view('demoMail');
    }
    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Mail',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'view.name',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
