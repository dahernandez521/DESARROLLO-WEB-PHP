<?php

require_once('../../model/conexion/conexion.php');
require_once('../../model/query/create/registro.php');


$name = trim(ucwords(strtolower($_POST['name'])));
$lastname = trim(ucwords(strtolower($_POST['lastname'])));
$type = trim($_POST['type']);
$document = trim($_POST['document']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);
$nitTienda = trim($_POST['nitTienda']);
$rol = trim($_POST['rol']);
$municipality = trim($_POST['municipality']);
$cellphone = trim($_POST['cellphone']);
$address = trim($_POST['address']);




$model = new getUser();

$result1 = $model->getUsuarios($email);
$result2 = $model->getUsuariosTwo($document);

if (isset($result1)) {

    $vista = "el email ya se encuentra registrado_../view/RegistrarPersonas.php";
} else if (isset($result2)) {

    $vista = "el documento ya se encuentra registrado_../view/RegistrarPersonas.php";
} else {
    $password = md5($password);
    $consulta = $model->inserUsuarios($name, $lastname, $type, $document, $email, $password, $nitTienda, $rol, $municipality, $cellphone, $address);

    $vista = $consulta;
}

echo $vista;
return $vista;
