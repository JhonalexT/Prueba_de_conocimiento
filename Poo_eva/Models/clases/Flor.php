//color de petalos, cantidad promedio de petalos, color del pistillo,variedad de la flor,estacion en la que florece
<?php

require_once "Planta.php";

class Flor extends Planta
{
    private string $colorPetalos;
    private int $cantidadPetalos;
    private string $colorPistilo;
    private string $variedadFlor;
    private string $estacionFlorece;

    public function __construct(
        string $nombre,
        float $alturaTallo,
        string $tieneHojas,
        string $climaIdeal,
        string $colorPetalos,
        int $cantidadPetalos,
        string $colorPistilo,
        string $variedadFlor,
        string $estacionFlorece
    ) {
        parent::__construct(
            $nombre,
            $alturaTallo,
            $tieneHojas,
            $climaIdeal
        );

        $this->colorPetalos = $colorPetalos;
        $this->cantidadPetalos = $cantidadPetalos;
        $this->colorPistilo = $colorPistilo;
        $this->variedadFlor = $variedadFlor;
        $this->estacionFlorece = $estacionFlorece;
    }

    public function mostrarMensaje(): void
    {
        echo "Hola, soy una flor<br>";
    }
}