<?php

namespace App\Mail;

use App\Models\QuejasCliente;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResolucionQuejaRechazadaEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(QuejasCliente $quejas)
    {
        $this->quejas = $quejas;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.accioncorrectiva.resolucionQuejaRechazada');
    }
}
