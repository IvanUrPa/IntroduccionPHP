<?php include 'includes/header.php';

$nombreCliente = " Ivan Urbano ";

// cantidad de caracteres en un string
echo strlen($nombreCliente);

// eliminar espacios en blanco
$texto = trim($nombreCliente);
echo strlen($texto);

//texto en mayusculas
echo strtoupper($nombreCliente);

//texto a minusculas
echo strtolower($nombreCliente);

$mail1 = "correo@correo.com";
$mail2 = "Correo@correo.com";

var_dump($mail1 === $mail2);
var_dump(strtolower($mail1) === strtolower($mail2));

// reemplazar texto
echo str_replace('Ivan', 'I', $nombreCliente);


// revisar si un string existe
echo strpos($nombreCliente, 'Ivan');

// concatenar
$tipoCliente = "Premium";

echo "<br>";
echo "El cliente " . $nombreCliente . " es de tipo " . $tipoCliente;
echo "<br>";
//echo "El cliente ${nombreCliente} es ${tipoCliente}"; // forma desactualizada


include 'includes/footer.php';