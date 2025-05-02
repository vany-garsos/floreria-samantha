<?php
include_once 'header.php';
require_once "admin/controladores/productos.controlador.php";
require_once "admin/modelos/productos.modelo.php";

$id = $_GET['id'];
$campo = 'id';
$respuesta = ControladorProductos::ctrMostrarProductos($id, $campo);
?>

<div class="container mt-4">
    <div class="row">
        <div class="cont-image col-12 col-md-6 text-center">
            <img src="admin/<?= $respuesta['foto'] ?>" alt="imagen producto">
        </div>
        <div class="col-12 col-md-6">
            <h1><?=$respuesta['titulo']?></h1>
            <h5>Categoría: <?=$respuesta['categoria']?></h5>
            <h5 class="mt-5"><?=$respuesta['descripcion']?></h5>
            <h4>$ <?=$respuesta['precio']?></h4>
                <a class="btn boton mt-5" href="index.php">Regresar</a>
        </div>
    </div>
</div>

<?php
include_once 'footer.php';
?>