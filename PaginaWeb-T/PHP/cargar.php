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
        
    }else{
        echo "Por favor seleccione imagen a subir.";
    }
}
?>