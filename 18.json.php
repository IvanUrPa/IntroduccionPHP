<?php include 'includes/header.php';


$productos = [
  [
    'nombre' => 'Tablet',
    'precio' => 1500,
    'disponible' => true
  ],
  [
    'nombre' => 'Televisión',
    'precio' => 500,
    'disponible' => false
  ],
  [
    'nombre' => 'Monitor Curvo 20"',
    'precio' => 4500,
    'disponible' => true
  ],[
    'nombre' => 'Laptop',
    'precio' => 15000,
    'disponible' => true
  ]
];

echo "<pre>";
var_dump($productos);
$json = json_encode($productos, JSON_UNESCAPED_UNICODE);

$json_array = json_decode($json);
var_dump($json);
var_dump($json_array);
echo "</pre>";

include 'includes/footer.php';