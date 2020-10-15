<?php
require_once '../model/consultaAjax.php';
require_once '../model/conexion/conexion.php';

function getMunicipality(){
  	
  
  $id = trim($_POST['id']);

  $queries = new queryAjax();
    //Genera consulta en la tabla user para obtener los usuarios
  $result=$queries->getMunicipalityAjax($id);
  
  $Municipality = '<option class="form-control" value="0">Seleccione</option>';
  
  foreach ($result as $row ) {
  	$Municipality .= "<option value='$row[id_municipality]'>$row[name_municipality]</option>";
  }
  return $Municipality;
}

echo getMunicipality(); 
?>