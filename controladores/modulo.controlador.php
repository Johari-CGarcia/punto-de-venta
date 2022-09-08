<?php

class ModuloControlador{

    static public function ctrObtenerModulos(){

        $modulos = ModuloModelo::mdlObtenerModulos();

        return $modulos;
    }

    static public function ctrObtenerModulosPorPerfil($id_perfil){

        $modulosPorPerfil = ModuloModelo::mdlObtenerModulosPorPerfil($id_perfil);

        return $modulosPorPerfil;

    }
    /**Se usa para el modulo de mantenimiento de modulos*/
    static public function ctrObtenerModulosSistema(){

        $modulosSistema = ModuloModelo::mdlObtenerModulosSistema();

        return $modulosSistema;

    }

    static public function ctrReorganizarModulos($modulos_ordenados){

        $modulosOrdenados = ModuloModelo::mdlReorganizarModulos($modulos_ordenados);

        return $modulosOrdenados;

    }
}