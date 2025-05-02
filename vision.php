<?php 
    include_once "admin/controladores/nosotros.controlador.php";
    include_once "admin/modelos/nosotros.modelo.php";

    $item = 1;
    $campo = 'id';

    $respuesta = ControladorNosotros::ctrMostrarNosotros($item, $campo);
?>

<div class="container contenedor-nosotros">
    <img src="admin/<?=$respuesta['foto'] ?>" alt="imagen tienda">
    <div class="secciones">
        <h2>¿Quiénes somos?</h2>
        <h6><?=$respuesta['somos'] ?><h6>

        <h2>Mision</h2>
        <h6><?=$respuesta['mision'] ?></h6>

        <h2>Vision</h2>
        <h6><?=$respuesta['vision'] ?></h6>
        
    </div>
</div>