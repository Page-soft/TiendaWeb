<?php
    if(isset($_GET['id'])){
    include ('database.php');
    $clientes = new Database();
    $id = intval($_GET['id']);
    $res = $clientes->Udelete($id);
    if ($res ){
        header('location: TablaU.php');
    }
    else
    {
        echo "Error al eliminar registro";
    }
}
?> 