<?php

require_once 'producto.php';

class ProductoElectronico extends Producto{//heredamos la clase abstracta producto para tener todas sus funciones, y asi aplicando el pilar de herencia

    private $garantia;
    public function __construct($nombre, $precio, $garantia) {
        parent::__construct($nombre, $precio);// tengo que reutilizar el metodo constructor de producto
        $this->garantia = $garantia;
    }

//aplico el polimorfismo que en si estamos sobreescribiendo el metodo  info()( y como es abstracta en el padre si o si lo tenemos que implementar)
    public function info(){
        return "Nombre: " . $this->getNombre() . ", Precio: " . $this->getPrecio() . ", Stock: " . $this->getStock() . ", Garantía: " . $this->garantia . ", Tipo: Electrónico";
    }
}