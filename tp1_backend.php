<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<h1>Ejercicio 1)</h1>
<?php
echo "Hola mundo";
 ?>
 <br>
 <hr>

 <h1>Ejercicio 2)</h1>
 <?php
 $mensaje = "Hola mundo";
 echo $mensaje;
  ?>
  <br>
  <hr>

  <h1>Ejercicio 3) SUMA</h1>
  <?php
  $num1 = 5;
  $num2 = 2;

  echo "Suma = " ;
  echo $num1 + $num2;
   ?>
   <br>
   <hr>

   <h1>Ejercicio 3) RESTA</h1>
   <?php
   $num1 = 5;
   $num2 = 2;

   echo "Resta = " ;
   echo $num1 - $num2;
    ?>
    <br>
    <hr>

    <h1>Ejercicio 3) MULTIPLICACIÓN</h1>
    <?php
    $num1 = 5;
    $num2 = 2;

    echo "Multiplicación = " ;
    echo $num1 * $num2;
     ?>
     <br>
     <hr>

     <h1>Ejercicio 3) DIVISION ENTERA</h1>
     <?php
     $num1 = 5;
     $num2 = 2;

     echo "División Entera = " ;
     echo $num1 / $num2;
      ?>
      <br>
      <hr>

      <h1>Ejercicio 3) RESTO</h1>
      <?php
      $num1 = 5;
      $num2 = 2;

      echo "Resto = " ;
      echo $num1 % $num2;
       ?>
       <br>
       <hr>

       <h1>Ejercicio 4)</h1>
       <?php
       $celsius = 20;

       echo "Fahrenheit = " ;
       echo ($celsius * 1.8) + 32;

        ?>
        <br>
        <hr>

        <h1>Ejercicio 5)a.</h1>
        <?php
        $base = 18;
        $altura = 12;

        $per_r = 2*$base + 2*$altura;
        echo "Perimetro = " ;
        echo $per_r;
        echo "                 ";
        $area_r = $base * $altura;
        echo "Area = " ;
        echo $area_r;
         ?>
         <br>
         <hr>

         <h1>Ejercicio 5)b.</h1>
         <?php
         $radio = 30;
         $pi = 3.1416;


         $per_c =2 *($pi * $radio);
         echo "Perimetro = " ;
         echo $per_c;
         echo "                 ";
         $area_c = $pi * ($radio**2);
         echo "Area = " ;
         echo $area_c;
          ?>
          <br>
          <hr>

  </body>
</html>
