<?php
    include "HeaderAdmin.php";
    ?>
<?php 

	$conexion=mysqli_connect('localhost','root','','integradora1');

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ropa Americana Banelly</title>
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
                    <div class="col-sm-8"><h2>Listado de  <b>Productos</b></h2></div>
                    <div class="col-sm-4">
                        <a href="createP.php" class="btn btn-info add-new"><i class="fa fa-plus"></i> Agregar Producto</a>
                        <a href="home.php" class="btn btn-info add-new"></i> Perfil</a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
            <thead>
            <tr>
            <th>id</th>
            <th>Nombre Del Producto</th>
            <th>Precio Del Producto</th>
            <th>Talla</th>
            <th>Descripcion</th>
            <th>Categoria</th>
            <th>SubCategoria</th>
            <th>Acciones</th>
            </tr>
            </thead>

            <?php
            include ('database.php');
            $Producto = new Database();
            $listadoP = $Producto->Pread();
            ?>
            
            <tbody>
              <?php
              while ($row = mysqli_fetch_object($listadoP)){
                $idProducto     = $row->idProducto;
                $Producto       = $row->Producto;
                $Precio         =$row->Precio;
                $Talla         = $row->Talla;
                $productoD      = $row->productoD;
                $idCategoria    = $row->idCategoria;
                $idSubCategoria = $row->idSubCategoria;
                 ?>

          

                
                  <tr>
                    <td><?php echo $idProducto ?></td>
                    <td><?php echo $Producto ?></td>
                    <td><?php echo $Precio ?></td>
                    <td><?php echo $Talla ?></td>
                    <td><?php echo $productoD ?></td>
                    <td><?php echo $idCategoria ?></td>
                    <td><?php echo $idSubCategoria ?></td>
                    <td>

                  <a href="Pupdate.php?id=<?php echo $idProducto;?>" class="edit" title="Editar" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                  <a href="deleteP.php?id=<?php echo $idProducto;?>" class="delete" title="Eliminar" data.toogle="tooltip"><i class="material-icons">&#xE872;</i></a>
    </td>
  </tr>
<?php 
}
 ?>
</tbody>
</table>
</div>
</div>
</body>
</html>
<?php
    include "Footer.php";
    ?>