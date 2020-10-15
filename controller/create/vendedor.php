<?php

require_once('../../model/conexion/conexion.php');
require_once('../../model/query/read/consulta.php');
require_once('../../model/query/create/registro.php');
session_start();

$id=$_POST['id'];
$cantidad = $_POST['cantidad'];





$model = new consulta();

$result = $model->producto($id);



foreach ($result as $f) {
    $name=$f['name'];
    $precio=$f['precioVenta'];
}
$precioT=$precio*$cantidad;
$model = new getUser();


$consulta = $model->registerFactura($_SESSION['tienda'],$_SESSION['document'],$precio,$precioT,"19%");



$vista=$consulta;


echo $vista;
return $vista;
