<?php
    include_once "admin/controladores/ubicacion.controlador.php";
    include_once "admin/modelos/ubicacion.modelo.php";

    $item = 4;
    $campo = 'id';

    $respuesta = ControladorUbicaciones::ctrMostrarUbicaciones($item, $campo);
?>

<main>
        <div class="contenedor-ubicacion thasadith-regular">       
                <div class="cont-1">
                
                    <p class="oswald-uniquifier">Florería Samantha</p>
                    <div class="divisor"></div>
                    
                    <div class="calle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" color="currentColor"><path d="M13.618 21.367A2.37 2.37 0 0 1 12 22a2.37 2.37 0 0 1-1.617-.633C6.412 17.626 1.09 13.447 3.685 7.38C5.09 4.1 8.458 2 12.001 2s6.912 2.1 8.315 5.38c2.592 6.06-2.717 10.259-6.698 13.987"/><path d="M9.388 7.831c.939-.548 1.758-.327 2.25.025c.202.144.303.216.362.216c.06 0 .16-.072.362-.216c.492-.352 1.311-.573 2.25-.025c1.232.72 1.51 3.094-1.33 5.097c-.542.381-.813.572-1.282.572s-.74-.19-1.281-.572C7.878 10.925 8.156 8.55 9.389 7.83"/></g></svg>
                        <p><?=$respuesta['direccion'] ?></p>
                    </div>
                    <div class="calle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.778 11.942C2.83 10.29 2.372 8.94 2.096 7.572c-.408-2.024.526-4.001 2.073-5.263c.654-.533 1.404-.35 1.791.343l.873 1.567c.692 1.242 1.038 1.862.97 2.52c-.069.659-.536 1.195-1.469 2.267zm0 0c1.919 3.346 4.93 6.36 8.28 8.28m0 0c1.653.948 3.002 1.406 4.37 1.682c2.024.408 4.001-.526 5.262-2.073c.534-.654.351-1.404-.342-1.791l-1.567-.873c-1.242-.692-1.862-1.038-2.52-.97c-.659.069-1.195.536-2.267 1.469z" color="currentColor"/></svg>
                        <p><?=$respuesta['telefono'] ?></p>
                    </div>
    
                    <div class="calle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 13h5m-8 0h.009M13 17H8m8 0h-.009M18 2v2M6 2v2m-3.5 8.243c0-4.357 0-6.536 1.252-7.89C5.004 3 7.02 3 11.05 3h1.9c4.03 0 6.046 0 7.298 1.354C21.5 5.707 21.5 7.886 21.5 12.244v.513c0 4.357 0 6.536-1.252 7.89C18.996 22 16.98 22 12.95 22h-1.9c-4.03 0-6.046 0-7.298-1.354C2.5 19.293 2.5 17.114 2.5 12.756zM3 8h18" color="currentColor"/></svg>
                        <P><?=$respuesta['horario'] ?></P> 
                    </div> 
                     
                </div>
                <div class="cont-2">
                <iframe src="<?=$respuesta['urlmapa'] ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>       
        </div>
    </main>