<?php
 
     $sname = "localhost";
     $uname = "root";
     $password = "";
     $bd_name = "my_bd";
    
     try
{
	$db=new PDO("mysql:host={$sname};dbname={$bd_name}",$uname,$password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOEXCEPTION $e)
{
	$e->getMessage();
}

     $conn =  mysqli_connect ($sname,$uname,$password,$bd_name);

     if(!$conn){
         echo "Conexion Fallida";
         exit();
     }
     
?>