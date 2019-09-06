<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class SendMailableServer extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->data = $request->all();
        $this->data['message'] = str_replace("\r","\n",$this->data['message']);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.customer_confirmation')
            ->from(config('data.meta.contact_email'))
            ->to(config('data.meta.contact_email'), config('mail.from.name'))
            ->with('data', $this->data)
            ->subject("Query Confirmation - ".config('data.meta.sitename'));
    }
}
