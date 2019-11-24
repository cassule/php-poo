<?php

require_once __DIR__ . "/class/atributos-metodos.php";

$c = new Carro();

$c->setModelo("Ford");

$c->setMotor("1.6");

$c->setAno("2000");

var_dump($c->exibir());


?>