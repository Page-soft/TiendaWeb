<?php
include "Header.php";
?>
<head>
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../CCS/Estilos.css">
</head>
    <div class="container">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Registrar <b>Usuario</b></h2></div>
                    </div>
                </div>
    
				<?php
                include ('database.php');
                $Rclientes = new Database();
                if(isset($_POST) && !empty($_POST)){
                    $Nombre                        = $Rclientes ->sanitize($_POST['Nombre']);
                    $Apellido                     = $Rclientes->sanitize($_POST['Apellido']);
                    $Correo           			   = $Rclientes ->sanitize($_POST['Correo']);
                    $Telefono                      = $Rclientes->sanitize($_POST['Telefono']);
                    $Direccion                     = $Rclientes->sanitize($_POST['Direccion']);
                    $Contrasena                    = $Rclientes->sanitize($_POST['Contrasena']);
                   
                    $res = $Rclientes->Cusuario($Nombre,$Apellido,$Correo,$Telefono,$Direccion,$Contrasena);

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
                        <input type="text" name="Nombre" id="Nombre" class='form-control' maxlength="100" required >
                    </div>
                    <div class="col-md-6">
                        <label>Apellidos:</label>
                        <input type="text" name="Apellido" id="Apellido" class='form-control' maxlength="100" required>
                    </div>
                    <div class="col-md-6">
                        <label>Correo electronico:</label>
                        <input type="email" name="Correo" id="Correo" class='form-control' maxlength="100" required>
                    </div>
                    <div class="col-md-6">
                        <label>Teléfono:</label>
                        <input type="text" name="Telefono" id="Telefono" class='form-control' maxlength="15" required >
                    </div>
                    <div class="col-md-6">
                        <label>Direccion:</label>
                        <textarea type="text" name="Direccion" id="Direccion" class='form-control' maxlength="100" required></textarea>
                    </div>

                    <div class="col-md-6">
                        <label>Contraseña:</label>
                        <input type="password" name="Contrasena" id="Contrasena" class='form-control' maxlength="64" required>
                    
                    </div>
                    
                    <div class="col-md-12 pull-right">
                    <hr>
                        <button type="submit" class="btn btn-success">Guardar datos</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>