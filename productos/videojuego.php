<?php

require_once 'producto.php';

class ProductoVideojuego extends Producto{ //heredamos la clase abstracta producto para tener todas sus funciones, y asi aplicando el pilar de herencia

    private $añolanza;
    public function __construct($nombre, $precio, $añolanza) {
        parent::__construct($nombre, $precio);// tengo que reutilizar el metodo constructor de producto
        $this->añolanza = $añolanza;
    }

    

//aplico el polimorfismo que en si estamos sobreescribiendo el metodo  info()( y como es abstracta en el padre si o si lo tenemos que implementar)
    public function info(){
        return "Nombre: " . $this->getNombre() . ", Precio: " . $this->getPrecio() . ", Stock: " . $this->getStock() . ", Año de Lanzamiento: " . $this->añolanza . ", Tipo: Videojuego";
    }
}