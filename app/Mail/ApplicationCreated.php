<?php

namespace App\Mail;

use App\Models\Application;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;

class ApplicationCreated extends Mailable
{
    use Queueable, SerializesModels;

    public Application $application;

    public function __construct(Application $application)
    {
        $this->application = $application;
    }

    public function build()
    {
        $mail = $this->from('test@example.com', 'Laravel message')
            ->subject('Application Created')
            ->view('emails.application-created');

        if(! is_null($this->application->file_url)){
            $mail->attachFromStorageDisk('public',$this->application->file_url);
        }

        return $mail;
        // ->attachFromStorageDisk('public',$this->application->file_url);
    }
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         from: new Address('test@example.com', 'Laravel Way'),
    //         subject: 'Order Shipped',
    //     );
    // }

    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'emails.application-created',
    //     );
    // }


    // public function attachments(): array
    // {
    //     return $this->application->file;
    // }
}
