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
							<td><a href="registrarSucursal.php?nitEmpresa=' . $f["nit"] . '">REGISTRAR</a></td>
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
						<td>';
			echo rol($f["rol"]);
			echo '</td>
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

} //cierre de funcion cargarTiendas 

function cargarProductos()
{

	$queries = new queriesProductos();
	//Genera consulta en la tabla user para obtener las tiendas
	$result = $queries->showProductos();



	if (isset($result)) { //En caso de haya un error en la variable resultado

		foreach ($result as $f) {


			echo '
						<tr>
						<td>' . $f["id"] . '</td>
						<td>' . $f["idProveedor"] . '</td>
                        <td>' . $f["idBodega"] . '</td>
                        <td>' . $f["name"] . '</td>
						
						<td>' . $f["description"] . '</td>
						<td>' . $f["precioCompra"] . '</td>
						<td>' . $f["precioVenta"] . '</td>
						<td>' . $f["stock"] . '</td>
						<td>VER</td>
	
						
					';


			echo '</tr>';
		} //end foreach
	} else {

		echo '
<tr>
				<td></td>
            	<td></td>
            	<td></td>
            	<td></td>
            	<td></td>
            	<td></td>
				<td></td>
				<td></td>
            	<td></td>
            	

            	</tr>';
	}; //end if

} //cierre de funcion cargarTiendas 


function rol($rol)
{
	if ($rol == 1) {
		$rol = "Supervisor General";
	}
	if ($rol == 2) {
		$rol = "Supervisor de Tienda";
	}
	if ($rol == 3) {
		$rol = "Administrador de Sucursal";
	}
	if ($rol == 4) {
		$rol = "Almacenista";
	}
	if ($rol == 5) {
		$rol = "Proveedor";
	}
	if ($rol == 6) {
		$rol = "Vendedor";
	}

	return $rol;
}
