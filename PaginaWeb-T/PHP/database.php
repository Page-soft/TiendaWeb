<?php

    class Database{
        private $con;
        private $dbhost = "localhost";
        private $dbuser = "root";
        private $dbpass = "";
        private $dbname = "integradora1";
        function  __construct(){
            $this->connect_db();
        } 


        public function connect_db(){
            $this->con = mysqli_connect($this->dbhost,$this->dbuser,$this->dbpass,$this->dbname);

            if(mysqli_connect_error()){
                die("Conexión a la base de datos falló".mysqli_connect_error().mysqli_connect_errno());
            }
        }

        public function sanitize($var){
            $return = mysqli_real_escape_string($this->con,$var);
            return $return;
        }

        public function Psanitize($var){
            $return = mysqli_real_escape_string($this->con,$var);
            return $return;
        }



        
        public function createE($roles,$username,$psswd,$name){
            $sql = "INSERT INTO `users` (roles,username,psswd,name) VALUES ('$roles','$username','$psswd','$name')"; 
            $res = mysqli_query($this->con, $sql);
            if ($res){
                return true;
            }
            else{
                return false;
            }
        }

        public function Altausuarios($username,$psswd,$name){
            $sql = "INSERT INTO `users` (username,psswd,name) VALUES ('$username','$psswd','$name')"; 
            $res = mysqli_query($this->con, $sql);
            if ($res){
                return true;
            }
            else{
                return false;
            }
    }
        public function altaP($Producto, $Precio, $Talla, $productoD,$imagenes,$idCategoria,$idSubCategoria){
            $sql = "INSERT INTO `producto` (Producto, Precio,Talla,productoD,imagenes_url,idCategoria,idSubCategoria) VALUES ('$Producto','$Precio','$Talla','$productoD','$imagenes','$idCategoria','$idSubCategoria')";
            $res = mysqli_query($this->con, $sql);
            if ($res){
                return true;
            }
            else{
                return false;
            }
        }
        
       public function Eread(){
            $sql = "SELECT * FROM usuario";
            $res = mysqli_query($this->con,$sql);
            return $res; 
        
       }
       public function Pread(){
            $sql = "SELECT * FROM producto";
            $res = mysqli_query($this->con,$sql);
            return $res; 
        
       }
       
       public function Csingle_record($id){
           $sql = "SELECT * FROM usuario where id='$id'";
           $res = mysqli_query($this->con,$sql);
           $return = mysqli_fetch_object($res);
           return $return;
       } 

       public function Psingle_record($idProducto){
           $sql = "SELECT * FROM producto where idProducto='$idProducto'";
           $res = mysqli_query($this->con,$sql);
           $return = mysqli_fetch_object($res);
           return $return;
       } 

        public function Eupdate($Nombre,$Apellido,$Correo,$Telefono,$Domicilio,$Contrasena,$id){
           $sql = "UPDATE users SET Nombre='$Nombre',Apellido='$Apellido',Correo='$Correo',Telefono='$Telefono',Domicilio='$Domicilio',Contrasena='$Contrasena' WHERE id='$id'";
           $res = mysqli_query($this->con,$sql);
           if ($res) {
               return true;
           }
           else{
               return false;
           }
       }

       public function Pupdate($Producto,$Precio,$Talla,$productoD,$idCategoria,$idSubCategoria,$idProducto){
           $sql = "UPDATE producto SET Producto='$Producto',Precio='$Precio',Talla='$Talla',productoD='$productoD',idCategoria='$idCategoria',idSubCategoria='$idSubCategoria' WHERE idProducto='$idProducto'";
           $res = mysqli_query($this->con,$sql);
           if ($res) {
               return true;
           }
           else{
               return false;
           }
       }

       public function delete($id){
           $sql = "DELETE From users Where id=$id";
           $res = mysqli_query($this->con,$sql);
           if ($res ) {
               return true;
           }
           else{
               return false;
           }
       }

        public function Pdelete($idProducto){
           $sql = "DELETE From producto Where idProducto=$idProducto";
           $res = mysqli_query($this->con,$sql);
           if ($res ) {
               return true;
           }
           else{
               return false;
           }
       }


    }
