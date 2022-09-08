<?php
require_once "../controladores/dashboard.controlador.php";
require_once "../modelos/dashboard.modelo.php";

class AjaxDashboard{
    public function getDatosDashboard(){
        
        $datos = DashboardControlador::ctrGetDatosDashboard();
        echo json_encode($datos);
    }

    public function getVentasMesActual(){
        $ventasMesActual = DashboardControlador::ctrGetVentasMesActual();
        echo json_encode($ventasMesActual);
    }

    public function getproductosMasVendidos(){
        $productosMasVendidos = DashboardControlador::ctrProductosMasVendidos();
        echo json_encode($productosMasVendidos);   
    }

    public function getProductosPocoStock(){
        $productosPocoStock = DashboardControlador::ctrProductosPocoStock();
        echo json_encode($productosPocoStock);   
    }

    public function getProductosVendidosEsteMes(){
        $productosVendidosEsteMes = DashboardControlador::ctrProductosVendidosEsteMes();
        echo json_encode($productosVendidosEsteMes);   
    }
    
    public function getProductosVendidos(){
        $productosVendidos = DashboardControlador::ctrProductosVendidos();
        echo json_encode($productosVendidos);   
    }
}

if (isset($_POST['accion']) && $_POST['accion'] == 1) { //Ejecutar function venta del mes (Grafica)
    
    $ventasMesActual = new AjaxDashboard();
    $ventasMesActual -> getVentasMesActual();

}else if (isset($_POST['accion']) && $_POST['accion'] == 2) { //Ejecutar function de 10 productos mas vendidos
    
    $productosMasVendidos = new AjaxDashboard();
    $productosMasVendidos -> getProductosMasVendidos();
    
}else if (isset($_POST['accion']) && $_POST['accion'] == 3) { //Ejecutar function productos con poco stock
    
    $productosPocoStock = new AjaxDashboard();
    $productosPocoStock -> getProductosPocoStock();
    
}else if (isset($_POST['accion']) && $_POST['accion'] == 4) { //Ejecutar function cantidad de productos vendidos en el mes
    
    $productosVendidosEsteMes = new AjaxDashboard();
    $productosVendidosEsteMes -> getProductosVendidosEsteMes();
    
}else if (isset($_POST['accion']) && $_POST['accion'] == 5) { //Ejecutar function grafica de todos los productos vendidos 
    
    $productosVendidos = new AjaxDashboard();
    $productosVendidos -> getProductosVendidos();
    
}else{ 
$datos = new AjaxDashboard();
$datos -> getDatosDashboard();
}
?>
