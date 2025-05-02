<?php

class ControladorLogos
{
    /**
     * MOSTRAR LOGO
     */
    static public function ctrMostrarLogos($item, $campo)
    {
        $tabla = 'logo';
        
        $respuesta = ModeloLogos::mdlMostrarLogos($tabla, $item, $campo);
        return $respuesta;
    }
    /**
     * ===========================================
     * EDITAR LOGO
     * ===========================================
     */

     static public function ctrEditarLogos(){

        if (isset($_FILES['editarnuevaFoto']['tmp_name'])) {
            
            $fotologo = $_POST["fotoactual"];
            $directorio = 'vistas/img/fotologos';

                if(isset($_FILES['editarnuevaFoto']['tmp_name']) && !empty($_FILES['editarnuevaFoto']['tmp_name'])){
                
                    $nuevoancho = 3300;
                    $nuevoalto= 1200;

                    $fotologo = ControladorLogos :: guardarImagen($_FILES['editarnuevaFoto'], $directorio, $nuevoancho, $nuevoalto);  
                }
     
                $tabla = 'logo';
                $id = $_POST['editarid'];
                
                 
                $parametros = [
                    'foto' => $fotologo       
                ];
            
              
                $respuesta =  ModeloLogos::mdIEdtarLogos($tabla, $parametros, $id);
              
                if ($respuesta == "ok") {
                    echo '<script>
                    swal({
                        type: "success",
                        title: "Logo Guardado correctamente",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                        }).then(function(result){
                            if(result.value){
                                window.location ="logo";
                             }                        
                        });
                    </script>';
                } else {
                    echo '<script>
                    swal({
                        type: "error",
                        title: "El logo no se guardo",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                        }).then(function(result){
                            if(result.value){
                                window.location ="logo";
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
