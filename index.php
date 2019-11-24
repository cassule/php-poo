<?php

require_once __DIR__ . "/class/metodos-estaticos.php";

$cpf = new Doc();

$cpf->setNumero("87988389033");

var_dump($cpf->getNumero());


?>