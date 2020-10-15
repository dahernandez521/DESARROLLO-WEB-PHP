<?php 

class queriesProductos{
	
	public function showProductos(){
		$resultado=null;
		$modelo= new conexion();
		$conexion=$modelo->get_conexion();

		$sql="SELECT * FROM producto";
				
		$result=$conexion->prepare($sql);

		$result->execute();

		while ($f=$result->fetch()){
            $resultado[]=$f;
        }

        return $resultado;


	}


	public function showMiProducto($id){
		$resultado=null;
		$modelo= new conexion();
		$conexion=$modelo->get_conexion();

		$sql="SELECT * FROM producto WHERE nitEmpresa=:id";
				
		$result=$conexion->prepare($sql);
		$result->bindparam(":id",$id);

		$result->execute();

		while ($f=$result->fetch()){
            $resultado[]=$f;
        }

        return $resultado;


    }
}
