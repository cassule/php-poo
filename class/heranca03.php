<?php

require_once "heranca02.php";

class CPF extends Documento {

    public function validarCPF () {

        $numeroCPF = $this->getNumero();

        return true;

    }
}

?>