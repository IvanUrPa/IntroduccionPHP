<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array('Pedro', 'Marcela', 'Juana');
$cliente = [
  'nombre' => 'Ivan',
  'saldo' => 200
];

// Empty revisa si un arreglo esta vacio
var_dump(empty($clientes));
echo '<br>';
var_dump(empty($clientes2));
echo '<br>';
var_dump(empty($clientes3));

// isset - revisa si un arreglo esta creado o una propiedad esta definida
echo '<br>';
var_dump(isset($clientes4));
echo '<br>';
var_dump(isset($clientes));
echo '<br>';
var_dump(isset($cliente['nombre']));

include 'includes/footer.php';