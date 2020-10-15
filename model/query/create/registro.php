<?php

class getUser
{

    public function getNit($nit)
    {

        $resultado = null;
        $model = new conexion();
        $consulta = $model->get_conexion();



        $sql = "SELECT * FROM tienda WHERE nit=:nit";
        $result = $consulta->prepare($sql);
        $result->bindParam(':nit', $nit);

        $result->execute();

        while ($f = $result->fetch()) {
            $resultado[] = $f;
        }

        return $resultado;
    }
    public function getEmail($email)
    {

        $resultado = null;
        $model = new conexion();
        $consulta = $model->get_conexion();



        $sql = "SELECT * FROM tienda WHERE email=:email";
        $result = $consulta->prepare($sql);
        $result->bindParam(':email', $email);

        $result->execute();

        while ($f = $result->fetch()) {
            $resultado[] = $f;
        }

        return $resultado;
    }
    public function getCellphone($cellphone)
    {

        $resultado = null;
        $model = new conexion();
        $consulta = $model->get_conexion();



        $sql = "SELECT * FROM tienda WHERE cellphone=:cellphone";
        $result = $consulta->prepare($sql);
        $result->bindParam(':cellphone', $cellphone);

        $result->execute();

        while ($f = $result->fetch()) {
            $resultado[] = $f;
        }

        return $resultado;
    }


    public function getUsuarios($email)
    {

        $resultado = null;
        $model = new conexion();
        $consulta = $model->get_conexion();



        $sql = "SELECT * FROM login WHERE email=:email";
        $result = $consulta->prepare($sql);
        $result->bindParam(':email', $email);

        $result->execute();

        while ($f = $result->fetch()) {
            $resultado[] = $f;
        }

        return $resultado;
    }

    public function getUsuariosTwo($document)
    {

        $resultado = null;
        $model = new conexion();
        $consulta = $model->get_conexion();



        $sql = "SELECT * FROM login WHERE documento=:document";
        $result = $consulta->prepare($sql);
        $result->bindParam(':document', $document);

        $result->execute();

        while ($f = $result->fetch()) {
            $resultado[] = $f;
        }

        return $resultado;
    }

    public function inserUsuarios($name, $lastname, $type, $document, $email, $password, $nitTienda, $rol, $municipality, $cellphone, $address)
    {

        $resultado = null;
        $model = new conexion();
        $consulta = $model->get_conexion();



        $sql = "INSERT INTO user (document, name, lastname, type,  email, password, nitTienda, rol, municipality, address, cellphone) VALUES (:document, :name, :lastname, :type,  :email, :password, :nitTienda, :rol, :municipality, :address, :cellphone)";
        $result = $consulta->prepare($sql);
        $result->bindParam(':name', $name);
        $result->bindParam(':lastname', $lastname);
        $result->bindParam(':type', $type);
        $result->bindParam(':document', $document);
        $result->bindParam(':email', $email);
        $result->bindParam(':password', $password);
        $result->bindParam(':nitTienda', $nitTienda);
        $result->bindParam(':rol', $rol);
        $result->bindParam(':municipality', $municipality);
        $result->bindParam(':cellphone', $cellphone);
        $result->bindParam(':address', $address);

        if (!$result) {

            $vista = "Fallo al registrar";
        } else {

            $result->execute();



            $vista = "registro exitoso_../view/supervisorGeneral/usuarios.php";
        }
        return $vista;
    }

    public function inserTienda($nit, $name, $municipality, $address, $email, $cellphone, $supervisor)
    {

        $resultado = null;
        $model = new conexion();
        $consulta = $model->get_conexion();



        $sql = "INSERT INTO tienda (nit,name,municipality,address,email,cellphone,supervisor) VALUES (:nit,:name,:municipality,:address,:email,:cellphone,:supervisor)";
        $result = $consulta->prepare($sql);
        $result->bindParam(':nit', $nit);
        $result->bindParam(':name', $name);
        $result->bindParam(':municipality', $municipality);
        $result->bindParam(':address', $address);
        $result->bindParam(':email', $email);
        $result->bindParam(':cellphone', $cellphone);
        $result->bindParam(':supervisor', $supervisor);

        if (!$result) {

            $vista = "Fallo al registrar_supervisorGeneral.php";
        } else {

            $result->execute();
            $vista = "registro exitoso_../../view/supervisorGeneral/supervisorGeneral.php";
        }
        return $vista;
    }
    public function inserSucursal($nitTienda, $name, $municipality, $address, $email, $cellphone, $idBodega)
    {

        $resultado = null;
        $model = new conexion();
        $consulta = $model->get_conexion();



        $sql = "INSERT INTO sucursal (nitTienda,name,municipality,address,email,cellphone,idBodega) VALUES (:id,:name,:municipality,:address,:email,:cellphone,:idBodega )";
        $result = $consulta->prepare($sql);
        $result->bindParam(':id', $nitTienda);
        $result->bindParam(':name', $name);
        $result->bindParam(':municipality', $municipality);
        $result->bindParam(':address', $address);
        $result->bindParam(':email', $email);
        $result->bindParam(':cellphone', $cellphone);
        $result->bindParam(':idBodega', $idBodega);
        

        if (!$result) {

            $vista = "Fallo al registrar";
        } else {

            $result->execute();



            $vista = "registro exitoso_../../view/supervisorGeneral/supervisorGeneral.php";
        }
        return $vista;
    }
    public function inserBodega($nombre, $municipio, $dirrecion, $email,$cellphone)
    {
        $resultado = null;
        $model = new conexion();
        $consulta = $model->get_conexion();
        
        $sql = "INSERT INTO bodega(name, municipality, address, email, cellphone) VALUES(:nombre,:municipio,:dirrecion,:email,:cellphone)";
        $result = $consulta->prepare($sql);
        $result->bindParam(':nombre', $nombre);
        $result->bindParam(':municipio', $municipio);
        $result->bindParam(':dirrecion', $dirrecion);
        $result->bindParam(':email', $email);
        $result->bindParam(':cellphone', $cellphone);
        

        if (!$result) {

            $vista = "Fallo al registrar";
        } else {

            $result->execute();



            $vista = "registro exitoso_../../view/almacenista/almacenista.php";
        }
        return $vista;

    
    }
}
