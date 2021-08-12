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
            <?php if ($_SESSION['roles'] == 'Administrador') {?>
                <div class="card" style="width: 18rem;">
                  <img src=""
                       class=""
                       alt="">
                  <div class="card-body text-center">
                      <h5 class="card-title">
                          <?=$_SESSION['nombre']?>
                      </h5>
                    <p><a href="PagPS.php" class="btn btn-outline-dark">Ir a la Tienda</a></p>

                    <p> <a href="CreateP.php"  type="button" class="btn btn-outline-success">Agregar Producto</a> </p>

                    <p> <a href="inventario.php"  type="button" class="btn btn-outline-success">Inventario de Productos</a> </p>

                    <p><a href="createE.php" type="button" class="btn btn-outline-primary">Crear Empleado </a></p>

                    <p><a href="TablaE.php" type="button" class="btn btn-outline-primary">Registro de Empleados</a></p>

                    <p><a href="createU.php" type="button" class="btn btn-outline-info">Crear Usuario </a></p>

                    <p><a href="TablaU.php" type="button" class="btn btn-outline-info">Registro de Usuarios</a></p>

                    <p><a href="logout.php" class="btn btn-outline-danger">Cerrar Sesion</a></p>
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
                <?=$_SESSION['nombre']?>
                </h5>

                <p><a href="PagPS.php" class="btn btn-outline-dark">Ir a la tienda</a></p>

                <a href="logout.php" class="btn btn-outline-danger">Cerrar sesion</a>

                </div>
                </div>
                <?php } ?>
                </div>    
</body>
</html>


<?php }
include "Footer.php";
?>