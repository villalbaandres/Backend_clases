<?php

$usuario = $_POST ["user"];
$contrasenia = $_POST ["pass"];
session_start();
$_SESSION["usuario"]=$usuario;


$ckuser= "admin";
$ckpass= "1234";

if ($usuario == $ckuser and $contrasenia == $ckpass) {
 header("location:menu_admin.php");
}
  else {
header("location:error.html");

}

 ?>
