<?php
require '../vendor/autoload.php';
use Dsw\T3\Text;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Pruebas con la clase Text</h1>
  <?php
    $ins1 = new Text("Encabezado 1", 1);
    $ins2 = new Text("Encabezado 2", 2);
    $ins3 = new Text("Encabezado 3", 3);
    $ins4 = new Text("Párrafo", 0);
  ?>
  <?=$ins1->render()?>
  <?=$ins2->render()?>
  <?=$ins3->render()?>
  <?=$ins4->render()?>
</body>
</html>