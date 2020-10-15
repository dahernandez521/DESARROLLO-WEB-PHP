<?php

class delete
{

    public function sucursal($id)
    {
        $resultado = null;
        $modelo = new conexion();
        $conexion = $modelo->get_conexion();


        $sql = "DELETE FROM sucursal WHERE id = :id";

        $result = $conexion->prepare($sql);
        $result->bindParam(":id", $id);

        if (!$result) {
            $vista = "Fallo al eliminar";
        } else {

            $result->execute();



            $vista = "eliminacion exitosa_../../view/supervisorGeneral/SupervisorGeneral.php";
        }
        return $vista;
    }



    public function sucursalTienda($id)
    {
        $resultado = null;
        $modelo = new conexion();
        $conexion = $modelo->get_conexion();


        $sql = "DELETE FROM sucursal WHERE nitTienda = :id";

        $result = $conexion->prepare($sql);
        $result->bindParam(":id", $id);


        $result->execute();
    }


    public function tienda($id)
    {
        $resultado = null;
        $modelo = new conexion();
        $conexion = $modelo->get_conexion();


        $sql = "DELETE FROM tienda WHERE nit = :id";

        $result = $conexion->prepare($sql);
        $result->bindParam(":id", $id);

        if (!$result) {
            $vista = "Fallo al eliminar";
        } else {

            $result->execute();



            $vista = "eliminacion exitosa_../../view/supervisorGeneral/SupervisorGeneral.php";
        }
        return $vista;
    }
}
