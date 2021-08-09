<?php
if(isset($_POST["submit"])){
    $revisar = getimagesize($_FILES["image"]["tmp_name"]);
    if($revisar !== false){
        $image = $_FILES['image']['tmp_name'];
        $url ="../Imagenes/". $_FILES['image']['name'];
        if (move_uploaded_file($image,$url)){
            echo $url;
        } else{
            echo 0;
        }
        /*$Host = 'localhost';
        $Username = 'root';
        $Password = '';
        $dbName = 'integradora1';
        $db = new mysqli($Host, $Username, $Password, $dbName);
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }       
        $insertar = $db->query("INSERT INTO `producto`(`imagenes_url`) VALUES ('".$url."')");
        if($insertar){
            echo "Archivo Subido Correctamente.";
        }else{
            echo "Ha fallado la subida, reintente nuevamente.";
        }*/ 
        
    }else{
        echo "Por favor seleccione imagen a subir.";
    }
}
?>