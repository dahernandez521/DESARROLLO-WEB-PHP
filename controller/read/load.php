<?php

function cargarTiendas()
{


	$queries = new queriesTiendas();
	//Genera consulta en la tabla user para obtener las tiendas
	$result = $queries->showTiendas();



	if (isset($result)) { //En caso de haya un error en la variable resultado

		foreach ($result as $f) {

			$queries = new queriesTiendas();
			//Genera consulta en la tabla user para obtener las tiendas
			$sucur = $queries->showMiSucursal($f["nit"]);


			echo '
						<tr>
						<td>' . $f["nit"] . '</td>
						<td>' . $f["name"] . '</td>
                        <td>' . $f["supervisor"] . '</td>
                        <td>' . $f["address"] . '</td>
						<td>' . $f["email"] . '</td>
						<td>' . $f["cellphone"] . '</td>
						
					';
			if (isset($sucur)) {
				echo '
							<td><a href="">VER</a></td>
							';
			} else {
				echo '
							<td><a href="resgistrarSucursal.php">REGISTRAR</a></td>
							';
			}

			echo '<td><a href="">ELIMINAR</a></td>';


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

} //cierre de funcion cargarTiendas


function cargarUser()
{

	$queries = new queriesTiendas();
	//Genera consulta en la tabla user para obtener las tiendas
	$result = $queries->showUser();



	if (isset($result)) { //En caso de haya un error en la variable resultado

		foreach ($result as $f) {


			echo '
						<tr>
						<td>' . $f["name"] . '</td>
						<td>' . $f["document"] . '</td>
                        <td>' . $f["email"] . '</td>
                        <td>' . $f["address"] . '</td>
						
						<td>' . $f["cellphone"] . '</td>
						<td>' . $f["rol"] . '</td>
						<td>' . $f["nitTienda"] . '</td>
						
					';
			

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
            	

            	';
	}; //end if

}//cierre de funcion cargarTiendas 