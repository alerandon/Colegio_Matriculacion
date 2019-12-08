<?php

namespace App\Mail;

use App\notas;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ListaNotas extends Mailable
{
    use Queueable, SerializesModels;

    public $notas;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(notas $notas)
    {
        $this->notas = $notas;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('prof.ver_notas.correo');
    }
}
