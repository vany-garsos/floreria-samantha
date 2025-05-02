<?php 
    include_once "admin/controladores/pieDePagina.controlador.php";
    include_once "admin/modelos/pieDePagina.modelo.php";

    $item = 1;
    $campo = 'id';

    $respuesta = ControladorPies::ctrMostrarPies($item, $campo);

?>
<footer class="footer-distributed">
        <div class="footer-left">
            <h5>Contáctanos</h5>
            <p><?=$respuesta['direccion'] ?></p>
            <p>Tel. <?=$respuesta['telefono'] ?></p>
            <p><?=$respuesta['correo'] ?></p>
            <p><?=$respuesta['horario'] ?></p>
        </div>

        <div class="footer-center">
            <br>
            <div>
                <h5>Social</h5>
                <a href="<?=$respuesta['link_facebook'] ?>">Facebook</a>
                <a href="<?=$respuesta['link_instagram'] ?>">Instagram</a>
                <a href="<?=$respuesta['link_whatsapp'] ?>" target="_blank">WhatsApp</a>

            </div>
        </div>

        <div class="footer-right">
            <p>
            <?=$respuesta['frase'] ?>
            </p>
            <h6 class="footer-company-name">&#169 2025 <strong>foreriasamanta.com</strong></h6>
        </div>
    </footer>

    <script src="js/app.js"></script>
    <!------------Librería Swipper------------------->
    <script src="node_modules/swiper/swiper-bundle.min.js"></script>
    <!------------Bootstrap------------------->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!--------Iniciar swipper------------------->
    <script src="js/swiper.js"></script>
</body>

</html>