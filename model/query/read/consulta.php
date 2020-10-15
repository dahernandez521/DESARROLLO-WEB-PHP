<?php
class consulta
{
    public function login($user)
    {
        $resultado = null;

        $model = new conexion();
        $conexion = $model->get_conexion();

        $sql = "SELECT * FROM user WHERE email=:user";

        $result = $conexion->prepare($sql);
        $result->bindParam(":user", $user);
        $result->execute();

        while ($f = $result->fetch()) {
            $resultado[] = $f;
        }

        return $resultado;
    }

    public function loginTwo($user)
    {
        $resultado = null;
        $model = new conexion();
        $conexion = $model->get_conexion();

        $sql = "SELECT * FROM user WHERE email=:user";

        $result = $conexion->prepare($sql);
        $result->bindParam(":user", $user);
        $result->execute();

        while ($f = $result->fetch()) {
            $resultado[] = $f;
        }

        return $resultado;
    }

    public function user()
    {
        $resultado = null;

        $model = new conexion();
        $conexion = $model->get_conexion();

        $sql = "SELECT * FROM user ";

        $result = $conexion->prepare($sql);

        $result->execute();

        while ($f = $result->fetch()) {
            $resultado[] = $f;
        }

        return $resultado;
    }

    public function producto($id)
    {
        $resultado = null;

        $model = new conexion();
        $conexion = $model->get_conexion();

        $sql = "SELECT * FROM producto WHERE id=:id";

        $result = $conexion->prepare($sql);
        $result->bindParam(":id", $id);

        $result->execute();

        while ($f = $result->fetch()) {
            $resultado[] = $f;
        }

        return $resultado;
    }
}
