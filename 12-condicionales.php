<?php include 'includes/header.php';


$autenticado = true;
$admin = true;

if($autenticado || $admin){   // && ambas condiciones se deben de cumplir
  echo "usuario autenticado correctamente";
} else {
  echo "usuario no autenticado";
}

echo "<br>";

// if anidados
$cliente = [
  'nombre' => 'Ivan',
  'saldo' => 200,
  'informacion' => [
    'tipo' => 'Premium'
  ]
];

if(empty($cliente)) {   // !empty es la negacion
  echo "El arreglo de cliente esta vacio";
} if($cliente['saldo'] > 0) {
  echo "El cliente tiene saldo disponible";
} else {
  echo "No hay saldo";
}

echo "<br>";

// else if
if($cliente['saldo'] > 200) {
  echo "El cliente tiene saldo";
} else if ($cliente['informacion']['tipo'] === 'Premium') {
  echo "El cliente es premium";
} else {
  echo "No hay cliente definido";
}

echo "<br>";

// switch
$tecnologia = 'HTML';

switch ($tecnologia){
  case 'PHP';
  echo "PHP, excelente lenguaje";
  break;

  case 'JS';
  echo "JS, lenguaje de la web";
  break;

  case 'HTML';
  echo "HTML, emm...";
  break;

  default:
  echo "No conosco el lenguaje";
  break;
}


include 'includes/footer.php';