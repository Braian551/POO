<?php

require_once "coche.php";
require_once "moto.php";


// funcion para mostrar poliformismo
function mostrarMovimiento(Vehiculo $vehiculo){
    echo $vehiculo->mover(). "<br>";
}

$coche = new Coche("Toyota", "Rojo");
$moto = new Moto("Honda", "Negro");

$coche->setKilometraje(15000);
$moto->setKilometraje(5000);

echo $coche->info() . "<br>";
echo $moto->info() . "<br><br>";

mostrarMovimiento($coche);
mostrarMovimiento($moto);