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
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css" />

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
          <a class="nav-link" href="supervisorGeneral/usuarios.php">Usuario</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-555" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Registro
          </a>
          
          <div class="dropdown-menu dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-555">
            <a class="dropdown-item" href="supervisorGeneral/registrarTiendas.php">Registrar Tiendas</a>


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

  <div class="container" class="form-group">

    <h1>REGISTRAR PERSONA</h1> <br>

    <form action="" method="post" id="formUser" class="form-row">

      <div class="form-group col-md-4" class="form-row">
        <label>Documento</label>
        <input type="number" required name="document" class="form-control" class="form-row" placeholder="1005698458">
      </div>

      <div class="form-group col-md-4">
        <label>Nombre</label>
        <input type="text" class="form-control" required name="name" placeholder="Duvan">
      </div>

      <div class="form-group col-md-4">
        <label>Apellido</label>
        <input type="text" name="lastname" required  class="form-control" placeholder="Hernandez">
      </div>

      <div class="form-group col-md-4">
        <label>tipo</label>
        <select name="type" id="" required>
          <option value="">SELECCIONE</option>
          <option value="CC">CC</option>
          <option value="CE">CE</option>
        </select>
      </div>


      <div class="form-group col-md-4">
        <label>Correo</label>
        <input type="email" class="form-control" required  name="email" placeholder="Hernandez@correo.com">
      </div>

      <div class="form-group col-md-4">
        <label>Contraseña</label>
        <input type="password" class="form-control" required  name="password" placeholder="**********">
      </div>
      <div class="form-group col-md-4">
        <label>Telefono</label>
        <input type="number" class="form-control" required  name="cellphone" placeholder="#######">
      </div>

      <div class="form-group col-md-4">
        <label>Rol</label>
        <select name="rol" required >

          <option value="">Seleccione</option>
          <option value="1">Supervisor General</option>
          <option value="2">Supervisor de Tienda</option>
          <option value="3">Administrador de Sucursal</option>
          <option value="4">Almacenista</option>
          <option value="5">Proveedor</option>
          <option value="5">Vendedor</option>

        </select>
      </div>
      <div class="form-group col-md-4">
        <label for="materialRegisterFormPassword">Departamento</label>
        <select name="departaments" required  class="departaments" id="materialRegisterFormEmail" class="form-control">


        </select>
      </div>
      <div class="form-group col-md-4">
        <label for="materialRegisterFormPassword">Municipio</label>
        <select name="municipality" required  class="municipality" id="materialRegisterFormEmail" class="form-control"></select>
      </div>

      <div class="form-group col-md-4">
        <label>Telefono</label>
        <input type="text" class="form-control" required  name="address" placeholder="Crr Cll">
      </div>


      <div class="form-group col-md-4">

        <label>Tienda</label>
        <select name="nitTienda" id="nitTienda" required >

        </select>
      </div>

      <br>
      <br>
      <br>
      <button type="submit" class="btn btn-primary btn-lg btn-block" style="border-radius:20px">Registrar
      </button>
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