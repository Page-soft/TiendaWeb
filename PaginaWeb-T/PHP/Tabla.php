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
                    <div class="col-sm-8"><h2>Lista de  <b>Registo</b></h2></div>
                    <div class="col-sm-4">
                        <a href="createU.php" class="btn btn-info add-new"><i class="fa fa-plus"></i> Agregar cliente</a>
                        <a href="home.php" class="btn btn-info add-new"></i> Perfil</a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Roles</th>
                        <th>Correo</th>
                        <th>Contraseña</th>
                        <th>Nombre</th>
                        <th>Acciones</th>

                    </tr>
                </thead>
                    <?php
                    include ('database.php');
                    $cliente = new Database();
                    $listado = $cliente->Eread();
                    ?>
                <tbody>
                    <?php
                        while ($row = mysqli_fetch_object($listado)){
                            $idEmpleado     = $row->id;
                            $roles        = $row->roles;
                            $username      =$row->username;
                            $psswd         = $row->psswd;
                            $nombre      = $row->nombre;
                            
                            


                        
                    ?>
                    <tr>
                    <td><?php echo $idEmpleado ?></td>
                    <td><?php echo $roles ?></td>
                    <td><?php echo $username ?></td>
                    <td><?php echo $psswd ?></td>
                    <td><?php echo $nombre ?></td>
                    <td>
                        <a href="Update.php?id=<?php echo $idEmpleado;?>" class="edit" title="Editar" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                        <a href="delete.php?id=<?php echo $idEmpleado;?>" class="delete" title="Eliminar" data.toogle="tooltip"><i class="material-icons">&#xE872;</i></a>
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