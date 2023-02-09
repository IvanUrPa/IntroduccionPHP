<?php include 'includes/header.php';

// While
$i = 0; //inicilaizador

// while($i < 10) {
//   echo $i . "<br>";
//   $i++;
// }

// otra sintaxis del while sin las llaves
while($i < 5):
  echo $i . ": <br>";
  $i++;
endwhile;


// Do while
$i = 100;
do {
  echo $i . "<br>";
  $i++;
} while($i < 10);


// Foor loop
for($i=0; $i<10;$i++) {
  echo $i . "<br>";
}

// otra sintaxis del for
for($i=0; $i<10;$i++):
  echo $i . ":<br>";
endfor;


/**
* multiplo de 3 imprimir fizz
* multiplo de 5 imprimir buzz
* multiplo de 3 y 5 imprimir fizz - buzz
**/
for($i=1;$i<100;$i++) {
  if($i%3 === 0 && $i%5 === 0) {
    echo $i . " - fizz/buzz <br/>";
  }
  elseif($i%3 === 0){
    echo $i . " - fizz <br/>";
  } elseif ($i%5 === 0) {
    echo $i . " - buzz <br/>";
  } else {
    echo $i . "<br/>";
  }
}

// For each
$clientes = array('Pedro', 'Juan', 'Manuel');

foreach ($clientes as $cliente) {
  echo $cliente . "<br/>";
}

echo count($clientes); //conocer la extension de un arreglo
echo "<br/>";
echo sizeof($clientes); // otra manera de conocer el tamaño de un arreglo
echo "<br/>";

// esto realiza lo mismo que un foreach
for($i=0; $i < count($clientes); $i++) {
  echo $clientes[$i]. "<br/>";
}



// foreach para arreglo asociativo
$cliente2 = [
  'nombre' => 'Juan',
  'saldo'=> 200,
  'tipo' => 'Premium'
];

foreach ($cliente2 as $valor) {
  echo $valor . "<br/>";
}

foreach ($cliente2 as $key => $valor) {
  echo $key . " - " . $valor . "<br/>";
}

include 'includes/footer.php';