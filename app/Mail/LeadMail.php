<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class LeadMail extends Mailable
{
    public $lead;

    public function __construct($lead)
    {
        $this->lead = $lead;
    }

    public function build()
    {
        return $this->subject('Novo Lead de Contato')
                    ->view('emails.lead')
                    ->with([
                        'lead' => $this->lead,
                    ]);
    }
}
