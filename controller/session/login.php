<?php
require_once('../../model/conexion/conexion.php');
require_once('../../model/query/read/consulta.php');
session_start();

$user = $_POST['email'];
$pass = $_POST['password'];

if (strlen($user) > 0 && strlen($pass) > 0) {
    $pass = md5($_POST['password']);

    $model = new consulta();
    $result = $model->login($user);

    if (isset($result)) {
        foreach ($result as $f) {

            $email = $f['email'];
            $id = $f['document'];
            $name = $f['name'] . ' ' . $f['lastname'];
            $tienda = $f['nitTienda'];
            $rol = $f['rol'];
            $password = $f['password'];
        }

        if ($pass == $password) {

            $_SESSION['email'] = $email;
            $_SESSION['document'] = $id;
            $_SESSION['name'] = $name;
            $_SESSION['tienda'] = $tienda;
            $_SESSION['rol'] = $rol;
            $_SESSION['verification'] = "si";
            $_SESSION['login'] = "si";

            //echo "<script>location.href='../../view/consultarUsuarios.php'</script>";
            if ($rol == 1) {
                $vista = "Bienvenido_view/supervisorGeneral/supervisorGeneral.php";
            }
            if ($rol == 2) {
                $vista = "Bienvenido_view/supervisorTienda/supervisorTienda.php";
            }
            if ($rol == 3) {
                $vista = "Bienvenido_view/supervisorSucursal.php";
            }
            if ($rol == 4) {
                $vista = "Bienvenido_view/almacenista.php";
            }
            if ($rol == 5) {
                $vista = "Bienvenido_view/vendedor.php";
            }
            if ($rol == 6) {
                $vista = "Bienvenido_view/proveedor.php";
            }
        } else {

            $vista = "contraseña incorrecta";
        }
    } else {

        $vista = "usuario no existe";
    }
} else {

    $vista = "debe diligenciar los campos adecuadamente";
}
echo $vista;
return $vista;
