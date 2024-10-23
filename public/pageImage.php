<?php
require '../vendor/autoload.php';
use Dsw\T3\Image;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Pruebas con la clase Image</h1>
  <?php
    $ins1 = new Image("Imagen de correcto", "correcto.webp");
    $ins2 = new Image("Imagen de check", "check.png", "img/");
    $ins3 = new Image("Imagen de correcto", "correcto.webp", "img/");
  ?>
  <?=$ins1->render()?>
  <?=$ins2->render()?>
  <?=$ins3->render()?>
</body>
</html>