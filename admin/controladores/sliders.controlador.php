<?php

class ControladorSliders
{
    /**
     * MOSTRAR SLIDERS
     */
    static public function ctrMostrarSliders($item, $campo)
    {
        $tabla = 'sliders';
        
        $respuesta = ModeloSliders::mdlMostrarSliders($tabla, $item, $campo);
        return $respuesta;
    }
    /**
     * CREAR SLIDDERS
     */
    static public function ctrCrearSliders()
    {
        
        if (isset($_FILES['slider1'])) {
            if ( !empty($_FILES['slider1']['tmp_name']))
             {
                $directorio = 'vistas/img/slider';
                $nuevo_ancho = 3600;
                $nuevo_alto = 900;

                $slider1 = ControladorSliders :: guardarImagen($_FILES['slider1'], $directorio, $nuevo_ancho, $nuevo_alto);
             
              
                $tabla = 'sliders';
                
                $parametros = [
                    'slider1' => $slider1,  
                      
                ];

                
                $respuesta =  ModeloSliders::mdIgresarSliders($tabla, $parametros);
                if ($respuesta == "ok") {
                    echo '<script>
                    swal({
                        type: "success",
                        title: "Noticia Guardada correctamente",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                        }).then(function(result){
                            if(result.value){
                                window.location ="sliders";
                             }                        
                        });
                    </script>';
                } else {
                    echo '<script>
                    swal({
                        type: "error",
                        title: "La noticia no se guardo",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                        }).then(function(result){
                            if(result.value){
                                window.location ="sliders";
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
                                window.location ="sliders";
                             }                        
                        });
                    </script>'; 
            }
        }
    }
   

    /**
     * ===========================================
     * EDITAR SLIDERRS
     * ===========================================
     */

     static public function ctrEditarSliders(){
     
        if (isset($_POST["fotoactual"])) {
   
           
            $slider1 = $_POST["fotoactual"];
            $directorio = 'vistas/img/slider';
   
                if(isset($_FILES['editarnuevoslider']['tmp_name']) && !empty($_FILES['editarnuevoslider']['tmp_name'])){
                
                    $nuevoancho = 3600;
                    $nuevoalto = 900;
                    $slider1 = ControladorSliders :: guardarImagen($_FILES['editarnuevoslider'], $directorio, $nuevoancho, $nuevoalto);  
                }
               // var_dump($fotonota);
     
                $tabla = 'sliders';
                $id = $_POST['editarid'];
                
                 
                $parametros = [
                     'id' => $id,
                     'slider1' => $slider1,    
                ];
                
                $respuesta =  ModeloSliders::mdIEdtarSliders($tabla, $parametros, $id);
                if ($respuesta == "ok") {
                    echo '<script>
                    swal({
                        type: "success",
                        title: "Slider Guardado correctamente",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                        }).then(function(result){
                            if(result.value){
                                window.location ="sliders";
                             }                        
                        });
                    </script>';
                } else {
                    echo '<script>
                    swal({
                        type: "error",
                        title: "Slider no se guardo",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                        }).then(function(result){
                            if(result.value){
                                window.location ="sliders";
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
                    if($imagen['type'] == 'image/svg+xml'){
                        /**
                         * Guardamos la imagen en el directorio
                         */

                         $aleatorio = mt_rand(100, 999);
                         $ruta = $directorio.'/'.$aleatorio.'.svg';

                         $origen = imagecreatefrompng($imagen['tmp_name']);
                         $destino = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);

                         imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
                         imagepng($destino, $ruta);

                    }
                    return $ruta;
      }
     
     
}
