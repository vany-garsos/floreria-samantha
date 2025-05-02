<?php

require_once "conexion.php";

class ModeloUbicaciones{
    /**Mostrar ubicaciones */
    static public function mdlMostrarUbicaciones($tabla, $item, $campo){
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
     * EDITAR UBICACIONES
     */
    static public function mdIEdtarUbicaciones($tabla, $parametros, $id){
    
        
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
}