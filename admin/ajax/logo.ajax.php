<?php 
require_once "../controladores/logo.controlador.php";
require_once "../modelos/logo.modelo.php";

class AjaxLogos{
    /**========================
     * EDITAR LOGO
     =========================*/

     public $idLogo;
     public function ajaxEditarLogos(){
        $campo = 'id';
        $item = $this->idLogo; 
    

        $respuesta = ControladorLogos::ctrMostrarLogos($item, $campo);
        echo json_encode($respuesta);
     }

}

if(isset($_POST['idLogo'])){
    $editar = new AjaxLogos();
    $editar-> idLogo = $_POST['idLogo'];
    $editar->ajaxEditarLogos();
}

