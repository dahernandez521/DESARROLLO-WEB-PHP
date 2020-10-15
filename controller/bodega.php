<?php 
require_once '../model/conexion/conexion.php';
require_once '../model/consultaAjax.php';

function getBodega(){

	$queries = new queryAjax();
    //Genera consulta en la tabla user para obtener los usuarios
  $result=$queries->getBodegaAjax();

  $Depertment = '<option value="0">Seleccione</option>';
  
  foreach ($result as $row ) {
  	$Depertment .= "<option value='$row[idBodega]'>$row[name]_$row[idBodega]</option>";
  }
  return $Depertment;
}

echo getBodega();