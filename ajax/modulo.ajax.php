<?php

require_once "../controladores/modulo.controlador.php";
require_once "../modelos/modulo.modelo.php";

class AjaxModulos{

    public function ajaxObtenerModulos(){

        $modulos = ModuloControlador::ctrObtenerModulos();

        echo json_encode($modulos);
    }

    public function ajaxObtenerModulosPorPerfil($id_perfil){

        $modulosPerfil = ModuloControlador::ctrObtenerModulosPorPerfil($id_perfil);

        echo json_encode($modulosPerfil);
    }

    public function ajaxObtenerModulosSistema(){

        $modulosSistema = ModuloControlador::ctrObtenerModulosSistema();

        echo json_encode($modulosSistema);
    }

    public function ajaxReorganizarModulos($modulos_ordenados){

        $modulosOrdenados = ModuloControlador::ctrReorganizarModulos($modulos_ordenados);

        echo json_encode($modulosOrdenados);
    }

}

if(isset($_POST['accion']) && $_POST['accion'] == 1){ //
    $modulos = new AjaxModulos;
    $modulos->ajaxObtenerModulos();
}else if(isset($_POST['accion']) && $_POST['accion'] == 2){ // Solicitud para obtener modulos por perfil
    $modulosPerfil = new AjaxModulos();
    $modulosPerfil->ajaxObtenerModulosPorPerfil($_POST["id_perfil"]);
}else if(isset($_POST['accion']) && $_POST['accion'] == 3){ // Solicitud para obtener modulos del sistema
    $modulosSistema = new AjaxModulos();
    $modulosSistema->ajaxObtenerModulosSistema();
}else if(isset($_POST['accion']) && $_POST['accion'] == 4){ // Solicitud para reorganizar los modulos del sistema
    $organizar_modulos = new AjaxModulos();
    $organizar_modulos->ajaxReorganizarModulos($_POST["modulos"]);
}