<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;


// 報連相を送るメール
class SendReportMail extends Mailable
{
    use Queueable, SerializesModels;

    public $request;
    public $user_name;
    public $target_user;

    /**
     * Create a new message instance.
     */
    public function __construct($request)
    {
        $this->request = $request;

        $user = DB::table('Users')->select('name')->where('id', $this->request->user_id)->get();
        $this->user_name = $user[0]->name;
        $this->target_user = User::select('name', 'email')->where('id', $this->request->target_user_id)->get();
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        if($this->request->is_question) {
            $title = $this->user_name.' さんから質問が来ました。';
        } else {
            $title = $this->user_name.' さんから報連相がありました。';
        }

        return new Envelope(
            subject: $title,
        );
    }

    /**
     * メッセージの作成
     *
     * @return $this
     */
    public function build()
    {
        if($this->request->is_question) {
            $path = 'emails.questionEmail';
        } else {
            $path = 'emails.reportEmail';
        }

        return $this->from('test@test.com', 'Example')
                    ->view($path)
                    ->to($this->target_user[0]['email'], $this->target_user[0]['name']);
    }
}
