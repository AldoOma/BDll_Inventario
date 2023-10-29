<?php
    class Conexion{

        private $servidor ="localhost";
        private $usuario = "root";
        private $contrasenia = "";
        private $database = "inventario_sistematico";
        private $conexion;

        public function __construct(){
            try{
            
                $this->conexion = new PDO("mysql:host=$this->servidor;dbname=$this->database",$this->usuario,$this->contrasenia);
                $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            }catch(PDOException $error){
                echo "Error: ".$error;
            }
        }

        public function mostrarDatos($query){
            $resultado = $this->conexion->prepare($query);
            $resultado->execute();
            return $resultado->fetchAll();//devuelve todos los registros
        }
        
    }
?>