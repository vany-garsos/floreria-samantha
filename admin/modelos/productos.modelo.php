<?php



require_once "conexion.php";

class ModeloProductos{
    /**Mostrar productos */
    static public function mdlMostrarProductos($tabla, $item, $campo){
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
     * CREAR PRODUCTOS
     */
    static public function mdIgresarProductos($tabla,$parametros){
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
    static public function mdIEdtarProductos($tabla, $parametros, $id){
    
        
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

     static public function MdlEliminarProductos($item, $campo, $tabla){
        $query = Conexion::start()->prepare("DELETE from {$tabla} WHERE $campo = '$item'");
        if ($query->execute()) {
            return "ok";
        }else{
            return "error";
        }
        $query->close();
        $query=null;
     }

      /***
     * BUSCADOR POR TIPO DE FLOR 
     */
    static public function mdlBuscarProductoCategoria($tabla, $tipo)
    {
        $query = Conexion::start()->prepare("
            SELECT * FROM {$tabla} WHERE tipo LIKE :tipo
        ");

        $tipo = "%$tipo%"; 
        $query->bindParam(':tipo', $tipo, PDO::PARAM_STR);

        if ($query->execute()) {
            return $query->fetchAll(PDO::FETCH_OBJ);
        } else {
            return "error";
        }

        $query->close();
        $query = null;
    }

      /***
     * CATEGORIA EN BOTONES
     */
    static public function mdlBuscarProductoBoton($tabla, $categoria)
    {
        $query = Conexion::start()->prepare("
            SELECT * FROM {$tabla} WHERE categoria = :categoria
        ");
        
        $query->bindParam(':categoria', $categoria, PDO::PARAM_STR);

        if ($query->execute()) {
            return $query->fetchAll(PDO::FETCH_OBJ);
        } else {
            return "error";
        }

        $query->close();
        $query = null;
    }
}