<?php 
declare(strict_types=1);
include 'includes/header.php';

function sumar() {
  echo 2 + 2;
  echo "<br/>";
}

sumar();

function sumar2(int $numero1 = 0, int $numero2 = 0) {
  echo $numero1 + $numero2;
  echo "<br/>";
}

sumar2(4, 3);
sumar2(10, 20);
sumar2(20);

include 'includes/footer.php';