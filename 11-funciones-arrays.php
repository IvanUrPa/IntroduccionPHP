<?php include 'includes/header.php';


// in_array - buscar elementos en un arreglo
$carrito = ['Tablet', 'PC', 'Smartwatch'];

var_dump(in_array('Smartphone', $carrito));
echo "<br>";
var_dump(in_array('Tablet', $carrito));

// ordenar elementos de un arreglo
$numeros = array(2,8,9,7,4,3,6);
sort($numeros); // de menor a mayor
echo "<pre>";
var_dump($numeros);
echo "<br>";

rsort($numeros); // de mayor a menor
echo "<pre>";
var_dump($numeros);
echo "<br>";


// ordenar arreglos
$cliente = array(
  'saldo' => 200,
  'tipo' => 'Premium',
  'nombre' => 'Juan'
);

// ordena areglos asociativo por orden alfabetico de los valores
asort($cliente);
echo "<pre>";
var_dump($cliente);
echo "<br>";

// ordena areglos asociativo por orden alfabetico inverso de los valores
arsort($cliente);
echo "<pre>";
var_dump($cliente);
echo "<br>";

// ordena areglos asociativo por orden alfabetico de las llaves
ksort($cliente);
echo "<pre>";
var_dump($cliente);
echo "<br>";

// ordena areglos asociativo por orden alfabetico inverso de las llaves
krsort($cliente);
echo "<pre>";
var_dump($cliente);
echo "<br>";

include 'includes/footer.php';