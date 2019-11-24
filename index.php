<?php

require_once __DIR__ . "/class/heranca03.php";

$doc =  new CPF();

$doc->setNumero("22930-2930");

var_dump($doc->validarCPF());

?>