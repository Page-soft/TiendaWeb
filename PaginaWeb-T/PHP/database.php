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


        
        public function Cusuario($Nombre,$Apellido,$Correo,$Telefono,$Domicilio,$Contrasena){
            $sql = "INSERT INTO `usuario` (Nombre,Apellido,Correo,Telefono,Domicilio,Contrasena) VALUES ('$Nombre','$Apellido','$Correo','$Telefono','$Domicilio','$Contrasena')"; 
            $res = mysqli_query($this->con, $sql);
            if ($res){
                return true;
            }
            else{
                return false;
            }
        }

    
        public function altaP($Producto, $Precio, $Talla, $productoD,$imagenes){
            $sql = "INSERT INTO `producto` (Producto, Precio, Talla, productoD,imagenes_url) VALUES ('$Producto', '$Precio', '$Talla', '$productoD','$imagenes')";
            $res = mysqli_query($this->con, $sql);
            if ($res){
                return true;
            }
            else{
                return false;
            }
        }
        


        public function read(){
            $sql = "SELECT * FROM usuario";
            $res = mysqli_query($this->con,$sql);
            return $res;        

        
       }

       public function Cread(){
            $sql = "SELECT * FROM usuario";
            $res = mysqli_query($this->con,$sql);
            return $res;        

        
       }
       public function Csingle_record($id){
           $sql = "SELECT * FROM usuario where id='$id'";
           $res = mysqli_query($this->con,$sql);
           $return = mysqli_fetch_object($res );
           return $return;
       } 

       public function single_record($id){
           $sql = "SELECT * FROM usuario where id='$id'";
           $res = mysqli_query($this->con,$sql);
           $return = mysqli_fetch_object($res );
           return $return;
       } 

        public function Cupdate($Nombre,$Apellido,$Correo,$Telefono,$Domicilio,$Contrasena,$id){
           $sql = "UPDATE usuario SET Nombre='$Nombre',Apellido='$Apellido',Correo='$Correo',Telefono='$Telefono',Domicilio='$Domicilio',Contrasena='$Contrasena' WHERE id='$id'";
           $res = mysqli_query($this->con,$sql);
           if ($res) {
               return true;
           }
           else{
               return false;
           }
       }


       public function update($nombres,$apellido,$direccion,$correo_electronico,$telefono,$id){
           $sql = "UPDATE usuario SET nombres='$nombres',apellido='$apellido',telefono='$telefono,direccion='$direccion'correo_electronico='$correo_electronico' WHERE id='$id'";
           $res = mysqli_query($this->con,$sql);
           if ($res) {
               return true;
           }
           else{
               return false;
           }
       }

       public function delete($id){
           $sql = "DELETE From usuario Where id=$id";
           $res = mysqli_query($this->con,$sql);
           if ($res ) {
               return true;
           }
           else{
               return false;
           }
       }


    }
