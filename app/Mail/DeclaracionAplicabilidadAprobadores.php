<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DeclaracionAplicabilidadAprobadores extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $tipo;
    public $nombre;

    public function __construct($nombre, $tipo)
    {
        $this->tipo = $tipo;
        $this->nombre = $nombre;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('admin.paneldeclaracion.mail.notificacion');
    }
}
