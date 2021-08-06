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
        public function create($nombres,$apellidos,$direccion,$telefono,$correo_electronico){
            $sql = "INSERT INTO `clientes` (nombres,apellidos,direccion,telefono,correo_electronico) VALUES ('$nombres','$apellidos','$direccion','$telefono','$correo_electronico')"; 
            $res = mysqli_query($this->con, $sql);
            if ($res){
                return true;
            }
            else{
                return false;
            }
        }
        public function usuario($Nombre,$Apellidos,$Correo,$Telefono,$Direccion,$Contraseña,$nombreU){
            $sql = "INSERT INTO `usuario` (Nombre,Apellidos,Correo,Telefono,Direccion,Contraseña,nombreU) VALUES ('$Nombre','$Apellidos','$Correo','$Telefono','$Contraseña','$nombreU')"; 
            $res = mysqli_query($this->con, $sql);
            if ($res){
                return true;
            }
            else{
                return false;
            }
        }

    
        public function altaP($Producto, $Precio, $Talla, $productoD){
            $sql = "INSERT INTO `producto` (Producto, Precio, Talla, productoD) VALUES ('$Producto', '$Precio', '$Talla', '$productoD')";
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

       public function single_record($id){
           $sql = "SELECT * FROM usuarios where id='$id'";
           $res = mysqli_query($this->con,$sql);
           $return = mysqli_fetch_object($res );
           return $return;
       } 

       public function update($nombres,$apellido,$direccion,$correo_electronico,$telefono,$id){
           $sql = "UPDATE clientes SET nombres='$nombres',apellido='$apellido',telefono='$telefono,direccion='$direccion'correo_electronico='$correo_electronico' WHERE id='$id'";
           $res = mysqli_query($this->con,$sql);
           if ($res) {
               return true;
           }
           else{
               return false;
           }
       }

       public function delete($id){
           $sql = "DELETE From clientes Where id=$id";
           $res = mysqli_query($this->con,$sql);
           if ($res ) {
               return true;
           }
           else{
               return false;
           }
       }

    }
?>