<?php
    require "modelo/conexion.php";
    class Trabajador{
        private $_db;
        public function __construct(){
            $this->_db = new Conexion();
        }

        public function obtenerTrabajadores(){
            $this->_db->conectar();
            $consulta = $this->_db->conexion->prepare("SELECT *FROM trabajador");
            $consulta -> execute();
            while($row=$consulta ->fetch(PDO::FETCH_OBJ)){
                $this->lista[]= $row;
            }
            $this->_db->desconectar();
            return $this->lista;
        }
        public function mostrarInformacionTrabajador($id){
            $this->_db->conectar();
            $consulta = $this->_db->conexion->prepare("SELECT *FROM trabajador WHERE trabajador.id = $id");
            $consulta -> execute();
            while($row=$consulta ->fetch(PDO::FETCH_OBJ)){
                $this->lista[]= $row;
            }
            $this->_db->desconectar();
            return $this->lista;
        }

        public function insertar($data){  
            $this->_db->conectar();
            $consulta = $this->_db->conexion->query("INSERT trabajador VALUES(default,'$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]','$data[9]','$data[10]')");
            $consulta -> execute();
            $this->_db->desconectar();
            if($consulta)
                return true;
            else   
                return false;
        }

        public function modificar($data){
            $this->_db->conectar();
            $consulta = $this->_db->conexion->query("UPDATE trabajador SET nombre= '$data[1]', 	apellidoPaterno= '$data[2]', apellidoMaterno= '$data[3]', tipoDocumento= '$data[4]', numeroDocumento= '$data[5]', sexo= '$data[6]', fechaNacimiento= '$data[7]', departamento= '$data[8]', provincia= '$data[9]', distrito= '$data[10]', direccionExacta= '$data[11]'  WHERE trabajador.id='$data[0]'");
            $consulta -> execute();
            $this->_db->desconectar();
            
            if($consulta)
                return true;
            else   
                return false;
        }
        public function eliminar($data){
            $this->_db->conectar();
            $consulta = $this->_db->conexion->query("DELETE FROM trabajador WHERE trabajador.id ='$data[0]'");
            $consulta -> execute();
            $this->_db->desconectar();
            if($consulta)
                return true;
            else   
                return false;
        }
        public function validarNumeroDocumento($data){
            $this->_db->conectar();
            $consulta = $this->_db->conexion->query("SELECT FROM trabajador WHERE trabajador.numeroDocumento ='$data[0]'");
            $consulta -> execute();
            $this->_db->desconectar();
            if($consulta ->fetch(PDO::FETCH_OBJ))
                return true;
            else   
                return false;
        }
    }