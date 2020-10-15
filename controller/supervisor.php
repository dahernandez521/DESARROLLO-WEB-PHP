<?php 
require_once '../model/conexion/conexion.php';
require_once '../model/consultaAjax.php';

function getSupervisor(){

	$queries = new queryAjax();
    //Genera consulta en la tabla user para obtener los usuarios
  $result=$queries->getSupervisorAjax("2","3");

  $Depertment = '<option class="form-control" value="0">Seleccione</option>';
  
  foreach ($result as $row ) {
  	$Depertment .= "<option value='$row[document]'>$row[name] $row[lastname]_$row[document]</option>";
  }
  return $Depertment;
}

echo getSupervisor();
?>