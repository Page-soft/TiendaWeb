<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ropa Americana Banelly</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
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
               $usuarios = new Database();
               if(isset($_POST) && !empty($_POST)){
                   $username                  = $usuarios->sanitize($_POST['username']);
                   $password                  =md5($usuarios->sanitize($_POST['password']));
                   $name                      = $usuarios->sanitize($_POST['name']);
                
 
                   $res = $usuarios->Altausuarios($username,$password,$name);
                   

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


        <div class="container d-flex justify-content-center align-items-center"
            style="min-height: 100vh">
                <form class="border shadow p-5 rounded"
                    method="post"
                    style="width: 500px;">
                    <h1 class="text-center p-3">Registro</h1>   
                <div class="row">
                <form method="post">
                <div class="col-md-12">
                    <label>Correo electrónico:</label>
                    <input type="email" name="username" id="username" class='form-control' maxlength="100" required>
                </div>
                <div class="col-md-12">
                    <label>Password:</label>
                    <input type="password" name="password" id="password" class='form-control' maxlength="100" required >
                </div>
                <div class="col-md-12">
                    <label>Name:</label>
                    <input type="text" name="name" id="name" class='form-control' maxlength="100" required >
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