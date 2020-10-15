<?php

require_once('../../model/conexion/conexion.php');
require_once('../../model/query/create/registro.php');

$nit = trim($_POST['nit']);
$name = trim(ucwords(strtolower($_POST['name'])));
$municipality = trim($_POST['municipality']);
$address = trim($_POST['address']);
$email = trim($_POST['email']);
$cellphone = trim($_POST['cellphone']);
$supervisor= trim($_POST['supervisor']);





$model = new getUser();

$result1 = $model->getNit($nit);
$result2 = $model->getEmail($email);
$result3 = $model->getCellphone($cellphone);


if (isset($result1)) {

    $vista = "El numero de NIT no esta disponible";
} else if (isset($result2)) {

    $vista = "El EMAIL ya se encuentra registrado";
} else if (isset($result3)) {

    $vista = "El numero de TELEFONO ya se encuentra registrado";
} else {
    $consulta = $model->inserTienda($nit, $name, $municipality, $address, $email, $cellphone, $supervisor);

    $vista = $consulta;
}

echo $vista;
return $vista;
