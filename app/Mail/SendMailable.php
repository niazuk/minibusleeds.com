<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class SendMailable extends Mailable
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
            ->to($this->data['email'])
            ->with('data', $this->data)
            ->subject("Customer Message - ".config('data.meta.sitename'));
    }
}
