<?php
require_once "conexion.php";

class DashboardModel{
    static public function mdlGetDatosDashboard(){

        $stmt = Conexion::conectar()->prepare('call prc_ObtenerDatosDashboard()');

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    static public function mdlGetVentasMesActual(){
        $stmt = Conexion::conectar()->prepare('call prc_ObtenerVentasMesActual()');

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    static public function mdlGetproductosMasVendidos(){
        $stmt = Conexion::conectar()->prepare('call prc_ObtenerProductosMasVendidos()');

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    
    static public function mdlGetProductosPocoStock(){
        $stmt = Conexion::conectar()->prepare('call prc_ObtenerProductosPocoStock()');

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    static public function mdlGetProductosVendidosEnElMes(){
        $stmt = Conexion::conectar()->prepare('call prc_CantidadProductosVendidosMesActual()');

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    
    static public function mdlGetProductosVendidos(){
        $stmt = Conexion::conectar()->prepare('call prc_VentasPorProductoMesActual()');

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    
}
?>