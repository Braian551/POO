<?php

require_once "vehiculo.php";

class Moto extends Vehiculo{

    public function mover(){
        return "La moto se desplaza sobre dos ruedas";
    }
}