<?php 

class queriesBodega{
	
	public function showBodega(){
		$resultado=null;
		$modelo= new conexion();
		$conexion=$modelo->get_conexion();

		$sql="SELECT * FROM bodega";
				
		$result=$conexion->prepare($sql);

		$result->execute();

		while ($f=$result->fetch()){
            $resultado[]=$f;
        }

        return $resultado;


	}


	// public function showMiProducto($id){
	// 	$resultado=null;
	// 	$modelo= new conexion();
	// 	$conexion=$modelo->get_conexion();

	// 	$sql="SELECT * FROM producto WHERE id=:id";
				
	// 	$result=$conexion->prepare($sql);
	// 	$result->bindparam(":id",$id);

	// 	$result->execute();

	// 	while ($f=$result->fetch()){
    //         $resultado[]=$f;
    //     }

    //     return $resultado;


    // }
}
