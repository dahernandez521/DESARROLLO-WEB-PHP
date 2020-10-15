<?php

/**
 * 
 */
class queryAjax
{
	public function getDepartmentAjax()
	{
		$modelo= new conexion();
		$conexion = $modelo->get_conexion();
  
  		$sql = "SELECT * FROM departaments";
  		$result=$conexion->prepare($sql);
  		$result->execute();

  		while ($f=$result->fetch()) {
				$resultado[]=$f;
		}
		return $resultado;
	}

	public function getMunicipalityAjax($id)
	{
		$resultado=null;

		$modelo= new conexion();
  		$conexion = $modelo->get_conexion();

  		$sql = "SELECT * FROM municipality WHERE id_departaments = :id";
  		$result=$conexion->prepare($sql);
  		$result->bindParam(":id",$id);
  		$result->execute();

  		while ($f=$result->fetch()) {
				$resultado[]=$f;
		}
		return $resultado;
	}

	
	public function getSupervisorAjax($id)
	{
		$resultado=null;

		$modelo= new conexion();
  		$conexion = $modelo->get_conexion();

  		$sql = "SELECT * FROM user WHERE rol = :id";
  		$result=$conexion->prepare($sql);
  		$result->bindParam(":id",$id);
  		$result->execute();

  		while ($f=$result->fetch()) {
				$resultado[]=$f;
		}
		return $resultado;
	}

	public function getTiendaAjax()
	{
		$resultado=null;

		$modelo= new conexion();
  		$conexion = $modelo->get_conexion();

  		$sql = "SELECT * FROM tienda";
  		$result=$conexion->prepare($sql);
  		
  		$result->execute();

  		while ($f=$result->fetch()) {
				$resultado[]=$f;
		}
		return $resultado;
	}
}


?>