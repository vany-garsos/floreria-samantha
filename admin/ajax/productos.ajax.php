<?php 
require_once "../controladores/productos.controlador.php";
require_once "../modelos/productos.modelo.php";

class AjaxProductos{
    /**========================
     * EDITAR PRODUCTOS
     =========================*/

     public $idProducto;
     public function ajaxEditarProductos(){
        $campo = 'id';
        $item = $this->idProducto; 
    

        $respuesta = ControladorProductos::ctrMostrarProductos($item, $campo);
        echo json_encode($respuesta);
     }

     public function ajaxEliminarProductos(){
        $campo = 'id';
        $item = $this->idProducto; 
        $tabla= 'productos';
        $respuesta = ModeloProductos::MdlEliminarProductos($item, $campo, $tabla);
        return $respuesta;
     }
}

if(isset($_POST['idProducto'])){
    $editar = new AjaxProductos();
    $editar-> idProducto = $_POST['idProducto'];
    $editar->ajaxEditarProductos();
}

if(isset($_POST['eliminarProducto'])){
    $eliminar = new AjaxProductos();
    $eliminar-> idProducto = $_POST['eliminarProducto'];
    $eliminar->ajaxEliminarProductos();
}

