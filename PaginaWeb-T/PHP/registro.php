<?php
include "Header.php";
?>
<head>
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
    <div class="container">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Registrar <b>Usuario</b></h2></div>
                        <div class="col-sm-4">
                            <a href="home.php" class="btn btn-info add-new"><i class="fa fa-arrow-left"></i> Regresar</a>
                        </div>
                    </div>
                </div>
    
				<?php
                include ('database.php');
                $Rclientes = new Database();
                if(isset($_POST) && !empty($_POST)){
                    $Nombre                        = $Nombre ->sanitize($_POST['Nombre']);
                    $Apellidos                     = $Apellidos->sanitize($_POST['Apellidos']);
                    $Correo           			   = $Correo ->sanitize($_POST['Correo']);
                    $Telefono                      = $Telefono->sanitize($_POST['Telefono']);
                    $Direccion                     = $Telefono->sanitize($_POST['Direccion']);
                    $Contraseña                    = $Contraseña->sanitize($_POST['Contraseña']);
                    $nombreU                       = $nombreU->sanitize($_POST['nombreUsuario']);


                    $res = $Rclientes->Rusuario($Nombre,$Apellidos,$Correo,$Telefono,$Direccion,$Contraseña,$nombreU);

                    if($res){
                        $message = " Datos insertados con éxitos";
                        $class = "alert alert-success";
                    }
                    else
                    {
                        $message = "No se pudieron insertar los datos";
                        $class = "alert alert-danger";
                    }

                    ?>
                    <div class="<?php echo $class?>">
                        <?php echo $message;?>
                    </div>
                    <?php
                }
            ?>
    
    
               
                <div class="row">
                    <form method="post">
                    <div class="col-md-6">
                        <label>Nombre:</label>
                        <input type="text" name="nombre" id="nombre" class='form-control' maxlength="100" required >
                    </div>
                    <div class="col-md-6">
                        <label>Apellidos:</label>
                        <input type="text" name="Apellidos" id="Apellidos" class='form-control' maxlength="100" required>
                    </div>
                    <div class="col-md-6">
                        <label>Correo electronico:</label>
                        <textarea type="email" name="correo" id="correo" class='form-control' maxlength="100" required></textarea>
                    </div>
                    <div class="col-md-6">
                        <label>Teléfono:</label>
                        <input type="text" name="telefono" id="telefono" class='form-control' maxlength="15" required >
                    </div>
                    <div class="col-md-6">
                        <label>Contraseña:</label>
                        <input type="password" name="Contraseña " id="Contraseña " class='form-control' maxlength="64" required>
                    
                    </div>
                    
                    <div class="col-md-12 pull-right">
                    <hr>
                        <button type="submit" class="btn btn-success">Guardar datos</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>