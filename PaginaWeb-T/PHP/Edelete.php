<?php
    if(isset($_GET['id'])){
    include ('database.php');
    $clientes = new Database();
    $id = intval($_GET['id']);
    $res = $clientes->delete($id);
    if ($res ){
        header('location: TablaE.php');
    }
    else
    {
        echo "Error al eliminar registro";
    }
}
?> 