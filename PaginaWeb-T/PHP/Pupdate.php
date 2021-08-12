
<?php 
	if (isset($_GET['id'])){
		$id = intval($_GET['id']);
	}
	else
	{
		header("location: index.php");
	}
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
                    <div class="col-sm-8"><h2>Editar <b>Producto</b></h2></div>
                    <div class="col-sm-4">
                        <a href="home.php" class="btn btn-info add-new"><i class="fa fa-arrow-left"></i> Regresar</a>
                        <a href="inventario.php" class="btn btn-info add-new">Tabla</a>

                    </div>
                </div>
            </div>

			<?php
                include ('database.php');
                $AProducto = new Database();
                if(isset($_POST) && !empty($_POST)){
                    $Producto                       = $AProducto->sanitize($_POST['Producto']);
                    $Precio                      	= $AProducto->sanitize($_POST['Precio']);
                    $Talla           			   	= $AProducto->sanitize($_POST['Talla']);
                    $productoD                      = $AProducto->sanitize($_POST['productoD']);
                    $idCategoria                     = $AProducto->sanitize($_POST['idCategoria']);
                    $idSubCategoria                   = $AProducto->sanitize($_POST['idSubCategoria']);
                    $idProducto						=intval($_POST['id']);
                    


                    $res = $AProducto->Pupdate($Producto,$Precio,$Talla,$productoD,$idCategoria,$idSubCategoria,$idProducto);

				if($res){
					$message = " Datos actualizados con éxitos";
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
			$datos_cliente = $AProducto->Psingle_record($id);
		?>


			<div class="container">
				<form method="post">
                <div class="row">
				<div class="col-md-4">
					<label>Producto:</label>
					<input type="text" name="Producto" id="Producto" class='form-control' maxlength="100" required  value="<?php echo $datos_cliente->Producto;?>">
					<input type="hidden" name="id" id="id" class='form-control' maxlength="100"   value="<?php echo $datos_cliente->idProducto;?>">
				</div>
				<div class="col-md-4">
					<label>Precio:</label>
					<input type="text" name="Precio" id="Precio" class='form-control' maxlength="100" required value="<?php echo $datos_cliente->Precio;?>">
				</div>
				<div class="col-md-4">
                    <label>Talla</label>
                    <select id="Talla" name="Talla" class='form-control'>
                    <option value="0" disabled selected>Seleccione una Talla</option>
                    <option value="Ch" >Ch</option>
                    <option value="M" >M</option>
                    <option value="G" >G</option>
                    <option value="XL" >XL</option>
                    <option value="XXL" >XXL</option>
                    </select>
                </div>
				<div class="col-md-4">
                    <label>Categoria</label>
                    <select id="idCategoria" name="idCategoria" class='form-control'>
                    <option value="0" disabled selected>Seleccione una Categoria</option>
                    <option value="Hombre" >Hombre</option>
                    <option value="Mujer" >Mujer</option>
                    <option value="Joven" >Joven</option>
                    </select>
                </div>
				<div class="col-md-4">
                    <label>SubCategoria</label>
                    <select id="idSubCategoria" name="idSubCategoria" class='form-control'>
                    <option value="0" disabled selected>Seleccione una SubCategoria</option>
                    <option value="Camisas" >Camisas</option>
                    <option value="Pantalon" >Pantalon</option>
                    <option value="Short" >Short</option>
                    <option value="Blusa" >Blusa</option>
                    <option value="Vestido" >Vestido</option>
                </select>
                </div>
				<div class="container">
            <div class="row">
				<div class="col-md-12">
                    <label>Descripcion</label>
                    <textarea name="productoD" id="productoD" class='form-control' maxlength="50" required placeholder="Caracteristicas del Producto" ></textarea>
                </div>
				
				
				<div class="col-md-12 pull-right">
				<hr>
					<button type="submit" class="btn btn-success">Actualizar datos</button>
				</div>
				</form>
			</div>
        </div>
    </div>     
</body>
</html>          
