<?php
require_once 'producto.php';
class inventario{ // una clase para manejar el inventario
    private $productos=[]; //Creamos un array para almacenar los productos que se van agregar desde agregarProducto y no al instanciarlo

    public function agregarProducto(Producto $producto) { //funcion para agregar el producto y que se almacenara en el array y con la condicion que debe ser instancia de Producto o algun heredero
        
        $this->productos[] = $producto;
    }


    public function listarProductos() { //aqui listamos los productos


        if($this->productos == null){ //en el cual si no hay ningun producto en el array es decir que retorne null entonces nos dara un mensaje
            echo "No hay productos en el inventario.<br>";
        }else{
            echo "Productos en el inventario:<br>"; // sino mostrara los producos


            foreach ($this->productos as $producto) { //aplicando foreach para recorra cada producto almacenado en el array e imprimirlo
                echo $producto->info() . "<br>";
            }
        }
    }
    
    

    public function buscarProducto($nombre) { //creamos una funcion para buscar un producto el cual recibe un parametro de nombre
        foreach ($this->productos as $producto) { // con el foreach va a recorrer cada producto del array
            if ($producto->getNombre() == $nombre) { // y el cual con la funcion que se definio de getnombre va a comparar con el parametro 
                echo "Producto encontrado: " . $producto->info() . "<br>"; // si lo encuentra lo imprime
                return $producto;
            }else{
                echo "Producto no encontrado.<br>";//sino devuelve un mensaje
            }
        }
        
       
    }


}