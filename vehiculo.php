<?php

abstract class Vehiculo{
    protected $color;
    protected $marca;
    private $kilometraje;

    public function __construct($marca, $color){
        $this->color = $color;
        $this->marca = $marca;
        $this->kilometraje = 0;
    }
abstract public function mover();
public function GetKilometraje(){
    return $this->kilometraje;
}

public function setKilometraje($km){
    if($km >= 0){
        $this->kilometraje = $km;
    }
    else{
        echo "El kilometraje no puede ser negativo. <br>";
    }
}

}


