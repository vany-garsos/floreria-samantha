<?php

class ControladorNosotros
{
    /**
     * MOSTRAR NOSOTROS
     */
    static public function ctrMostrarNosotros($item, $campo)
    {
        $tabla = 'nosotros';
        
        $respuesta = ModeloNosotros::mdlMostrarNosotros($tabla, $item, $campo);
        return $respuesta;
    }

    /**
     * ===========================================
     * EDITAR NOSOTROS
     * ===========================================
     */

     static public function ctrEditarNosotros(){

        if (isset($_POST["editarsomos"])) {
            //var_dump($_POST);
            
            $fotolugar = $_POST["fotoactual"];
            $directorio = 'vistas/img/fotolugar';
           // var_dump($fotonota);

            
                if(isset($_FILES['editarnuevaFoto']['tmp_name']) && !empty($_FILES['editarnuevaFoto']['tmp_name'])){
                
                    $nuevoancho = 570;
                    $nuevoalto= 760;

                    $fotolugar = ControladorNosotros :: guardarImagen($_FILES['editarnuevaFoto'], $directorio, $nuevoancho, $nuevoalto);  
                }
     
                $tabla = 'nosotros';
                $id = $_POST['editarid'];
                
                 
                $parametros = [
                    'somos' => $_POST['editarsomos'],
                    'vision' => $_POST['editarvision'],
                    'mision' => $_POST['editarmision'],
                    'valores' => $_POST['editarvalores'],
                    'foto' => $fotolugar,          
                ];
                
                $respuesta =  ModeloNosotros::mdIEdtarNosotros($tabla, $parametros, $id);
                if ($respuesta == "ok") {
                    echo '<script>
                    swal({
                        type: "success",
                        title: "Seccion nosotros Guardado correctamente",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                        }).then(function(result){
                            if(result.value){
                                window.location ="nosotros";
                             }                        
                        });
                    </script>';
                } else {
                    echo '<script>
                    swal({
                        type: "error",
                        title: "Seccion nosotros no se guardo",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                        }).then(function(result){
                            if(result.value){
                                window.location ="nosotros";
                             }                        
                        });
                    </script>';
                }
            
        }
     }
     /***============================================
      * FUNCION PARA PROCESAR Y GUARDAR IMAGENES
      *==============================================
      */

      public static function guardarImagen($imagen, $directorio, $nuevo_ancho, $nuevo_alto){

        list($ancho, $alto) = getimagesize($imagen["tmp_name"]);
                   
           
                    /*
                    ==============================================================
                    creamos el directorio donde vamos a guardar la foto de usuario
                    ==============================================================
                    */

                    if(!file_exists($directorio)){
                        mkdir($directorio, 0755);
                    }
                    

                    /**
                     * de acuerdo al tipo de imagen, recortamos
                     */
                    if($imagen['type'] == 'image/jpeg'){
                        /**
                         * Guardamos la imagen en el directorio
                         */

                         $aleatorio = mt_rand(100, 999);
                         $ruta = $directorio.'/'.$aleatorio.'.jpg';

                         $origen = imagecreatefromjpeg($imagen['tmp_name']);
                         $destino = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);

                         imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
                         imagejpeg($destino, $ruta);

                    }
                    if($imagen['type'] == 'image/png'){
                        /**
                         * Guardamos la imagen en el directorio
                         */

                         $aleatorio = mt_rand(100, 999);
                         $ruta = $directorio.'/'.$aleatorio.'.png';

                         $origen = imagecreatefrompng($imagen['tmp_name']);
                         $destino = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);

                         imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
                         imagepng($destino, $ruta);

                    }
                    return $ruta;
      }
     
     
}
