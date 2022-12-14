<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>LIBELULAS - Tienda de Ropa</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/logo_final.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

      <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.php">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Productos</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="listar_buzo.php">Buzos</a></li>
                            <li><a class="dropdown-item" href="listar_mayor_500.php">Precio mayor a 500</a></li>
                              <li><a class="dropdown-item" href="listar_nike.php">Nike</a></li>
                        </ul>

                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">LIBELULAS</h1>
                <p class="lead fw-normal text-white-50 mb-0">Tienda de Ropa</p>
            </div>
        </div>
    </header>
    <!-- Section-->

    <div class="container">
      <div class="row">

        <?php
        // 1) Conexion
        $conexion = mysqli_connect("127.0.0.1", "root", "");
        mysqli_select_db($conexion, "tienda");

    // 2) Preparar la orden SQL
    // Sintaxis SQL SELECT
    // SELECT * FROM nombre_tabla
    // => Selecciona todos los campos de la siguiente tabla
    // SELECT campos_tabla FROM nombre_tabla
    // => Selecciona los siguientes campos de la siguiente tabla

    $consulta='SELECT * FROM ropa WHERE precio > 500 ';



    // 3) Ejecutar la orden y obtenemos los registros
    $datos= mysqli_query($conexion, $consulta);
    // 4) el while recorre todos los registros y genera una CARD PARA CADA UNA
    while ($reg = mysqli_fetch_array($datos)) {?>
      <div class="card col-sm-12 col-md-6 col-lg-3">
        <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen'])?>" alt="" width="225px" height="225px")>

          <h3 class="card-title" style="width: 100%; font-size:25px; text-align:center;"><?php echo ucwords($reg['marca']) ?></h3>
          <span style="diaplay:block;margin: 0 auto; font-size:20px">  $ <?php echo $reg['precio']; ?></span>
        </a>
      </div>


        <?php } ?>






<!-- Footer-->
<footer class="py-5 bg-dark">
    <div class="container"><p class="m-0 text-center text-white">Andr??s Villalba - Analista en Sistemas</p></div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>
