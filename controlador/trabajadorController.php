<?php
require "modelo/trabajador.php";
class TrabajadorController{
    public static function editar($id){
        $trabajador = new Trabajador();
        $datos = $trabajador->mostrarInformacionTrabajador($id);
        
        echo json_encode($datos);
    }
    public static function listar(){
        $trabajador = new Trabajador();
        $datos = $trabajador->obtenerTrabajadores();
        echo json_encode($datos);
    }

    public static function insertar(){
        $_nombre_trabajador = $_POST['nombreTrabajador'];
        $_apellido_paterno = $_POST['apellidoPaterno'];
        $_apellido_materno = $_POST['apellidoMaterno'];
        $_tipo_documento = $_POST['tipoDocumentoIdentidad'];
        $_numero_documento = $_POST['numeroDocumentoIdentidad'];
        $_sexo = $_POST['sexo'];
        $_fecha_nacimiento = $_POST['fechaNacimiento'];
        $_departamento = $_POST['departamento'];
        $_provincia = $_POST['provincia'];
        $_distrito = $_POST['distrito'];
        $_direccionExacta = $_POST['direccionExacta'];

        $trabajador = new Trabajador();
        $data      = [$_nombre_trabajador,$_apellido_paterno,$_apellido_materno,$_tipo_documento,$_numero_documento,$_sexo,
                        $_fecha_nacimiento, $_departamento, $_provincia,$_distrito, $_direccionExacta];
        $accion    = $trabajador->insertar($data);
    }

    public static function modificar($id_trabajador){ 
        $_nombre_trabajador = $_POST['nombreTrabajador'];
        $_apellido_paterno = $_POST['apellidoPaterno'];
        $_apellido_materno = $_POST['apellidoMaterno'];
        $_tipo_documento = $_POST['tipoDocumentoIdentidad'];
        $_numero_documento = $_POST['numeroDocumentoIdentidad'];
        $_sexo = $_POST['sexo'];
        $_fecha_nacimiento = $_POST['fechaNacimiento'];
        $_departamento = $_POST['departamento'];
        $_provincia = $_POST['provincia'];
        $_distrito = $_POST['distrito'];
        $_direccionExacta = $_POST['direccionExacta'];

        $trabajador = new Trabajador();
        $data      = [$id_trabajador,$_nombre_trabajador,$_apellido_paterno,$_apellido_materno,$_tipo_documento,$_numero_documento,$_sexo,
                        $_fecha_nacimiento, $_departamento, $_provincia,$_distrito, $_direccionExacta];
        $accion    = $trabajador->modificar($data);
    }
    public static function eliminar($id_trabajador){
        $trabajador = new Trabajador();
        $data   = [$id_trabajador];
        $accion = $trabajador->eliminar($data);
    }
    public static function validarNumeroDocumento($numero_documento_identidad){
        $trabajador = new Trabajador();
        $data   = [$numero_documento_identidad];
        $accion = $trabajador->validarNumeroDocumento($data);
        die($accion);
        echo json_encode($accion);

    }
  
}           
?>