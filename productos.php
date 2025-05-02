<?php
include_once 'admin/controladores/productos.controlador.php';
include_once 'admin/modelos/productos.modelo.php';


$productos = [];

//$productos = ControladorProductos::ctrBuscarProductoBoton();
if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST['tipo'])) {
    $productos = ControladorProductos::ctrBuscarProductoCategoria();
    if (!$productos) { 
        echo '<script>
        swal({
            type: "error",
            title: "No hay arreglos con ese tipo de flor",
            showConfirmButton: true,
            confirmButtonText: "Cerrar"
        }).then(function(result){
            if(result.value){
                window.location ="index.php";
            }                        
        });
        </script>';
        $item = null;
        $campo = null;
        $productos = ControladorProductos::ctrMostrarProductos($item, $campo);
    }
} else if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['categoria'])) {
    $productos = ControladorProductos::ctrBuscarProductoBoton();
    if (!$productos) {
        $item = null;
        $campo = null;
        $productos = ControladorProductos::ctrMostrarProductos($item, $campo);
    }
   
} else {
    $item = null;
    $campo = null;
    $productos = ControladorProductos::ctrMostrarProductos($item, $campo);
}


?>
<!------------------------------CATEGORIAS------------------------------------ -->
<div class="container">
    <div class="buttons-content d-flex justify-content-between">

    <form action="index.php?ruta=productos" method="POST">
            <input type="hidden" name="categoria" value="">
            <button type="submit" class="category-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 9c0-4.5 2-5 4-5c0 3-1.5 5-4 5m0 0c0-4.5-2-5-4-5c0 3 1.5 5 4 5m-2-5s.5-1.5 2-2c1.5.5 2 2 2 2m-2 5v6m0-2c.25-.667 1.2-2 3-2m-1.85 4h-2.3c-2.053 0-3.08 0-3.586.597c-.506.596-.224 1.473.34 3.227l.093.291c.444 1.38.666 2.07 1.256 2.473l.027.017C9.578 22 10.385 22 12 22s2.422 0 3.02-.395l.027-.017c.59-.402.812-1.093 1.256-2.473l.094-.29c.563-1.755.845-2.632.339-3.228C16.229 15 15.203 15 13.15 15" color="currentColor" />
                </svg>
                <p>Todos</p>
            </button>
        </form>

        <form action="index.php?ruta=productos" method="POST">
            <input type="hidden" name="categoria" value="buchones">
            <button type="submit" class="category-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5" color="currentColor">
                        <path d="M14.5 12.5a2.5 2.5 0 1 1-5 0a2.5 2.5 0 0 1 5 0" />
                        <path
                            d="M12 3c2.21 0 3.998 1.917 3.998 4.127Q16.48 7 17 7a4 4 0 0 1 1.712 7.616A4 4 0 1 1 12 18.938a4 4 0 1 1-6.712-4.322a4 4 0 0 1 2.714-7.49C8.002 4.918 9.791 3 12 3" />
                    </g>
                </svg>
                <p>Buchones</p>
            </button>
        </form>

        <form action="index.php?ruta=productos" method="POST">
            <input type="hidden" name="categoria" value="globos">
            <button type="submit" class="category-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5" color="currentColor">
                        <circle cx="12" cy="9" r="7" />
                        <path d="M10.008 7h-.01M9 18c1.5 0 3 1.462 3 4c0-2.538 1.5-4 3-4" />
                    </g>
                </svg>
                <p>Globos</p>
            </button>
        </form>


        <form action="index.php?ruta=productos" method="POST">
            <input type="hidden" name="categoria" value="billetes">
            <button type="submit" class="category-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5" color="currentColor">
                        <path
                            d="M12 19.5c-1.332.622-3.083 1-5 1c-1.066 0-2.08-.117-3-.327c-1.582-.363-2-1.293-2-2.787V6.614c0-.985 1.04-1.661 2-1.441c.92.21 1.934.327 3 .327c1.917 0 3.668-.378 5-1s3.083-1 5-1c1.066 0 2.08.117 3 .327c1.582.363 2 1.293 2 2.787v10.772c0 .985-1.04 1.661-2 1.441c-.92-.21-1.934-.327-3-.327c-1.917 0-3.668.378-5 1" />
                        <path d="M14.5 12a2.5 2.5 0 1 1-5 0a2.5 2.5 0 0 1 5 0m-9 1v.009m13-2.017v.01" />
                    </g>
                </svg>
                <p>Billetes</p>
            </button>
        </form>

        <form action="index.php?ruta=productos" method="POST">
            <input type="hidden" name="categoria" value="cumpleanos">
            <button type="submit" class="category-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5"
                        d="M4 11v4c0 3.3 0 4.95 1.025 5.975S7.7 22 11 22h2c3.3 0 4.95 0 5.975-1.025S20 18.3 20 15v-4M3 9c0-.748 0-1.122.201-1.4a1.4 1.4 0 0 1 .549-.44C4.098 7 4.565 7 5.5 7h13c.935 0 1.402 0 1.75.16c.228.106.417.258.549.44C21 7.878 21 8.252 21 9s0 1.121-.201 1.4a1.4 1.4 0 0 1-.549.44c-.348.16-.815.16-1.75.16h-13c-.935 0-1.402 0-1.75-.16a1.4 1.4 0 0 1-.549-.44C3 10.121 3 9.748 3 9m3-5.214C6 2.799 6.8 2 7.786 2h.357A3.857 3.857 0 0 1 12 5.857V7H9.214A3.214 3.214 0 0 1 6 3.786m12 0C18 2.799 17.2 2 16.214 2h-.357A3.857 3.857 0 0 0 12 5.857V7h2.786A3.214 3.214 0 0 0 18 3.786M12 11v11"
                        color="currentColor" />
                </svg>
                <p>Cumpleaños</p>
            </button>
        </form>

        <form action="index.php?ruta=productos" method="POST">
            <input type="hidden" name="categoria" value="graduaciones">
            <button type="submit" class="category-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5" color="currentColor">
                        <path
                            d="M19 10c-2.005-.632-4.412-1-7-1s-4.995.368-7 1v3.5c2.005-.632 4.412-1 7-1s4.995.368 7 1z" />
                        <path
                            d="M19 13v2.023c0 2.131-1.032 4.106-2.719 5.202l-1.4.91a5.23 5.23 0 0 1-5.762 0l-1.4-.91C6.032 19.13 5 17.155 5 15.023V13m14-3l1.126-.593C21.389 8.58 22.02 8.165 22 7.573c-.021-.592-.68-.952-1.997-1.672l-4.728-2.583C13.668 2.439 12.865 2 12 2s-1.668.44-3.275 1.318L3.998 5.9C2.68 6.621 2.02 6.981 2 7.573s.61 1.006 1.873 1.834L5 10" />
                    </g>
                </svg>
                <p>Graduaciones</p>
            </button>
        </form>

        <form action="index.php?ruta=productos" method="POST">
            <input type="hidden" name="categoria" value="valentin">
            <button type="submit" class="category-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5"
                        d="M19.463 3.994c-2.682-1.645-5.023-.982-6.429.074c-.576.433-.864.65-1.034.65s-.458-.217-1.034-.65C9.56 3.012 7.219 2.349 4.537 3.994C1.018 6.153.222 13.274 8.34 19.284C9.886 20.427 10.659 21 12 21s2.114-.572 3.66-1.717c8.118-6.008 7.322-13.13 3.803-15.289"
                        color="currentColor" />
                </svg>
                <p>San Valentín</p>
            </button>
        </form>

        <form action="index.php?ruta=productos" method="POST">
            <input type="hidden" name="categoria" value="chocolates">
            <button type="submit" class="category-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5" color="currentColor">
                        <path
                            d="m16.2 14.689l-6.889-6.89c-.462-.462-.693-.693-.978-.766a1 1 0 0 0-.322-.032c-.294.016-.566.197-1.11.56l-.139.093c-1.103.735-1.654 1.102-1.741 1.538c-.047.234-.014.477.092.69c.2.398.828.607 2.085 1.027c.404.134.606.202.76.33q.13.106.221.25c.108.169.15.377.233.795l.27 1.35c.136.68.204 1.02.434 1.25s.57.298 1.25.434l1.35.27c.418.083.626.125.796.233q.142.09.25.22c.127.155.195.357.33.761c.418 1.257.628 1.886 1.025 2.085c.214.106.457.139.69.092c.436-.087.804-.638 1.54-1.741l.092-.14c.363-.543.544-.816.56-1.11a1 1 0 0 0-.032-.32c-.073-.286-.304-.517-.766-.98" />
                        <path
                            d="m13.5 18l-1.774 1.856C10.296 21.286 9.58 22 8.693 22s-1.603-.715-3.032-2.144l-1.517-1.517C2.714 16.91 2 16.195 2 15.307s.715-1.603 2.144-3.033L6 10.5m3-2.792l3.646-3.646C14.02 2.687 14.708 2 15.563 2c.854 0 1.541.687 2.916 2.062l1.459 1.459C21.313 6.896 22 7.583 22 8.437s-.687 1.542-2.062 2.917L16.292 15M19.6 4.4l-7.2 7.2M12 4l8 8" />
                    </g>
                </svg>
                <p>Chocolates</p>
            </button>
        </form>


        <form action="index.php?ruta=productos" method="POST">
            <input type="hidden" name="categoria" value="aniversario">
            <button type="submit" class="category-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5" color="currentColor">
                        <path
                            d="M15.5 21.37A10 10 0 0 1 12 22C6.477 22 2 17.523 2 12S6.477 2 12 2c5.645 0 10.265 4.871 9.988 10.5" />
                        <path
                            d="M17 9.5a1.5 1.5 0 0 0-3 0M8.009 9H8m2 5c.742 0 2.215.284 2.832.796c.562.466-.909.858-.909 1.204s1.585.644.91 1.204c-.618.512-2.091.796-2.833.796m9.35-3.09c.856-.476 1.917-.139 2.404.79c.487.928.227 2.101-.576 2.679l-1.555.987c-.753.479-1.13.718-1.502.608s-.59-.526-1.026-1.356l-.9-1.712c-.433-.943-.126-2.104.716-2.638c.843-.534 1.913-.244 2.44.642" />
                    </g>
                </svg>
                <p>Aniversario</p>
            </button>
        </form>


        <form action="index.php?ruta=productos" method="POST">
            <input type="hidden" name="categoria" value="funeral">
            <button type="submit" class="category-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                    <path fill="none"
                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M14.236 5.292c0-.52 0-.78-.057-.993a1.68 1.68 0 0 0-1.186-1.186c-.562-.15-1.424-.15-1.986 0A1.68 1.68 0 0 0 9.82 4.299c-.057.213-.057.473-.057.993c0 1.054 0 3.817-.328 4.144c-.327.328-3.09.328-4.144.328c-.52 0-.78 0-.993.057a1.68 1.68 0 0 0-1.186 1.186c-.15.562-.15 1.425 0 1.986c.155.579.607 1.03 1.186 1.186c.213.057.473.057.993.057c1.054 0 3.817 0 4.144.327c.328.328.328.855.328 1.91c0 .519 0 3.015.057 3.228a1.68 1.68 0 0 0 1.186 1.186c.562.15 1.425.15 1.986 0a1.68 1.68 0 0 0 1.186-1.186c.057-.213.057-2.709.057-3.229c0-1.054 0-1.581.327-1.909c.328-.327 3.091-.327 4.145-.327c.52 0 .78 0 .993-.057a1.68 1.68 0 0 0 1.186-1.186c.15-.562.15-1.424 0-1.986A1.68 1.68 0 0 0 19.7 9.821c-.213-.057-.473-.057-.993-.057c-1.054 0-3.817 0-4.144-.328c-.328-.327-.328-3.09-.328-4.144" color="currentColor" />
                </svg>
                <p>Fúnebres</p>
            </button>
        </form>

        <form action="index.php?ruta=productos" method="POST">
            <input type="hidden" name="categoria" value="quince">
            <button type="submit" class="category-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" color="currentColor">
                        <path d="m15 4l-3 2l-3-2c-.586.51-1.93 1.293-1.997 2.146c-.029.37.126.571.435.975C8.112 8.002 9 8.521 9 10h6c0-1.48.888-1.998 1.562-2.879c.31-.404.464-.606.434-.975C16.93 5.293 15.587 4.509 15 4M9 4V2m6 2V2m-5.5 8h5m3.5 9c2 0 3-2.173 3-2.173c-2.825-1.836-4.5-3.993-5.413-5.622c-.347-.62-.521-.93-.755-1.068C14.598 10 14.285 10 13.659 10H10.34c-.626 0-.939 0-1.173.137s-.408.447-.755 1.068C7.5 12.834 5.825 14.99 3 16.827C3 16.827 4 19 6 19" />
                        <path d="M13.706 14c.34.796 1.815 2.671 3.435 4.31c.597.605.896.907.855 1.42c-.04.512-.29.683-.79 1.025C16.07 21.53 14.336 22 12 22s-4.07-.469-5.207-1.245c-.5-.342-.75-.513-.79-1.025c-.04-.513.259-.815.856-1.42c1.62-1.639 3.096-3.514 3.435-4.31" />
                    </g>
                </svg>
                <p>Quinceañeras</p>
            </button>
        </form>



    </div>
</div>

<!------------------------------PRODUCTOS------------------------------------ -->
<div class="container mt-4">

    <div class="row gx-4 gy-5">
        <?php
        if (!empty($productos)) {
            foreach ($productos as $producto): ?>
                <div class="col-6 col-md-4 col-lg-3 d-flex justify-content-center">
                    <div class="product mt-4">
                        <a href="descripcion.php?id=<?= $producto->id ?>">
                            <img src="admin/<?= $producto->foto ?>" alt="cke.jsp">
                            <h5><?= $producto->titulo ?></h5>
                            <p>$ <?= $producto->precio ?></p>
                        </a>

                    </div>
                </div>
            <?php endforeach ?>
        <?php    }  ?>

    </div>

</div>
</main>