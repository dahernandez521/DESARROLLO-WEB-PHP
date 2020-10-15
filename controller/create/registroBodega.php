<?php
    require_once('../../model/conexion/conexion.php');
    require_once('../../model/query/create/registro.php');
    session_start();

    $nombre=trim(ucwords(strtolower($_POST['name'])));
    $municipio=trim($_POST['municipality']);
    $dirrecion=trim($_POST['address']);
    $email=trim($_POST['email']);
    $cellphone=trim($_POST['cellphone']);

    $model = new getUser();

    $consulta = $model->inserBodega($nombre, $municipio, $dirrecion, $email,$cellphone);

    $vista= $consulta;
    echo $vista;
    return $vista;

?>