<?php


require_once 'producto.php';
require_once 'inventario.php';
require_once 'electronico.php';
require_once 'alimento.php';
require_once 'videojuego.php';
//incluimos ya todos los archivos para crear los objetos
function mostrarInformacion(Producto $producto){
    echo $producto->info(). "<br>";
}//aqui aplicamos el polimorfismo para imprimir la informacion de algun producto


$inventario = new Inventario();//instanciamos inventario
//ahora se crea los objetos
//con prodductos electronicos
$producto1 = new ProductoElectronico("Celular", 500000, "2 años");
$producto2 = new ProductoElectronico("Laptop", 1000000, "1 año");
$producto3 = new ProductoElectronico("Tablet", 1000000, "6 meses");


//con los alimentos
$producto4 = new ProductoAlimento("Manzana", 2000, "2028/12/31");
$producto5 = new ProductoAlimento("Pan", 3000, "2027/11/30");
$producto6 = new ProductoAlimento("Leche", 5000, "2029/01/15");


//con los videjuegos
$producto7 = new ProductoVideojuego("The Last of Us", 250000, 2020);
$producto8 = new ProductoVideojuego("God of War", 300000, 2018);
$producto9 = new ProductoVideojuego("Spider-Man", 280000, 2018);



//almaceno todos los productos en un array para no tener que repetir $inventario-> y eso entonces solo con agregar la variable
$productos = [$producto1, $producto2, $producto3, $producto4, $producto5, $producto6, $producto7, $producto8, $producto9];

foreach ($productos as $producto) {
    $inventario->agregarProducto($producto);
}//el foreach para que agregue cada producto del array


$producto1->setStock(10);//aplicamos el set para modificar el stock
$producto2->setPrecio(9000000);//aplicamos el set para modificar el precio

mostrarInformacion($producto1);//mostramos la informacion diferente de cada producto para demostrar el polimorfismo
mostrarInformacion($producto4);


$inventario->buscarProducto("Celular");// con solo el nombre buscamos el producto que recibe la funcion buscarProducto
$inventario->listarProductos();//y la funcion para mostrar todos los productos
