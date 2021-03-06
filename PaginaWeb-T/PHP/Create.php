<?php
include "HeaderAdmin.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/custom.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Agregar <b>Usuario</b></h2></div>
                    <div class="col-sm-4">
                        <a href="index.php" class="btn btn-info add-new"><i class="fa fa-arrow-left"></i> Regresar</a>
                    </div>
                </div>
            </div>
            
            <?php
                include ('database.php');
                $clientes = new Database();
                if(isset($_POST) && !empty($_POST)){
                    $Nombre                        = $clientes->sanitize($_POST['Nombre']);
                    $Apellido                      = $clientes->sanitize($_POST['Apellido']);
                    $Correo           			   = $clientes->sanitize($_POST['Correo']);
                    $Telefono                      = $clientes->sanitize($_POST['Telefono']);
                    $Domicilio                     = $clientes->sanitize($_POST['Domicilio']);
                    $Contrasena                    = $clientes->sanitize($_POST['Contrasena']);
                   


                    $res = $clientes->Cusuario($Nombre,$Apellido,$Correo,$Telefono,$Domicilio,$Contrasena);

                    if($res){
                        $message = " Datos insertados con ??xitos";
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
					<label>Nombres:</label>
					<input type="text" name="Nombre" id="Nombre" class='form-control' maxlength="100" required >
				</div>
				<div class="col-md-6">
					<label>Apellidos:</label>
					<input type="text" name="Apellido" id="Apellido" class='form-control' maxlength="100" required >
				</div>
				<div class="col-md-6">
					<label>Correo:</label>
					<input type="email" name="Correo" id="Correo" class='form-control' maxlength="100" required>
				</div>
				<div class="col-md-6">
					<label>Telefono:</label>
					<input type="text" name="Telefono" id="Telefono" class='form-control' maxlength="100" required >
				</div>
				<div class="col-md-6">
					<label>Domicilio:</label>
					<input type="text" name="Domicilio" id="Domicilio" class='form-control' maxlength="100" required >
				</div>
				<div class="col-md-6">
					<label>Contrase??a:</label>
					<input type="password" name="Contrasena" id="Contrasena" class='form-control' maxlength="15" required >
				</div>
				
				<div class="col-md-12 pull-right">
				<hr>
					<button type="submit" class="btn btn-success">Guardar datos</button>
				</div>
				</form>
			</div>
        </div>
    </div>     
</body>
</html>                            