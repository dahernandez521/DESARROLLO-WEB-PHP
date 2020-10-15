<?php
require_once '../../model/conexion/conexion.php';
session_start();

if (!isset($_SESSION['login'])) { // verifica que existe la session activa

    echo "<script>
            location.href='../index.php';
        </script>";
} else {
    if ($_SESSION['rol'] != 1) {
        echo "<script>
            location.href='../index.php';
        </script>";
    }
} //cierera if validador de seción 
if (isset($_GET["nitEmpresa"])) {
    $_SESSION['nitEmpresa'] = $_GET['nitEmpresa'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css" />

    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>
    <!-- Material form register -->
    <div class="card">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong>Registra tu sucursal</strong>
        </h5>

        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">

            <!-- Form -->
            <form class="text-center" id="rsucursal" style="color: #757575;">

                <div class="form-row">
                    <div class="col">
                        <!-- First name -->

                        <label for="materialRegisterFormFirstName"> NITEMPRESA
                            <?php
                            echo $_SESSION["nitEmpresa"];
                            ?>

                        </label>

                        <br>

                        <label for="materialRegisterFormFirstName">Nombre</label>
                        <input type="text" id="materialRegisterFormFirstName" name="name" class="form-control" placeholder="Ingrese el nombre de la sucursal">


                    </div>

                </div>

                <!-- E-mail -->
                <div class="md-form mt-0">
                    <label for="materialRegisterFormPassword">Departamento</label>
                    <select name="departaments" class="departaments" id="materialRegisterFormEmail" class="form-control">


                    </select>
                </div>
                <div class="md-form mt-0">
                    <label for="materialRegisterFormPassword">Municipio</label>
                    <select name="municipality" class="municipality" id="materialRegisterFormEmail" class="form-control"></select>
                </div>

                <div class="md-form mt-0">
                    <label for="materialRegisterFormPassword">Supervisor</label>
                    <select name="supervisor" class="supervisor" id="materialRegisterFormEmail" class="form-control"></select>
                </div>


                <!-- Password -->
                <div class="md-form">
                    <input type="text" id="materialRegisterFormPassword" name="address" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
                    <label for="materialRegisterFormPassword">Dirrección</label>
                </div>

                <!-- Phone number -->
                <div class="md-form">
                    <input type="email" id="materialRegisterFormPhone" class="form-control" name="email" aria-describedby="materialRegisterFormPhoneHelpBlock">
                    <label for="materialRegisterFormPhone">Correo electronico </label>
                </div>

                <!-- Newsletter -->
                <div class="form-check">
                    <input type="number" class="form-check-input" name="cellphone" id="materialRegisterFormNewsletter" placeholder="Numero de contacto">
                    <label class="form-check-label" for="materialRegisterFormNewsletter">Numero de contacto</label>
                </div>
                <br>
                <label for="materialRegisterFormPassword">ID bodega</label>
                    <select name="idBodega" class="idBodega" id="materialRegisterFormEmail" class="form-control"></select>
                </div>
¿
                <!-- Sign up button -->
                <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Registrar</button>
               <a href="supervisorGeneral.php" role="button" class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0">Salir</a>
                <!-- Social register -->


        </form>
        <!-- Form -->

    </div>
    <br>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.js"></script>
        <!-- <script type="text/javascript" src="../../js/js.js"></script> -->
        <script type="text/javascript" src="../../js/ajaxSucursal.js"></script>
</body>

</html>