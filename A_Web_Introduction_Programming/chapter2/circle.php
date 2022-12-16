<!--
    Author: Alan S. de Sousa
    File: circle.php
      Purpose: PHP Practice
-->
<?php
$radius = $_POST['radius'];
$area = pi() * pow($radius, 2);
$circunference = 2 * pi() * $radius;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Circle Calculation</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <h1>Circle Calculation</h1>
    <p>A circle with a radius of <?= $radius; ?> has an area of <?= $area; ?> and a circunference of <?= $circunference; ?>.</p>

  <p><a href="circle.html">Calcular outro circulo?</a></p>
   
</body>
</html>
