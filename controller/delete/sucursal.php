<?php
require_once('../../model/conexion/conexion.php');
require_once('../../model/query/delete/delete.php');


function sucursal()
{

	$id = $_POST['id'];
	

	$model = new delete();
	
	
    $conexio = $model->sucursal($id);
    return $conexio;
	
}

echo sucursal();
