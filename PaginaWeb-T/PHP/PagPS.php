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
    <!--Carrucel-->
    <div class="slider">
        <link rel="stylesheet" href="../CCS/Estilos.css">
        <ul>
            <li><img src="../Imagenes/Banner 1.jpg" width="452px" height="800px" alt=""></li>
            <li><img src="../Imagenes/Banner 2.jpg" width="452px" height="800px" alt="" ></li>
            <li><img src="../Imagenes/Banner 3.jpg" width="452px" height="800px"alt=""></li>
        </ul>
    </div>
    <!--Tabla de productos-->
    <div class="main-content"></div>
        <div class="container-ropa"></div>
            <img src="../Imagenes/ropa.jpeg" width="1040px" alt=""></div>
            <div class="Main-content">
        <?php
            include_once "db_conn.php";
            $connect_db = mysqli_connect ($sname, $uname,$password, $bd_name);
            if ($connect_db!=true){
                die("Error de conexion".mysqli_connect_error());
            }
            $sql = "SELECT `idProducto`, `Producto`, `Precio`, `Talla`, `productoD`, `imagenes_url` FROM `producto`";
            $resultado=mysqli_query($connect_db,$sql);
            $i = 0;
            $j = 0;
            while($j<$resultado->num_rows){
                if($i == 0){
                    echo '<div class="card-group">';
                }
                if($i < 3){ 
                	while($row = mysqli_fetch_row($resultado)){
                    echo "<div class='card'>";
                    echo "<img src='".$row[5]."' class='card-img-top' alt='image-responsive'>";    
                    echo "<div class='card-body'>";
                    echo "<h5 class='card-title'>".$row[1]."-".$row[2]."</h5>";
                    echo "<p class='card-text'>Talla: ".$row[3]."</p><p> This content is a little bit longer.</p>";   
                    echo "<p class='card-text'>Detalle de producto:".$row[4]."</p>";
                    echo "<form action='Prenda1.php' method = 'POST'>";
                    echo "<input type = 'hidden' value='".$row[0]."' id = 'idProducto'>";
                    echo "<button class='btn btn-primary'>Comprar</button></form>";
                    echo "</div>";
                    echo "</div>";
               	 }
                 	$j++;
                  $i++;
                }
                if($i == 3){
                  $i = 0;
                  echo "</div><br>";
                }
            }
            if($j == 9){
            	echo "</div><br>";
            }

            ?>
        </div>
    </div>
</body>
<?php
include "Footer.php";
?>