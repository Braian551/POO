
<?php
// creo la clase abstracta Producto
abstract class Producto {
    protected $nombre; //le doy un nombre al producto
    protected $precio; //le doy un precio al producto
    private $stock; //le doy un stock al producto

    //metodo constructor
    public function __construct($nombre, $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->stock = 0;
    }
    // un metodo para obtener la informacion del producto
    abstract public function info();
}
