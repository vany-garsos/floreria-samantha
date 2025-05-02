<?php 
include_once "admin/controladores/productos.controlador.php";
include_once 'admin/modelos/productos.modelo.php';


    $productos = ControladorProductos::ctrBuscarProductoBoton();
  
 

?>    
    
    
    <!--------------------------------------------------------------
    ================-main================------------>
    
    <main class="mt-3">
        <div class="container">
            <div class="buttons-content d-flex justify-content-between">
                <button class="category-button">
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
                <button class="category-button" data-categoria="globos">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5" color="currentColor">
                            <circle cx="12" cy="9" r="7" />
                            <path d="M10.008 7h-.01M9 18c1.5 0 3 1.462 3 4c0-2.538 1.5-4 3-4" />
                        </g>
                    </svg>
                    <p>Globos</p>
                </button>
                <button class="category-button" data-categoria="billetes">
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
                <button class="category-button" data-categoria="cumpleaños">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5"
                            d="M4 11v4c0 3.3 0 4.95 1.025 5.975S7.7 22 11 22h2c3.3 0 4.95 0 5.975-1.025S20 18.3 20 15v-4M3 9c0-.748 0-1.122.201-1.4a1.4 1.4 0 0 1 .549-.44C4.098 7 4.565 7 5.5 7h13c.935 0 1.402 0 1.75.16c.228.106.417.258.549.44C21 7.878 21 8.252 21 9s0 1.121-.201 1.4a1.4 1.4 0 0 1-.549.44c-.348.16-.815.16-1.75.16h-13c-.935 0-1.402 0-1.75-.16a1.4 1.4 0 0 1-.549-.44C3 10.121 3 9.748 3 9m3-5.214C6 2.799 6.8 2 7.786 2h.357A3.857 3.857 0 0 1 12 5.857V7H9.214A3.214 3.214 0 0 1 6 3.786m12 0C18 2.799 17.2 2 16.214 2h-.357A3.857 3.857 0 0 0 12 5.857V7h2.786A3.214 3.214 0 0 0 18 3.786M12 11v11"
                            color="currentColor" />
                    </svg>
                    <p>Cumpleaños</p>
                </button>
                <button class="category-button" data-categoria="graduaciones">
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
                <button class="category-button" data-categoria="valentin">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5"
                            d="M19.463 3.994c-2.682-1.645-5.023-.982-6.429.074c-.576.433-.864.65-1.034.65s-.458-.217-1.034-.65C9.56 3.012 7.219 2.349 4.537 3.994C1.018 6.153.222 13.274 8.34 19.284C9.886 20.427 10.659 21 12 21s2.114-.572 3.66-1.717c8.118-6.008 7.322-13.13 3.803-15.289"
                            color="currentColor" />
                    </svg>
                    <p>San Valentín</p>
                </button>
                <button class="category-button" data-categoria="chocolates">
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
                <button class="category-button" data-categoria="aniversario">
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
                <button class="category-button" id="buchones">
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
                <button class="category-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5" color="currentColor">
                            <circle cx="12" cy="9" r="7" />
                            <path d="M10.008 7h-.01M9 18c1.5 0 3 1.462 3 4c0-2.538 1.5-4 3-4" />
                        </g>
                    </svg>
                    <p>Globos</p>
                </button>
                <button class="category-button">
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

            </div>
        </div>
