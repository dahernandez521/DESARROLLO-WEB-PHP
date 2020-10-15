<?php

require_once('../../model/conexion/conexion.php');
require_once('../../model/query/create/registro.php');
session_start();
$nitTienda =$_SESSION['nitEmpresa'];
$name = trim(ucwords(strtolower($_POST['name'])));
$municipality = trim($_POST['municipality']);
$address = trim($_POST['address']);
$email = trim($_POST['email']);
$cellphone = trim($_POST['cellphone']);
$idBodega= trim($_POST['idBodega']);





$model = new getUser();
//$result1 = $model->getNit($nitTienda);
$result2 = $model->getEmail($email);
$result3 = $model->getCellphone($cellphone);


 if (isset($result2)) {

    $vista = "El EMAIL ya se encuentra registrado_../view/supervisorGeneral.php";
} else if (isset($result3)) {

    $vista = "El numero de TELEFONO ya se encuentra registrado_../view/supervisorGeneral.php";
} else {
    $consulta = $model->inserSucursal($nitTienda, $name, $municipality, $address, $email, $cellphone,$idBodega);

    $vista = $consulta;
}

echo $vista;
return $vista;
