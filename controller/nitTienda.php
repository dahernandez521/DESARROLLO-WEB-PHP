<?php
require_once '../model/conexion/conexion.php';
require_once '../model/consultaAjax.php';

function getTienda()
{

    $queries = new queryAjax();
    //Genera consulta en la tabla user para obtener los usuarios
    $result = $queries->getTiendaAjax();

    $Depertment = '<option class="form-control" value="">Seleccione</option>';

    foreach ($result as $row) {
        $Depertment .= "<option  value='$row[nit]'>$row[name] Nit: $row[nit]</option>";
    }
    return $Depertment;
}

echo getTienda();
?>