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
<div class="productos">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Agregar <b>Producto</b></h2></div>
                    <div class="col-sm-4">
                        <a href="index.php" class="btn btn-info add-new"><i class="fa fa-arrow-left"></i> Regresar</a>
                    </div>
                </div>
            </div>

            <?php
                include ('database.php');
                $productos = new Database();
                if(isset($_POST) && !empty($_POST)){
                    $Producto                     = $productos->sanitize($_POST['Producto']);
                    $Precio                       = $productos->sanitize($_POST['Precio']);
                    $Talla                        = $productos->sanitize($_POST['Talla']);
                    $productoD      			  = $productos->sanitize($_POST['productoD']);

                    $res = $productos->altaP($Producto, $Precio, $Talla, $productoD);

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
					<label>Nombre del Producto</label>
					<input type="text" name="Producto" id="Producto" class='form-control' maxlength="100" required>
				</div>
				<div class="col-md-6">
					<label>Precio</label>
					<input type="text" name="Precio" id="Precio" class='form-control' maxlength="64" required>
				</div>
				<div class="col-md-6">
					<label>Talla</label>
					<input type="text" name="Talla" id="Talla" class='form-control' maxlength="15" required >
				</div>
				<div class="col-md-12">
					<label>Descripcion</label>
					<textarea  name="productoD" id="productoD" class='form-control' maxlength="64" required></textarea>
				</div>
				<div class="col-md-12 pull-right">
				<hr>
					<button type="submit" class="btn btn-success">Guardar datos</button>
				</div>
				</form>
			</div>
        </div>