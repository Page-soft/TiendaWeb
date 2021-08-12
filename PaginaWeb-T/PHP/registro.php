<?php
include "HeaderNS.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ropa Americana Banelly</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" 
    crossorigin="anonymous">
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
<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">                   
                    <div class="col-sm-4">
                    </div>
                </div>
            </div>

            <?php
               include ('database.php');
               $Rusuarios = new Database();
               if(isset($_POST) && !empty($_POST)){
                   $username                  = $Rusuarios->sanitize($_POST['username']);
                   $psswd                      =md5($Rusuarios->sanitize($_POST['psswd']));
                   $nombre                      = $Rusuarios->sanitize($_POST['nombre']);
                
 
                   $res = $Rusuarios->usuariosR($username,$psswd,$nombre);
                   

                   if($res){
                       $message = "Te has registrado correctamente";
                       $class = "alert alert-success";
                   }
                   else
                   {
                       $message = "No se pudieron guardar los datos";
                       $class = "alert alert-danger";
                   }


                    ?>
                    <div class="<?php echo $class?>">
                        <?php echo $message;?>
                    </div>
                    <?php
                }
            ?>


        <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">
        <div class="p-3 mb-2 bg-white text-dark">
        <form class="border shadow p-5 rounded" method="post" style="width: 500px;">
        <h1 class="text-center p-3">Registro</h1>   
                <div class="row">
                <form method="post">
                <div class="col-md-12">
                    <label>Correo electrónico:</label>
                    <input type="email" name="username" id="username" class='form-control' maxlength="100" required>
                </div>
                <div class="col-md-12">
                    <label>Contraseña:</label>
                    <input type="password" name="psswd" id="psswd" class='form-control' maxlength="100" required >
                </div>
                <div class="col-md-12">
                    <label>Nombre:</label>
                    <input type="text" name="nombre" id="nombre" class='form-control' maxlength="100" required >
                </div>
                <div class="col-md-12 pull-right">
                <hr>
                    <button type="submit" class="btn btn-success">Registrarse</button>
                </div>
                </form>
                <p>¿Desea iniciar sesion? <a class="link" href="index.php">Iniciar sesion </a></p>
            </div>
        </div>
    </div>  
</div>   
</body>
</html>