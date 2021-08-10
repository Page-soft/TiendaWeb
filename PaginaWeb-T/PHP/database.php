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



        
        public function createE($roles,$username,$psswd,$nombre){
            $sql = "INSERT INTO `users` (roles,username,psswd,nombre) VALUES ('$roles','$username','$psswd','$nombre')"; 
            $res = mysqli_query($this->con, $sql);
            if ($res){
                return true;
            }
            else{
                return false;
            }
        }

        public function Altausuarios($username,$psswd,$nombre){
            $sql = "INSERT INTO `users` (username,psswd,nombre) VALUES ('$username','$psswd','$nombre')"; 
            $res = mysqli_query($this->con, $sql);
            if ($res){
                return true;
            }
            else{
                return false;
            }
    }
        public function altaP($Producto, $Precio, $Talla, $productoD,$imagenes,$nombreCategoria,$idSubCategoria){
            $sql = "INSERT INTO `producto` (Producto, Precio,Talla,productoD,imagenes_url,nombreCategoria,idSubCategoria) VALUES ('$Producto','$Precio','$Talla','$productoD','$imagenes','$nombreCategoria','$idSubCategoria')";
            $res = mysqli_query($this->con, $sql);
            if ($res){
                return true;
            }
            else{
                return false;
            }
        }
        
       public function Eread(){
            $sql = "SELECT * FROM users";
            $res = mysqli_query($this->con,$sql);
            return $res; 
        
       }
       public function Pread(){
            $sql = "SELECT * FROM producto";
            $res = mysqli_query($this->con,$sql);
            return $res; 
        
       }
       
       public function Esingle_record($id){
           $sql = "SELECT * FROM users where id='$id'";
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

        public function Eupdate($roles,$username,$psswd,$nombre,$id){
           $sql = "UPDATE users SET roles='$roles',username='$username',psswd='$psswd',nombre='$nombre' WHERE id='$id'";
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
