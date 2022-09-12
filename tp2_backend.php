<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<h1>Ejercicio 1:</h1>
<?php
$n = 5;
if ($n > 0) {
  echo "El numero ingresado es positivo"; }
  else {
  echo "El numero es 0 o negativo";
}
 ?>

<br>
<h1>Ejercicio 2:</h1>
<?php
$n = 7;
if (($n > 1) & ($n < 10 )) {
  echo "El numero ingresado es mayor a 1 y menor a 10"; }
  else {
  echo "El numero ingresado no cumple las condiciones";
}
 ?>

 <br>
 <h1>Ejercicio 3:</h1>
<?php
$n = 20;
if (($n > 10) or ($n < 2 )) {
  echo "El numero ingresado es mayor a 10 o menor a 2"; }
  else {
  echo "El numero ingresado no cumple las condiciones";
}
 ?>

 <br>
 <h1>Ejercicio 4:</h1>
 <?php
 $numero1 = 20;
 $numero2= 40;
 if ($numero1 > $numero2) {
    echo "La suma de los numeros es ". $numero1+$numero2. " y la resta es ". $numero1-$numero2; }
  elseif ($numero2 > $numero1) {
    echo "La multiplicacion de los numeros es ". $numero1*$numero2. ", la division entera es ". $numero1/$numero2. " y el resto es ". $numero1%$numero2; }
  else
  {
    echo "Los numeros ingresados son iguales";
 }
 ?>


  </body>
</html>
