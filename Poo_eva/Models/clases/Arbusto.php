<?php
require_once "Planta.php";

class Arbusto extends Planta
{
     private string $anchoArbusto;
    private string $esDomestico;
    private string $variedadArbusto;
    private string $colorHojas;
    private string $sePoda;

    public function __construct(
        string $nombre,
        string $alturaTallo,
        string $tieneHojas,
        string $climaIdeal,
        string $anchoArbusto,
        string $esDomestico,
        string $variedadArbusto,
        string $colorHojas,
        string $sePoda
    ) {
        parent::__construct(
            $nombre,
            $alturaTallo,
            $tieneHojas,
            $climaIdeal
        );

        $this-> anchoArbusto = $anchoArbusto;
        $this->esDomestico = $esDomestico;
        $this->variedadArbustos = $variedadArbustos;
        $this->colorHojas = $colorHojas;
        $this->sePoda = $sePoda;

    }
     public function mostrarMensaje(): void
    {
        echo "Hola, soy un árbol<br>";
    }  
}