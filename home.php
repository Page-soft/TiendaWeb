<?php
    session_start(); 
    include "db_conn.php";
    include "HeaderAdmin.php";
    if (isset($_SESSION['username']) && isset($_SESSION['id'])) { ?>

<!DOCTYPE html>
<html lang>
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
         style="min-height: 10vh" >
            <?php if ($_SESSION['role'] == 'admin') {?>
                <div class="card" style="width: 18rem;">
                  <img src=""
                       class=""
                       alt="">
                  <div class="card-body text-center">
                      <h5 class="card-title">
                          <?=$_SESSION['name']?>
                      </h5>
                    <p><a href="PagP.php" class="btn btn-primary">Inicio</a></p>

                    <p> <a href="CreateP.php" class="btn btn-info add-new"><i class="fa fa-plus"></i>Agregar Producto</a></p>

                    <p> <a href="inventario.php" class="btn btn-info add-new"><i class="fa fa-plus"></i>Ver inventario</a></p>

                     <p> <a href="CreateU.php" class="btn btn-info"><i class="fa fa-plus"></i>Agregar Registro</a></p>

                     <p><a href="Tabla.php" class="btn btn-success"><i class="fa fa-search"></i>Ver registros</a></p>

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