<?php 
    include_once 'admin/controladores/sliders.controlador.php';
    include_once 'admin/modelos/sliders.modelo.php';
    $item = null;
    $campo = null;

    $sliders = ControladorSliders::ctrMostrarSliders($item, $campo);


?>
    
    <!-- Slider main container -->
    <div class="swiper swiper-hero">
        <!-- Additional required wrapper  -->
        <div class="swiper-wrapper">
            <!-- Slides -->
             <?php foreach ($sliders as $slider): ?>
                <div class="swiper-slide"><img src="admin/<?=$slider->slider1?>" alt="imagen slider"></div>
             <?php endforeach ?>
           
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
    </div>
  <!--------------------------------------------------------------
    ================-main================------------>
    <main class="mt-3">