<?php
    include "HeaderPS.php";
    ?>
<head>
    <title>Ropa Americana Banelly</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit-no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../CCS/Estilos.css">
</head>
<body>
    <!--Carrucel-->
    <div class="slider">
        <link rel="stylesheet" href="../CCS/Estilos.css">
        <ul>
            <li><img src="../Imagenes/Banner 1.jpg" width="452px" height="679px" alt=""></li>
            <li><img src="../Imagenes/Banner 2.jpg" width="452px" height="679px" alt="" ></li>
            <li><img src="../Imagenes/Banner 3.jpg" width="452px" height="679px"alt=""></li>
        </ul>
    </div>

    <!--Tabla de productos-->
    <div class="card mt-12">
        <?php
            include_once "db_conn.php";
            $connect_db = mysqli_connect ($sname, $uname,$password, $bd_name);
            if ($connect_db!=true){
                die("Error de conexion".mysqli_connect_error());
            }
            $sql = "SELECT `idProducto`, `Producto`, `Precio`, `Talla`, `productoD`, `imagenes_url` FROM `producto`";
            $resultado=mysqli_query($connect_db,$sql);
            while($row=mysqli_fetch_row($resultado)){
            
            ?>
        <div class="col-4">
        <div class="card">
        <img src="<?php echo $row[5]; ?>" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title"><?php echo $row[1]." ".$row[2]; ?></h5>
        <p class="card-text">Talla: <?php echo $row[3]; ?> </p>
        <p class="card-text">Detalle de producto: <?php echo $row[4]; ?> </p>
        <a href="#" class="btn btn-primary">Comprar</a>
            </div>
        </div>
    </div>  
</div>
<?php } ?>
    <?php
    
    include "Footer.php";
    ?>
</body>
