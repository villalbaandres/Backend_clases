

<?php
session_start();
error_reporting(0);

$varsesion = $_SESSION['usuario'];

if ($varsesion == null || $varsesion = ''){
  echo "Usted no tiene autorización.";
  die();
}

  // 1) Conexion
  // a) realizar la conexion con la bbdd
  // b) seleccionar la base de datos a usar
  $conexion = mysqli_connect("127.0.0.1", "root", "");
  mysqli_select_db($conexion, "tienda");

  // 2) Almacenamos los datos del envío POST
  // a) generar variables para cada dato a almacenar en la bbdd
  // Si se desea almacenar una imagen en la base de datos usar lo siguiente: addslashes(file_get_contents($_FILES['ID NOMBRE DE LA IMAGEN EN EL FORMULARIO']['tmp_name']))
  $tipo_prenda = $_POST ['tipo_de_prenda'];
    $marca = $_POST['marca'];
    $talle = $_POST['talle'];
    $precio = $_POST['precio'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $link = $_POST['link'];

  // 3) Preparar la orden SQL
  // INSERT INTO nombre_tabla (campos_tabla) VALUES (valores_a_ingresar)
  // => Ingresa dentro de la siguiente tabla los siguientes valores
  // a) generar la consulta a realizar
  $consulta = "INSERT INTO ropa (id,tipo_de_prenda,marca,talle,precio,imagen,link)
          VALUES ('','$tipo_de_prenda','$marca','$talle','$precio','$imagen','$link')";

  // 4) Ejecutar la orden y ingresamos datos
  // a) ejecutar la consulta
  mysqli_query($conexion,$consulta);

   // a) rederigir a index
   header('location: menu_admin.php');

?>
