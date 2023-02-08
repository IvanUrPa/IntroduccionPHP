<?php include 'includes/header.php';

// Declaracion de variables
$nombre = "Ivan";
$_nombre = "Ruben";
$nombre_ = "Oso";



echo $nombre;
echo "<br>";
echo $_nombre;
echo "<br>";
echo $nombre_;
echo "<br>";

var_dump($nombre);
echo "<br>";
define("constante", "Este es el valor de la constante");
echo constante;
echo "<br>";

const constante2 = "Hola 2";
echo constante2;

$nombreCliente = "Pedro";
$nombre_cliente = "Pedro";

echo $nombreCliente;
echo $nombre_cliente;

include 'includes/footer.php';