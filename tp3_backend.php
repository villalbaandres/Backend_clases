<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1>Ejercicio 1: Mostrar los números del 1 al 100</h1>
    <?php
    $i = 1;
while ($i<101){
  print "<p>$i</p>\n";
$i++;
}
     ?>
<hr>
<br>

<h1>Ejercicio 2: Mostrar los números del 100 al 1</h1>
<?php
$i = 100;
while ($i != 0){
print "<p>$i</p>\n";
$i--;
}
 ?>

<hr>
<br>

<h1>Ejercicio 3: Mostrar los números pares del 1 al 100</h1>
<?php
$i = 1;
while ($i<101 ){
  if (($i%2) == 0){
    print "<p>$i</p>\n";
  }
    $i++;
}
 ?>

<hr>
<br>

<h1>Ejercicio 4: Mostrar los números impares del 1 al 100</h1>
<?php
$i = 1;
while ($i<101 ){
  if (($i%2) ==! 0){
    print "<p>$i</p>\n";
  }
    $i++;
}
 ?>

<hr>
<br>

<h1>Ejercicio 5: Mostrar la suma de los números de 1 a 20</h1>
<?php
$i = 1;
$suma = 0;
while ($i<21 ){
    $suma = $suma + $i;
    $i++;
}
print "<p>$suma</p>\n"
 ?>

<hr>
<br>

<h1>Ejercicio 6: Mostrar la suma de números pares de 1 a 20</h1>
<?php
$i = 1;
$suma = 0;
while ($i<21 ){
  if (($i%2) == 0){
    $suma = $suma + $i;
  }
    $i++;
}
print "<p>$suma</p>\n"
 ?>


  </body>
</html>
