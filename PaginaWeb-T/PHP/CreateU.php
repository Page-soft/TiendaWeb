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
                <img src="../Imagenes/AgUsuario.jpeg" width="1000px" alt=""></div>
                <div class="row">
                    <div class="col-sm-1">
                        <a href="index.php" class="btn btn-info add-new"><i class="fa fa-arrow-left"></i> Regresar</a>
                    </div>
                </div>
            </div>

            <?php
                include ('database.php');
                $Usuarios = new Database();
                if(isset($_POST) && !empty($_POST)){
                	$roles                           = $Usuarios->sanitize($_POST['roles']);
                    $username                       = $Usuarios->sanitize($_POST['username']);
                    $password                     =md5($Usuarios->sanitize($_POST['password']));
                    $nombre                         = $Usuarios->sanitize($_POST['nombre']);
                    

                    $res = $Usuarios->createU($roles,$username,$password,$nombre);

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

            <p><p>
            <div class="container">
			<form method="post">
			<div class="row">
			<div class="col-md-3">
                    <label>Rol</label>
                    <select id="roles" name="roles" class='form-control'>
                    <option value="0" disabled selected>Seleccione Rol</option>
                    <option value="Usuario" >Usuario</option>
                    </select>
                </div>
				<div class="col-md-3">
					<label>Correo:</label>
					<input type="text" name="username" id="username" class='form-control' maxlength="100" required>
				</div>
                <div class="col-md-3">
					<label>Contraseña:</label>
					<input type="password" name="password" id="password" class='form-control' maxlength="64" required>
				</div>
				<div class="col-md-3">
					<label>Nombre:</label>
					<input type="text" name="nombre" id="nombre" class='form-control' maxlength="15" required >
				</div>
				
				<div class="col-md-12 pull-right">
				<hr>
					<button type="submit" class="btn btn-success">Guardar Usuario</button>
				</div>
				</form>
			</div>
        </div>
    </div>     
</body>
</html>                