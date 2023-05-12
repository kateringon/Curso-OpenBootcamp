<?php

require_once ('poo.php');

$z1 = new Zapato();

$z1 ->crearZapatos(35, 'Si', 'Marron', 'Lona');

echo 'El color del zapato es ' . $z1->getColor();
$z1->setcolor ('Verde');
echo '<br> El color del zapato es ' . $z1 ->getColor();
$z1->setcolor ('Verde');

echo '<br> El material del zapato es ' . $z1->getmaterial();
$z1->setmaterial ('Algodon');
echo '<br> El material del zapato es ' . $z1->getmaterial();
$z1->setmaterial ('Algodon');

echo '<br> La talla del zapato es ' . $z1->gettalla();
$z1->settalla ('45');
echo '<br> La talla del zapato es ' . $z1->gettalla();
$z1->settalla ('45');

echo '<br> El zapato tiene cordones? => ' . $z1->getcordones();
$z1->setcordones ('No');
echo '<br> El zapato tiene cordones? => ' . $z1->getcordones();
$z1->setcordones ('No');






//var_dump($z1);

?>