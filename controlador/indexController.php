<?php
    require "modelo/trabajador.php";
    class IndexController{
        public static function index(){
            $trabajador = new Trabajador();
            $datos = $trabajador->obtenerTrabajadores();
            require "vista/formIndex.php";
        }
    }
?>