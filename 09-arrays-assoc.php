<?php include 'includes/header.php';

$cliente = [
  'nombre' => 'Ivan',
  'saldo' => 200,
  'informacion' => [
    'tipo' => 'Premium'
  ]
];

echo "<pre>";
var_dump($cliente);
echo "<br>";
var_dump($cliente['nombre']);
echo "</pre>";
echo $cliente['nombre'];
echo "<br>";
echo $cliente['saldo'];
echo "<br>";
echo $cliente['informacion']['tipo'];

// agregar propiedades no definidas en el arreglo
$cliente['codigo'] = 123456;
echo "<pre>";
var_dump($cliente);
echo "<br>";

include 'includes/footer.php';