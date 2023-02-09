<?php 
declare(strict_types=1);
include 'includes/header.php';


function usuarioAutenticado() : string {
  return "El usuario esta autenticado";
}

$usuario = usuarioAutenticado();

echo $usuario;


// types
function usuarioAutenticado2() : string { // se puede colocar el tipo de dato que se espera en el retorno
  return "El usuario esta autenticado";
  //return true; // esto marcaria un error por que se espera un string
}

$usuario2 = usuarioAutenticado2();

echo $usuario2;


// types
function usuarioAutenticado3(bool $autenticado) : void { // agregando tipado mas fuerte y no regresa un valor solo imprime algo
  if($autenticado) {
    echo "El usuario esta autenticado";
  } else {
    echo "No autenticado";
  }
}

$usuario3 = usuarioAutenticado3(true);

echo $usuario3;


// types
function usuarioAutenticado4(bool $autenticado) : ?string { // ?string - pudiera regresar un string
  if($autenticado) {
    return "El usuario esta autenticado";
  } else {
    return null;
  }
}

$usuario4 = usuarioAutenticado4(true);

echo $usuario4;


// types
function usuarioAutenticado5(bool $autenticado) : string|int { // string|int - pudiera regresar o un string o un entero
  if($autenticado) {
    return "El usuario esta autenticado";
  } else {
    return 20;
  }
}

$usuario5 = usuarioAutenticado5(false);

echo $usuario5;

include 'includes/footer.php';