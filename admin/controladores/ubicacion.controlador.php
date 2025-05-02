<?php

class ControladorUbicaciones
{
    /**
     * MOSTRAR UBICACION
     */
    static public function ctrMostrarUbicaciones($item, $campo)
    {
        $tabla = 'ubicacion';
        
        $respuesta = ModeloUbicaciones::mdlMostrarUbicaciones($tabla, $item, $campo);
        return $respuesta;
    }

    /**
     * ===========================================
     * EDITAR UBICACION
     * ===========================================
     */

     static public function ctrEditarUbicacion(){

        if (isset($_POST["editarnombre_negocio"])) {

                $tabla = 'ubicacion';
                $id = $_POST['editarid'];
                
                 
                $parametros = [
                    'nombre_negocio' => $_POST['editarnombre_negocio'],
                    'direccion' => $_POST['editardireccion'],
                    'telefono' => $_POST['editartelefono'],
                    'horario' => $_POST['editarhorario'],
                    'urlmapa' => $_POST['editarurlmapa'],
                ];
                
                $respuesta =  ModeloUbicaciones::mdIEdtarUbicaciones($tabla, $parametros, $id);
                if ($respuesta == "ok") {
                    echo '<script>
                    swal({
                        type: "success",
                        title: "Ubicacion Guardada correctamente",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                        }).then(function(result){
                            if(result.value){
                                window.location ="ubicacion";
                             }                        
                        });
                    </script>';
                } else {
                    echo '<script>
                    swal({
                        type: "error",
                        title: "La ubicacion no se guardo",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                        }).then(function(result){
                            if(result.value){
                                window.location ="ubicacion";
                             }                        
                        });
                    </script>';
                }
            
        }
     }   
}
