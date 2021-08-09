<?php
    if(isset($_GET['id'])){
    include ('database.php');
    $clientes = new Database();
    $id = intval($_GET['id']);
    $res = $clientes->Pdelete($id);
    if ($res ){
        header('location: inventario.php');
    }
    else
    {
        echo "Error al eliminar registro";
    }
}
?> 