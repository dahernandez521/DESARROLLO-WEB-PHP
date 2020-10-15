<?php 

class queriesTiendas{
	
	public function showTiendas(){
		$resultado=null;
		$modelo= new conexion();
		$conexion=$modelo->get_conexion();

		$sql="SELECT * FROM tienda";
				
		$result=$conexion->prepare($sql);

		$result->execute();

		while ($f=$result->fetch()){
            $resultado[]=$f;
        }

        return $resultado;


	}

	public function showUser(){
		$resultado=null;
		$modelo= new conexion();
		$conexion=$modelo->get_conexion();

		$sql="SELECT * FROM user";
				
		$result=$conexion->prepare($sql);

		$result->execute();

		while ($f=$result->fetch()){
            $resultado[]=$f;
        }

        return $resultado;


	}


	public function showMiTienda($id){
		$resultado=null;
		$modelo= new conexion();
		$conexion=$modelo->get_conexion();

		$sql="SELECT * FROM tienda WHERE nit=:id";
				
		$result=$conexion->prepare($sql);
		$result->bindparam(":id",$id);

		$result->execute();

		while ($f=$result->fetch()){
            $resultado[]=$f;
        }

        return $resultado;


    }
    
    public function showMiSucursal($id){
		$resultado=null;
		$modelo= new conexion();
		$conexion=$modelo->get_conexion();

		$sql="SELECT * FROM sucursal WHERE nitTienda=:id";
				
		$result=$conexion->prepare($sql);
		$result->bindparam(":id",$id);

		$result->execute();

		while ($f=$result->fetch()){
            $resultado[]=$f;
        }

        return $resultado;


	}



}
