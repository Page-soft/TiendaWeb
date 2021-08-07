<?php
 
     $sname = "localhost";
     $uname = "root";
     $password = "";
     $bd_name = "my_bd";

     $conn =  mysqli_connect ($sname,$uname,$password,$bd_name);

     if(!$conn){
         echo "Conexion Fallida";
         exit();
     }
?>