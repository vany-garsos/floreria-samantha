<?php



require_once "conexion.php";

class ModeloNosotros{
    /**Mostrar seccion nosotros */
    static public function mdlMostrarNosotros($tabla, $item, $campo){
        if ($item != null) {

            $query = Conexion::start()->prepare("SELECT * FROM $tabla WHERE $campo = '$item'"); 
            $query->execute();
            return $query->fetch();
        }else{
            $query = Conexion::start()->prepare("SELECT * FROM $tabla"); 
            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
        }        

        $query->close();
        $query = null;
    }
    /***
     * CREAR NOSOTROS
     */
    static public function mdIgresarNosotros($tabla,$parametros){
        $col = implode(', ',array_keys($parametros));
        $valores = ":". implode(', :',array_keys($parametros));  
        $query = Conexion::start()->prepare("INSERT INTO {$tabla} ({$col}) VALUES ({$valores})");
        if ($query->execute($parametros)) {
            return "ok";
        }else{
            return "error";
        }
        $query->close();
        $query = null;
    }
    /***
     * EDITAR PRODUCTOS
     */
    static public function mdIEdtarNosotros($tabla, $parametros, $id){
    
        
        $col = implode(', ',array_map(function($col){
            return "{$col} =:{$col}";
        }, array_keys($parametros)));
       // var_dump($col);

        $query = Conexion::start()->prepare("UPDATE {$tabla} SET {$col} WHERE id =:id");
        $parametros['id']= $id;
        if ($query->execute($parametros)) {
            return "ok";
        }else{
            return "error";
        }
        $query->close();
        $query=null;
    }

    /**============================================
     * ELIMINAR PRODUCTOS
     =========================================*/

     static public function MdlEliminarNosotros($item, $campo, $tabla){
        $query = Conexion::start()->prepare("DELETE from {$tabla} WHERE $campo = '$item'");
        if ($query->execute()) {
            return "ok";
        }else{
            return "error";
        }
        $query->close();
        $query=null;
     }
}