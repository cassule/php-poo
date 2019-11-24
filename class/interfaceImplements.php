<?php

require_once "interface.php";

class Civic implements Veiculo {

    public function acelerar ($velocidade)
    {
        echo "O acarro acelerou " . $velocidade . " km/h";
    }

    public function travar ($velocidade)
    {
        echo "O acarro travou " . $velocidade . " km/h";
    }

    public function trocarMarcha ($marcha)
    {
        echo "O acarro foi para marcha " . $marcha;
    }

}

?>