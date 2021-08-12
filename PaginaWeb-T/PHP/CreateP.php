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
<link rel="stylesheet" href="../CCS/Estilos">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<div class="productos">
        <div class="table-wrapper">
            <div class="table-title">
                <img src="../Imagenes/Agregar Producto.jpg" width="1000px" alt=""></div>
            <div class="container">
                <div class="row">
                 <div class="col-sm-1">
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
                    $imagenes                     = $url ="../Imagenes/".$productos->sanitize($_POST['imagenes']);
                    $idCategoria                  = $productos->sanitize($_POST['idCategoria']);
                    $idSubCategoria               = $productos->sanitize($_POST['idSubCategoria']);
                   
                    $res = $productos->altaP($Producto,$Precio,$Talla,$productoD,$imagenes,$idCategoria,$idSubCategoria,);

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
				<div class="col-md-4">
					<label>Nombre del Producto</label>
					<input type="text" name="Producto" id="Producto" class='form-control' maxlength="100"  required placeholder="Nombre del Producto">
				</div>
				<div class="col-md-4">
					<label>Precio</label>
                    <input type="text" name="Precio" id="Precio" class='form-control' maxlength="64" required placeholder="Precio en Pesos">
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
            <div class="container">
            <div class="row">
				<div class="col-md-12">
                    <label>Descripcion</label>
                    <textarea name="productoD" id="productoD" class='form-control' maxlength="50" required placeholder="Caracteristicas del Producto" ></textarea>
                </div>
                <div class="container">
                <div class="row">
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
                <div class="col-md-4">
                    <label>Subir imagen</label>
                    <form name="MiForm" id="MiForm" method="post" action="cargar.php">
                    <div class="form-group">
                    <input type="file" class="form-control" id="imagenes" name="imagenes">
                    </div>
                </div>
                <div class="container">
                <div class="row">
                <div class="col-md-12">
				<button type="submit" class="btn btn-success">Subir Producto</button>
				</form>
			</div>
        </div>