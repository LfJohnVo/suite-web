<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Empleado;
use App\Models\Timesheet;

class TimesheetSolicitudRechazada extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $rechazar;
    public $aprobador;
    public $solicitante;

    public function __construct(Empleado $aprobador, Timesheet $rechazar, Empleado $solicitante)
    {
        $this->rechazar = $rechazar;
        $this->aprobador = $aprobador;
        $this->solicitante = $solicitante;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.timesheet.timesheet_solicitud_rechazada');
    }
}
