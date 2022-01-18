<?php
    require "config.php";
    $page = "index";
    $id = "";
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    if(isset($_GET['opcion'])){
        $opcion = $_GET['opcion'];
    }
    switch($page){
        case 'trabajador':
            require "controlador/TrabajadorController.php";
            if(isset($_GET['opcion'])):
                $metodo = $_GET['opcion'];
                if(method_exists('TrabajadorController',$metodo)):
                    TrabajadorController::{$metodo}($id);
                endif;
            else:
                TrabajadorController::form_welcome();
            endif;
            break;
        default:
            require "controlador/IndexController.php";
            IndexController::index();
            break; 
    }

?>