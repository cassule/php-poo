<?php

require_once "encapsulamento.php";

class Programador extends Pessoa {

    public function verDados () {

        echo get_class($this). "<br>";# mostrar que metodo esta sendo executado

        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";

    }

}

?>