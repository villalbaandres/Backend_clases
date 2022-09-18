<?php
$usuario = $_POST ["user"];
$contrasenia = $_POST ["pass"];

$ckuser= "admin";
$ckpass= "1234";

if ($usuario == $ckuser and $contrasenia == $ckpass) {
 header("location:https://www.noticiastornquist.com.ar/");
}
  else {
header("location:error.html");

}

 ?>
