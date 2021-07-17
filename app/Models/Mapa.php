<?php

namespace App\Models;

class Mapa
{
    public $sala;
    public $turno;
    public $profissional;
    public $especialidade;
    public $hora;
    public $paciente;
    public $disponivel;

    public function __construct($sala, $turno, $profissional, $especialidade, $hora, $paciente, $disponivel)
    {
        $this->sala = $sala;
        $this->turno = $turno;
        $this->profissional = $profissional;
        $this->especialidade = $especialidade;
        $this->hora = $hora;
        $this->paciente = $paciente;
    }
}