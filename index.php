<?php

require_once __DIR__ . "/class/polimorfismo.php";

$pluto = new Cachorro();

echo $pluto->falar() . "<br>";
echo $pluto->mover(). "<br>";

echo "______________________ <br><br><br>";

$garfild = new Gato();

echo $garfild->falar() . "<br>";
echo $garfild->mover(). "<br>";

echo "______________________ <br><br><br>";

$ave = new Passaro();

echo $ave->falar() . "<br>";
echo $ave->mover(). "<br>";

echo "______________________ <br><br><br>";

?>