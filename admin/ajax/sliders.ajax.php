<?php 
require_once "../controladores/sliders.controlador.php";
require_once "../modelos/sliders.modelo.php";

class AjaxSlider{
    /**========================
     * EDITAR SLIDER
     =========================*/

     public $idSlider;
     public function ajaxEditarSlider(){
        $campo = 'id';
        $item = $this->idSlider; 
    

        $respuesta = ControladorSliders::ctrMostrarSliders($item, $campo);
        echo json_encode($respuesta);
     }

     public function ajaxEliminarSliders(){
        $campo = 'id';
        $item = $this->idSlider; 
        $tabla= 'sliders';
        $respuesta = ModeloSliders::MdlEliminarSliders($item, $campo, $tabla);
        return $respuesta;
     }
}

if(isset($_POST['idSlider'])){
    $editar = new AjaxSlider();
    $editar-> idSlider = $_POST['idSlider'];
    $editar->ajaxEditarSlider();
}

if(isset($_POST['eliminarSlider'])){
    $eliminar = new AjaxSlider();
    $eliminar-> idSlider = $_POST['eliminarSlider'];
    $eliminar->ajaxEliminarSliders();
}

