<?php

/* Classe implementada no arquivo Heranca03 */

class Documento {

    private $numero;

    public function getNumero ():bool {

        return $this->numero;

    }

    public function setNumero ($n) {

        $this->numero = $n;
        
    }

}

?>