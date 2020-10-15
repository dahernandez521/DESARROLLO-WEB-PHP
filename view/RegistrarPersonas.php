<?php
session_start();
require_once '../model/conexion/conexion.php';
require_once '../controller/read/load.php';
require_once '../model/query/read/tiendas.php';

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
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desarrollo Web PHP</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css">

  <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>
  <!--Navbar -->
  <nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color lighten-1">
    <h1><a class="navbar-brand" href="#">SIIGO</a></h1>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555" aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item ">
          <a class="nav-link" href="supervisorGeneral/SupervisorGeneral.php">Tiendas</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="supervisorGeneral/usuarios.php">Usuarios</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-555" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Registro
          </a>

          <div class="dropdown-menu dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-555">
            <a class="dropdown-item" href="supervisorGeneral/registrarTiendas.php">Registrar Tienda</a>


          </div>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto nav-flex-icons">

        <li class="nav-item avatar dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-2.jpg" class="rounded-circle z-depth-0" alt="avatar image" style="width: 50%;">
          </a>
          <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-55">

            <a class="dropdown-item" href="../controller/session/singOff.php">Cerrar Sesion</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <!--/.Navbar -->

  <div class="containerPersona" class="form-group">

    <h1><strong>REGISTRAR PERSONA</strong></h1> <br>

    <form action="" method="post" id="formUser" class="form-row">

      <div class="form-group col-md-4" class="form-row">
        <label><strong>Documento</strong></label>
        <input type="number" required name="document" class="form-control" class="form-row" placeholder="1002549863">
      </div>

      <div class="form-group col-md-4">
        <label><strong>Nombres</strong></label>
        <input type="text" class="form-control" required name="name" placeholder="Pepito">
      </div>

      <div class="form-group col-md-4">
        <label><strong>Apellidos</strong></label>
        <input type="text" name="lastname" required class="form-control" placeholder="Perez">
      </div>

      <div class="form-group col-md-4">
        <label><strong>Tipo</strong></label>
        <select name="type" class="form-control type" required>
          <option value="">SELECCIONE</option>
          <option value="CC">Cédula de Ciudadanía</option>
          <option value="CE">Cédula de Extranjería</option>
        </select>
      </div>


      <div class="form-group col-md-4">
        <label><strong>Correo</strong></label>
        <input type="email" class="form-control" required name="email" placeholder="Hernandez@correo.com">
      </div>

      <div class="form-group col-md-4">
        <label><strong>Contraseña</strong></label>
        <input type="password" class="form-control" required name="password" placeholder="**********">
      </div>

      <div class="form-group col-md-4">
        <label><strong>Telefono</strong></label>
        <input type="number" class="form-control" required name="cellphone" placeholder="3125608954">
      </div>

      <div class="form-group col-md-4">
        <label><strong>Rol</strong></label>
        <select name="rol" class="form-control rol" required>

          <option value="">Seleccione</option>
          <option value="1">Supervisor General</option>
          <option value="2">Supervisor de Tienda</option>
          <option value="3">Administrador de Sucursal</option>
          <option value="4">Almacenista</option>
          <option value="5">Proveedor</option>
          <option value="6">Vendedor</option>

        </select>
      </div>

      <div class="form-group col-md-4">
        <label><strong>Departamento</strong></label>
        <select name="departaments" class="form-control departaments" required>
        </select>
      </div>

      <div class="form-group col-md-4">
        <label><strong>Municipio</strong></label>
        <select name="municipality" class="form-control municipality" required></select>
      </div>

      <div class="form-group col-md-4">
        <label><strong>Dirección</strong></label>
        <input type="text" class="form-control" required name="address" placeholder="Carrera 5 #45">
      </div>


      <div class="form-group col-md-4">

        <label><strong>Tienda</strong></label>
        <select name="nitTienda" id="nitTienda" class="form-control nitTienda" required>
        </select>
      </div>

      <br>
      <br>
      <br>
      <button type="submit" class="btn btn-primary btn-lg btn-block" style="border-radius:20px; ">Registrar
      </button>
      <br>
      <a href="supervisorGeneral/usuarios.php" role="button" class="btn btn-danger btn-lg btn-block" style="border-radius:20px; margin-top:30px;">Volver</a>
      <br>
      <br>


    </form>
  </div>

  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.js"></script>
  <script src="../js/js.js"></script>


</body>

</html>