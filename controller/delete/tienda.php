<?php
require_once('../../model/conexion/conexion.php');
require_once('../../model/query/delete/delete.php');


function tienda()
{

	$id = $_POST['id'];
	

	$model = new delete();
	
	$model->sucursalTienda($id);
    $conexio = $model->tienda($id);
    return $conexio;
	
}

echo tienda();
