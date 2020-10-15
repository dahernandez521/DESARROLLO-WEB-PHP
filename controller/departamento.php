<?php 
require_once '../model/conexion/conexion.php';
require_once '../model/consultaAjax.php';

function getDepartment(){

	$queries = new queryAjax();
    //Genera consulta en la tabla user para obtener los usuarios
  $result=$queries->getDepartmentAjax();

  $Depertment = '<option class="form-control" value="0">Seleccione</option>';
  
  foreach ($result as $row ) {
  	$Depertment .= "<option value='$row[id_departaments]'>$row[name_departament]</option>";
  }
  return $Depertment;
}

echo getDepartment();