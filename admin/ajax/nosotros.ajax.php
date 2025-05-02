<?php 
require_once "../controladores/nosotros.controlador.php";
require_once "../modelos/nosotros.modelo.php";

class AjaxNosotros{
    /**========================
     * EDITAR NOSOTROS
     =========================*/

     public $idNosotros;
     public function ajaxEditarNosotros(){
        $campo = 'id';
        $item = $this->idNosotros; 
    

        $respuesta = ControladorNosotros::ctrMostrarNosotros($item, $campo);
        echo json_encode($respuesta);
     }
 
}

if(isset($_POST['idNosotros'])){
    $editar = new AjaxNosotros();
    $editar-> idNosotros = $_POST['idNosotros'];
    $editar->ajaxEditarNosotros();
}


