<?php include 'includes/header.php';

$productos = [
  [
    'nombre' => 'Tablet',
    'precio' => 1500,
    'disponible' => true
  ],
  [
    'nombre' => 'Audifonos',
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

foreach($productos as $producto) { ?>

  <li>
    <p>Producto: <?php echo $producto['nombre']; ?></p>
    <p>Precio: <?php echo $producto['precio']; ?> </p>
    <p><?php echo ($producto['disponible']) ? 'Disponible' : "No disponible"; ?></p>
  </li>

  <?php
}


include 'includes/footer.php';