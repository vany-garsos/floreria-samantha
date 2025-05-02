<?php

class ControladorProductos
{
    /**
     * MOSTRAR PRODUCTOS
     */
    static public function ctrMostrarProductos($item, $campo)
    {
        $tabla = 'productos';

        $respuesta = ModeloProductos::mdlMostrarProductos($tabla, $item, $campo);
        return $respuesta;
    }
    /**
     * CREAR PRODUCTOS
     */
    static public function ctrCrearProductos()
    {

        if (isset($_POST["titulo"])) {
            if (
                !empty($_POST['titulo'] && !empty($_POST['precio']) && !empty($_POST['categoria']) && !empty($_POST['tipo'])
                 && !empty($_POST['descripcion']) && !empty($_FILES['foto']['tmp_name']))
            ) {
                $directorio = 'vistas/img/fotoproductos';

                $nuevo_ancho = 1000;
                $nuevo_alto = 1250;

                $fotoproducto = ControladorProductos::guardarImagen($_FILES['foto'], $directorio, $nuevo_ancho, $nuevo_alto);



                $tabla = 'productos';

                $parametros = [
                    'titulo' => $_POST['titulo'],
                    'precio' => $_POST['precio'],
                    'categoria' => $_POST['categoria'],
                    'tipo' => $_POST['tipo'],
                    'descripcion' => $_POST['descripcion'],
                    'foto' => $fotoproducto,
                ];


                $respuesta =  ModeloProductos::mdIgresarProductos($tabla, $parametros);
                if ($respuesta == "ok") {
                    echo '<script>
                    swal({
                        type: "success",
                        title: "Producto Guardado correctamente",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                        }).then(function(result){
                            if(result.value){
                                window.location ="productos";
                             }                        
                        });
                    </script>';
                } else {
                    echo '<script>
                    swal({
                        type: "error",
                        title: "El producto no se guardo",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                        }).then(function(result){
                            if(result.value){
                                window.location ="productos";
                             }                        
                        });
                    </script>';
                }
            } else {
                echo '<script>
                    swal({
                        type: "error",
                        title: "No se admiten campos vacíos",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                        }).then(function(result){
                            if(result.value){
                                window.location ="productos";
                             }                        
                        });
                    </script>';
            }
        }
    }


    /**
     * ===========================================
     * EDITAR PRODUCTOS
     * ===========================================
     */

    static public function ctrEditarProductos()
    {

        if (isset($_POST["editartitulo"])) {

            $fotoproducto = $_POST["fotoactual"];
            $directorio = 'vistas/img/fotoproductos';

            if (isset($_FILES['editarnuevaFoto']['tmp_name']) && !empty($_FILES['editarnuevaFoto']['tmp_name'])) {

                $nuevoancho = 1000;
                $nuevoalto = 1250;

                $fotoproducto = ControladorProductos::guardarImagen($_FILES['editarnuevaFoto'], $directorio, $nuevoancho, $nuevoalto);
            }

            $tabla = 'productos';
            $id = $_POST['editarid'];


            $parametros = [
                'titulo' => $_POST['editartitulo'],
                'precio' => $_POST['editarprecio'],
                'categoria' => $_POST['editarcategoria'],
                'tipo' => $_POST['editartipo'],
                'descripcion' => $_POST['editardescripcion'],
                'foto' => $fotoproducto,
            ];

            $respuesta =  ModeloProductos::mdIEdtarProductos($tabla, $parametros, $id);
            if ($respuesta == "ok") {
                echo '<script>
                    swal({
                        type: "success",
                        title: "Producto Guardado correctamente",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                        }).then(function(result){
                            if(result.value){
                                window.location ="productos";
                             }                        
                        });
                    </script>';
            } else {
                echo '<script>
                    swal({
                        type: "error",
                        title: "El producto no se guardo",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                        }).then(function(result){
                            if(result.value){
                                window.location ="productos";
                             }                        
                        });
                    </script>';
            }
        }
    }

    static public function ctrBuscarProductoCategoria()
    {

        $validos = "/^[a-zA-Z]+$/";
        if (isset($_POST['tipo']) && !empty($_POST['tipo'])) {

            if (preg_match($validos, $_POST["tipo"])) {
                $tabla = 'productos';
                $tipo = $_POST['tipo'];

                $res = ModeloProductos::mdlBuscarProductoCategoria($tabla, $tipo);
                return $res;
            } 
        } 
    }


    static public function ctrBuscarProductoBoton()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['categoria']) && !empty($_POST['categoria'])) {
                $tabla = 'productos';
                $categoria = $_POST['categoria'];
                $res = ModeloProductos::mdlBuscarProductoBoton($tabla, $categoria);
                return $res;
            }
        }
    }


    /***============================================
     * FUNCION PARA PROCESAR Y GUARDAR IMAGENES
     *==============================================
     */

    public static function guardarImagen($imagen, $directorio, $nuevo_ancho, $nuevo_alto)
    {

        list($ancho, $alto) = getimagesize($imagen["tmp_name"]);


        /*
                    ==============================================================
                    creamos el directorio donde vamos a guardar la foto de usuario
                    ==============================================================
                    */

        if (!file_exists($directorio)) {
            mkdir($directorio, 0755);
        }


        /**
         * de acuerdo al tipo de imagen, recortamos
         */
        if ($imagen['type'] == 'image/jpeg') {
            /**
             * Guardamos la imagen en el directorio
             */

            $aleatorio = mt_rand(100, 999);
            $ruta = $directorio . '/' . $aleatorio . '.jpg';

            $origen = imagecreatefromjpeg($imagen['tmp_name']);
            $destino = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);

            imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
            imagejpeg($destino, $ruta);
        }
        if ($imagen['type'] == 'image/png') {
            /**
             * Guardamos la imagen en el directorio
             */

            $aleatorio = mt_rand(100, 999);
            $ruta = $directorio . '/' . $aleatorio . '.png';

            $origen = imagecreatefrompng($imagen['tmp_name']);
            $destino = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);

            imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
            imagepng($destino, $ruta);
        }
        return $ruta;
    }
}
