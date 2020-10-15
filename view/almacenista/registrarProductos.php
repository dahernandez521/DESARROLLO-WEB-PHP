<?php
require_once ('../../model/conexion/conexion.php');
session_start();

if (!isset($_SESSION['login'])) { // verifica que existe la session activa

    echo "<script>
            location.href='../index.php';
        </script>";
} else {
    if ($_SESSION['rol'] != 4) {
        echo "<script>
            location.href='../index.php';
        </script>";
    }
} //cierera if validador de seción 
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

    <link rel="stylesheet" href="../../css/estilo.css">
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

                <li class="nav-item active">
                    <a class="nav-link" href="almacenista.php">Almacen</a>
                </li>
                <li class="nav-item ">
                    
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-555" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Registro
                    </a>
                    <div class="dropdown-menu dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-555">
                        <a class="dropdown-item" href="registrarBodega.php">Registrar Bodega</a>
                    
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto nav-flex-icons">
                <li class="nav-item avatar dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-2.jpg" class="rounded-circle z-depth-0" alt="avatar image" style="width: 50%;">
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-55">

                        <a class="dropdown-item" href="#">Cerrar Sesion</a>
                    </div>
                </li>
            </ul>
        </div>

    </nav>
    <!--/.Navbar -->

 <!-- Material form register -->
 <div class="containerProducto" class="form-group" >

<h1> <strong>REGISTRAR PRODUCTO</strong></h1> <br>

<form action="" method="post" id="rproductos" class="rproductos form-row" >

<div class="form-group col-md-4">
        <label><strong>ID Bodega</strong></label>
        <br>
        <select class="form-control idBodega" name="idBodega" required></select>
    </div>

    <div class="form-group col-md-4">
        <label><strong>Tienda</strong></label>
        <br>
        <select class="form-control nitTienda" name="nitTienda" id="nitTienda" required></select>
    </div>

    <br>

    <div class="form-group col-md-4" class="form-row">
        <label><strong>Nombre</strong></label>
        <input type="text" name="name" class="form-control form-row" placeholder="Martillo" required>
    </div>

    <br>

    <div class="form-group col-md-4" class="form-row">
        <label><strong>Precio de compra</strong></label>
        <input type="number" name="precioCompra" class="form-control form-row" placeholder="4000" required>
    </div>

    
    <div class="form-group col-md-4" class="form-row">
        <label><strong>Precio de venta</strong></label>
        <input type="number" name="precioVenta" class="form-control form-row" placeholder="2500" required>
    </div>

    <div class="form-group col-md-4" class="form-row">
        <label><strong>Stock</strong></label>
        <input type="number" class="form-control form-row" name="stock"> 
    </div>

    <div class="form-group col-md-4" class="form-row">
        <label><strong>Descripción</strong></label>
        <textarea cols="30" rows="10" type="text" name="description" class="form-control form-row" placeholder="..." required></textarea>
    </div>

    <br>
    <br>
    <br>
    <br>
    <button type="submit" class="btn btn-primary btn-lg btn-block" style="border-radius:20px">Registrar</button>
    <br>
    <br>
    <a href="almacenista.php" role="button" class="btn btn-danger btn-lg btn-block" style="border-radius:20px; margin-top:30px;">Volver</a>
    <br>
    <br>

</form>
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
        <script type="text/javascript" src="../../js/ajaxProducto.js"></script>
</body>

</html>