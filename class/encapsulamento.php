<?php

class Pessoa {

    public $nome = "Ramos Lardorf";
    protected $idade = 50;
    private $senha = "12345";

    public function verDados () {

        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";

    }

}

?>