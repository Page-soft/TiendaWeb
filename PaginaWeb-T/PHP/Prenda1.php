<?php
    include "Header.php";
    ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit-no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../CCS/VistaPrenda.css">
    <title>Ropa Americana Banelly</title>
</head>
<body>
<?php
            include_once "db_conn.php";
            $connect_db = mysqli_connect ($sname, $uname,$password, $bd_name);
            if ($connect_db!=true){
                die("Error de conexion".mysqli_connect_error());
            }
            $sql = "SELECT `idProducto`, `Producto`, `Precio`, `Talla`, `productoD`, `imagenes_url` FROM `producto` WHERE idProducto = ".$_GET['id'];
            $resultado=mysqli_query($connect_db,$sql);
            while($row=mysqli_fetch_row($resultado)){
            
            ?>
    <div class="containerA">
        <div class="row">
        <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <img src="<?php echo $row[5]; ?>" class="card-img-top" alt="image-responsive" >
        <div class="container-body">
            <h5 class="card-title"><?php echo $row[1]." ".$row[2]; ?></h5>
            <p class="card-text">Talla: <?php echo $row[3]; ?> </p>
            <p class="card-text">Detalle de producto: <?php echo $row[4]; ?> </p>
            <a href="#" class="btn btn-primary">Comprar</a>
            </div>
        </div>
        </div>  
    </div>
<?php } ?>
                    
                    <button type="button" class="btn btn-warning">Comprar</button>
                    <button type="button" class="btn btn-warning">Agregar al carrito</button> 
</div>
</div>
</div>
</body>
<?php
    include "Footer.php";
    ?>
</html>