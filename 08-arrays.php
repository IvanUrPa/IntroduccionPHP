<?php include 'includes/header.php';

$carrito = ['Tablet', 'Television', 'PC'];

// util para ver los contenidos de un array
echo "<pre>";
var_dump($carrito);
echo "</pre>";

// acceder a un elemento del array
echo $carrito[1];
echo "<br>";
echo $carrito[2];

// agregar elementos al arreglo
$carrito[3] = "Nuevo producto...";

// añadir elemento al final
array_push($carrito, "Audifonos");
$carrito[3] = "Nuevo producto...";

// añadir elementos al inicio
array_unshift($carrito, "Diadema");
echo "<pre>";
var_dump($carrito);
echo "</pre>";


// otra forma de declarar array
$clientes = array('Cliente 1', 'Cliente 2', 'Cliente 3');
echo "<pre>";
var_dump($clientes);
echo "</pre>";

include 'includes/footer.php';