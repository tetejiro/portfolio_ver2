<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendErrorMail extends Mailable
{
    use Queueable, SerializesModels;

    public $error;
    public $path;

    /**
     * Create a new message instance.
     */
    public function __construct($error, $path)
    {
        $this->error = $error;
        $this->path = $path;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'エラー自動メール送信',
        );
    }

    public function build()
    {
        return $this->from('test@test.com', 'Example')
                ->view('emails.errorEmail')
                ->to('higashiyuki5@gmail.com');
    }
}
