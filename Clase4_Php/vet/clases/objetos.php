<?php
include_once ("Cliente.php");
//Construccion de un objeto (INSTANCIANDO UN OBJETO) La instancia es la unidad que deriva de la creaacuion de un objeto
$cliente1 = new Cliente();
$cliente2 = new Cliente();

$cliente1->setNombre("Gabriela");
$cliente1->setDni(1231234);

var_dump($cliente1->getNombre());echo "<br>";
var_dump($cliente1->getDni());echo "<br>";
var_dump($cliente1->getMascota());echo "<br>";

$cliente1->setMascota('Gato');
$cliente2->setMascota("perro");

var_dump($cliente1->getMascota());echo "<br>";
var_dump($cliente2->getMascota());echo "<br>";

//var_dump($cliente1);echo "<br>";
//var_dump($cliente2);