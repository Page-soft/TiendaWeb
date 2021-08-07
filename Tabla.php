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
<div>
<?php
include "HeaderAdmin.php";
?>

</div>

</head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Listado de  <b>Registo</b></h2></div>
                    <div class="col-sm-4">
                        <a href="create.php" class="btn btn-info add-new"><i class="fa fa-plus"></i> Agregar cliente</a>
                        <a href="home.php" class="btn btn-info add-new"></i> Perfil</a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Correo</th>
                        <th>Telefono</th>
						<th>Direccion</th>
                        <th>Contraseña</th>
                        <th>Nombre Usuario</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                    <?php
                    include ('database.php');
                    $cliente = new Database();
                    $listado = $cliente->read();
                    ?>
                <tbody>
                    <?php
                        while ($row = mysqli_fetch_object($listado)){
                            $idUsuario     = $row->id;
                            $Nombre        = $row->Nombre;
                            $Apellido      =$row->Apellido;
                            $Email         = $row->Correo;
                            $Telefono      = $row->Telefono;
                            $Direccion     = $row->Direccion;
                            $Contraseña    = $row->Contraseña;
                            $nombreU       = $row->nombreU;


                        
                    ?>
                    <tr>
                    <td><?php echo $idUsuario; ?></td>
                    <td><?php echo $Nombre; ?></td>
                    <td><?php echo $Email; ?></td>
                    <td><?php echo $Telefono; ?></td>
                    <td><?php echo $Direccion; ?></td>
                    <td><?php echo $Contraseña; ?></td>
                    <td><?php echo $nombreU; ?></td>
                    <td></td>
                    <td>
                        <a href="update.php?id=<?php echo $id;?>" class="edit" title="Editar" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                        <a href="delete.php?id=<?php echo $id;?>" class="delete" title="Eliminar" data.toogle="tooltip"><i class="material-icons">&#xE872;</i></a>
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