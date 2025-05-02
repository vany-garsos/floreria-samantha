<?php

class ControladorPies
{
    /**
     * MOSTRAR PIE DE PAGINA
     */
    static public function ctrMostrarPies($item, $campo)
    {
        $tabla = 'footer';
        
        $respuesta = ModeloPies::mdlMostrarPies($tabla, $item, $campo);
        return $respuesta;
    }

    /**
     * ===========================================
     * EDITAR PIE DE PAGINA
     * ===========================================
     */

     static public function ctrEditarPies(){

        if (isset($_POST["editardireccion"])) {
            //var_dump($_POST);
           
     
                $tabla = 'footer';
                $id = $_POST['editarid'];
                
                 
                $parametros = [
                    'direccion' => $_POST['editardireccion'],
                    'telefono' => $_POST['editartelefono'],
                    'correo' => $_POST['editarcorreo'],
                    'horario' => $_POST['editarhorario'],
                    'link_facebook' => $_POST['editarfacebook'],
                    'link_instagram' => $_POST['editarinstagram'],
                    'link_whatsapp' => $_POST['editarwhatsapp'],
                    'frase' => $_POST['editarfrase'],
                ];
                
                $respuesta =  ModeloProductos::mdIEdtarProductos($tabla, $parametros, $id);
                if ($respuesta == "ok") {
                    echo '<script>
                    swal({
                        type: "success",
                        title: "Pie de pagina Guardado correctamente",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                        }).then(function(result){
                            if(result.value){
                                window.location ="piepagina";
                             }                        
                        });
                    </script>';
                } else {
                    echo '<script>
                    swal({
                        type: "error",
                        title: "El pie de pagina no se guardo",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                        }).then(function(result){
                            if(result.value){
                                window.location ="piepagina";
                             }                        
                        });
                    </script>';
                }
            
        }
     }    
}
