<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<h1>Ejercicio 1</h1>
<?php

$numpar = ["2","4","6","8","10","12","14","16","18","20"];
foreach ($numpar as $valor) {
  print "<p>$valor</p>\n";
}
 ?>
<br>
<hr>

<h1>Ejercicio 2</h1>
<?php

$datos = ["Pedro","Ana","34","1"];
//print "<pre>\n";
print_r($datos);
 ?>
 
 <?php
//Ejericio 3
 $datos = [
   'Nombre' => "Pedro",
'Apellido' => "Torres",
'Direccion' => "Av. Mayor 3703",
'Telefono' => 1122334455,
 ];

//no muestro por pantalla porque no lo pide la consigna
  ?>

  <br>
  <hr>

  <h1>Ejercicio 4</h1>
  <?php

  $ciudades = ["Madrid","Barcelona","Londres","New York", "Los Angeles", "Chicago"];
  $i=0;
  foreach ($ciudades as $valor) {
    print "<p>La ciudad con el indice $i es $valor.</p>\n";
    $i++;
  }
   ?>

   <br>
   <hr>

   <h1>Ejercicio 5</h1>
   <?php

   $ciudades = ['MD'=>"Madrid",
   'BCL'=>"Barcelona",
   'LD'=>"Londres",
   'NY'=>"New York",
   'LA'=>"Los Angeles",
   'CCG'=>"Chicago"];
   foreach ($ciudades as $indice => $valor) {
     print "<p>El indice de $valor es $indice.</p>\n";
   }
    ?>









</html>
