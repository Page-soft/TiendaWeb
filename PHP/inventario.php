<?php
    include "Header.php";
    ?>
<?php 

	$conexion=mysqli_connect('localhost','root','','integradora1');

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ropa Americana Banelly</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit-no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../CCS/Estilos.css">
    <link rel="stylesheet" href="../CCS/inventario.css">
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
                 ?>

          

                
                  <tr>
                    <td><?php echo $idProducto ?></td>
                    <td><?php echo $Producto ?></td>
                    <td><?php echo $Precio ?></td>
                    <td><?php echo $Talla ?></td>
                    <td><?php echo $productoD ?></td>
                    <td>

                  <a href="Pupdate.php?id=<?php echo $idProducto;?>" class="edit" title="Editar" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                  <a href="delete.php?id=<?php echo $idProducto;?>" class="delete" title="Eliminar" data.toogle="tooltip"><i class="material-icons">&#xE872;</i></a>
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