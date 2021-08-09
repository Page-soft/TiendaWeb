<?php
    session_start(); 
    include "HeaderAdmin.php";
    include "db_conn.php";
    if (isset($_SESSION['username']) && isset($_SESSION['id'])) { ?>

<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../CCS/Estilos.css">
</head>
<style>
	body {
background-image: url("../Imagenes/Fondo1.jpeg");
background-size: cover;
background-repeat: no-repeat;
}
</style>
<body>
        <div class="container d-flex justify-content-center align-items-center"
         style="min-height: 100vh">
            <?php if ($_SESSION['roles'] == 'admin') {?>
                <div class="card" style="width: 18rem;">
                  <img src=""
                       class=""
                       alt="">
                  <div class="card-body text-center">
                      <h5 class="card-title">
                          <?=$_SESSION['name']?>
                      </h5>
                    <p><a href="PagPS.php" class="btn btn-primary">Inicio</a></p>

                    <p> <a href="CreateP.php"  type="button" class="btn btn-outline-success">Agregar Producto</a> </p>

                    <p> <a href="inventario.php"  type="button" class="btn btn-outline-success">Ver Intentario</a> </p>

                     <p><a href="createU.php" type="button" class="btn btn-outline-info">Crear Cliente </a></p>

                     <p><a href="Tabla.php" type="button" class="btn btn-outline-info">Ver Registro </a></p>

                     <p><a href="logout.php" class="btn btn-danger">Cerrar Sesion</a></p>
                  </div>
                </div>
                <div class="p-3">
                   
                </div>
                <?php }else { ?>

                <div class="card" style="width: 18rem;">
                <img src=""
                 class=""
                 alt="">
                <div class="card-body text-center">
                <h5 class="card-title">
                <?=$_SESSION['name']?>
                </h5>

                <p><a href="PagP.php" class="btn btn-dark">Ir a la tienda</a></p>

                <a href="logout.php" class="btn btn-dark">Cerrar sesion</a>

                </div>
                </div>
                <?php } ?>
                </div>    
</body>
</html>


<?php }
include "Footer.php";
?>