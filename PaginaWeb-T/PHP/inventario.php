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
<br>
<table border="4" >
  <tr>
    <td class="id">id</td>
    <td>Nombre Del Producto</td>
    <td>Precio Del Producto</td>
    <td>Descripcion</td>
    <td>Talla</td>
  </tr>

  <?php 
  $sql="SELECT * from producto";
  $result=mysqli_query($conexion,$sql);

  while($mostrar=mysqli_fetch_array($result)){
   ?>

  <tr>
    <td><?php echo $mostrar['idProducto'] ?></td>
    <td><?php echo $mostrar['Producto'] ?></td>
    <td><?php echo $mostrar['Precio'] ?></td>
    <td><?php echo $mostrar['productoD'] ?></td>
    <td><?php echo $mostrar['Talla'] ?></td>
  </tr>
<?php 
}
 ?>
</table>
<?php
    include "Footer.php";
    ?>
</body>
</html>