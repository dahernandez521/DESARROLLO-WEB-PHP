<?php

function cargarTiendas()
{


	$queries = new queriesMisas();
	//Genera consulta en la tabla user para obtener las tiendas
	$result = $queries->showTiendas();



	if (isset($result)) { //En caso de haya un error en la variable resultado

		foreach ($result as $f) {


			echo '
						<tr>
						<td>' . $f["nit"] . '</td>
						<td>' . $f["name"] . '</td>
                        <td>' . $f["nsupervisor"] . '</td>
                        <td>' . $f["address"] . '</td>
						<td>' . $f["email"] . '</td>
						<td>' . $f["cellphone"] . '</td>
					';
			if ($f["activo"] == false) {
				echo '
							<td>No</td>
							';
			} else {
				echo '
							<td>Si</td>
							';
            }
            
            echo '<td>' . $f["cellphone"] . '</td>';

			if ($f['disponibles'] < $f['total']) {
				echo '
							<td> <a href="reporte.php?id=' . $f["id"] . '">Ver</a> </td>';
			} else {
				echo '<td></td>';
			}
			echo '</tr>';
		} //end foreach
	} else {

		echo '

				<td></td>
            	<td></td>
            	<td></td>
            	<td></td>
            	<td></td>
            	<td></td>
            	<td></td>
            	<td></td>

            	';
	}; //end if

}//cierre de funcion cargarTiendas
