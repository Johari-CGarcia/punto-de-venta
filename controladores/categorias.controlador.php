<?php

class CategoriasControlador{

    static public function ctrListarCategorias(){
        
        $categorias = CategoriasModelo::mdlListarCategorias();

        return $categorias;
  
    }

    static public function ctrGuardarCategoria($accion, $idCategoria, $categoria, $medida){

        $guardarCategoria = CategoriasModelo::mdlGuardarCategoria($accion, $idCategoria, $categoria, $medida);

        return $guardarCategoria;
    }

    static public function ctrEliminarCategoria($id){
        $respuesta = CategoriasModelo::mdlEliminarInformacion($id);
        
        return $respuesta;
    }
    /*static public function ctrEliminarCategoria($nombre_categoria){
        $respuesta = CategoriasModelo::mdlEliminarInformacion($nombre_categoria);
        
        return $respuesta;
    }*/
}