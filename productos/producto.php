
<?php
// creo la clase abstracta Producto por lo cual aplicamos el pilar de abstracción
abstract class Producto
{

    //y aqui encapsulamos los productos de tipo private ya con las funciones dentro de la misma clase, y asi usando el pilar de encapsulamiento
    private $nombre; //le doy un nombre al producto
    private $precio; //le doy un precio al producto
    private $stock; //le doy un stock al producto

    //metodo constructor para inicializar las variables
    public function __construct($nombre, $precio)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->stock = 0;
    }



    //Sets para modificar el stock y el precio

    public function setStock($stock)
    {

        if ($stock < 0) {
            echo "El stock no puede ser negativo. <br>";
            return;
        } else {
            $this->stock = $stock;
        }
    }



    public function setPrecio($precio)
    {
        if ($precio < 0) {
            echo "El precio no puede ser negativo. <br>";
            return;
        } else {
            $this->precio = $precio;
        }
    }

    //Gets para el nombre,precio,stock
    public function getNombre()
    {
        return $this->nombre;
    }

    public function getPrecio()
    {
        return $this->precio . " pesos Colombianos";
    }

    public function getStock()
    {
        return $this->stock;
    }

    // un metodo para obtener la informacion del producto
    abstract public function info();
}
