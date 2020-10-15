<?php
    require_once ('../../model/conexion/conexion.php');
    require_once ('../../model/query/create/registro.php');
    

    $idBodega=$_POST['idBodega'];
    $nitTienda=$_POST['nitTienda'];
    $name=$_POST['name'];
    $description=$_POST['description'];
    $precioCompra=$_POST['precioCompra'];
    $precioVenta=$_POST['precioVenta']; 
    $stock=$_POST['stock'];

    $model = new getUser();
    $consulta = $model->inserProducto($idBodega, $nitTienda, $name, $description,$precioCompra,$precioVenta,$stock);

    $vista= $consulta;
    // $vista='holamundo';
    echo $vista;
    return $vista;


?>
