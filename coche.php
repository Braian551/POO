<?php

require_once "vehiculo.php";

class Coche extends Vehiculo{

    public function mover(){
        return "El coche se mueve por la carretera";
    }
}