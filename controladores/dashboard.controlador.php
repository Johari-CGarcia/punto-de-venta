<?php
class DashboardControlador{
    static public function ctrGetDatosDashboard(){
        $datos = DashboardModel::mdlGetDatosDashboard();
        return $datos;
    }

    static public function ctrGetVentasMesActual(){
        $ventasMesActual = DashboardModel::mdlGetVentasMesActual();
        return $ventasMesActual;        
    }

    static public function ctrProductosMasVendidos(){
        $productosMasVendidos = DashboardModel::mdlGetproductosMasVendidos();
        return $productosMasVendidos;        
    }
    
    static public function ctrProductosPocoStock(){
        $productosPocoStock = DashboardModel::mdlGetProductosPocoStock();
        return $productosPocoStock;        
    }

    static public function ctrProductosVendidosEsteMes(){
        $productosVendidosEnElMes = DashboardModel::mdlGetProductosVendidosEnElMes();
        return $productosVendidosEnElMes;        
    }

    static public function ctrProductosVendidos(){
        $productosVendidos = DashboardModel::mdlGetProductosVendidos();
        return $productosVendidos;        
    }
    
}
?>

