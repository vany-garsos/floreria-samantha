<?php 
require_once "../controladores/ubicacion.controlador.php";
require_once "../modelos/ubicacion.modelo.php";

class AjaxUbicaciones{
    /**========================
     * EDITAR UBICACION
     =========================*/

     public $idUbicacion;
     public function ajaxEditarUbicaciones(){
        $campo = 'id';
        $item = $this->idUbicacion; 
        $respuesta = ControladorUbicaciones::ctrMostrarUbicaciones($item, $campo);
        echo json_encode($respuesta);
     }
}

if(isset($_POST['idUbicacion'])){
    $editar = new AjaxUbicaciones();
    $editar-> idUbicacion = $_POST['idUbicacion'];
    $editar->ajaxEditarUbicaciones();
}



