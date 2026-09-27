//nombre,altura de tallo, tiene hojas, clima ideal//
<?php

class Planta
{
    protected string $nombre;
    protected string $alturaTallo;
    protected string $tieneHojas;
    protected string $climaIdeal;

    public function __construct(
        string $nombre,
        string $alturaTallo,
        string $tieneHojas,
        string $climaIdeal
    ) {
        $this->nombre = $nombre;
        $this->alturaTallo = $alturaTallo;
        $this->tieneHojas = $tieneHojas;
        $this->climaIdeal = $climaIdeal;
    }

    public function getNombre(): string{
        return $this->nombre;
        }

    public function getAlturaTallo(): string{
        return $this->alturaTallo;
    }

    public function getTieneHojas(): string{
        return $this->tieneHojas;
    }

    public function getClimaIdeal(): string{
        return $this->climaIdeal;
    }
}