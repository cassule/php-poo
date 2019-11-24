<?php

class Endereco {

    private $pais;
    private $cidade;
    private $bairro;

    public function __construct ($a, $b, $c) {

        $this->pais = $a;
        $this->cidade = $b;
        $this->bairro = $c;

    }

    public function __toString () {

        return $this->pais . ", " . $this->cidade . ", " . $this->bairro;

    }

    public function __destruct () {

        var_dump("DESTRUCT");

    }

    
}

?>