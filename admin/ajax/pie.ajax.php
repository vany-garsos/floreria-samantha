<?php 
require_once "../controladores/pieDePagina.controlador.php";
require_once "../modelos/pieDePagina.modelo.php";

class AjaxPies{
    /**========================
     * EDITAR PIES
     =========================*/

     public $idPie;
     public function ajaxEditarPies(){
        $campo = 'id';
        $item = $this->idPie;
        $respuesta = ControladorPies::ctrMostrarPies($item, $campo);
        echo json_encode($respuesta);
     }

}

if(isset($_POST['idPie'])){
    $editar = new AjaxPies();
    $editar-> idPie = $_POST['idPie'];
    $editar->ajaxEditarPies();
}


