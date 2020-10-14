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

    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>

    <main id="body">
        <section>
            <!-- Material form subscription -->
            <div class="card login">

                <h5 class="card-header info-color white-text text-center py-4">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-2.jpg" alt="" style="border-radius: 50%;">
                </h5>

                <!--Card content-->
                <div class="card-body px-lg-5">

                    <!-- Form -->
                    <form class="text-center" id="miform" style="color: #757575;" action="#!">

                        <!-- Name -->
                        <div class="md-form mt-3">
                            <input type="email" id="materialSubscriptionFormEmail" required name="email" class="form-control">
                            <label for="materialSubscriptionFormPasswords"><i class="fas fa-user-alt"></i> Email</label>
                        </div>

                        <!-- E-mai -->
                        <div class="md-form">
                            <input type="password" id="materialSubscriptionFormPasswords" required name="password" class="form-control">
                            <label for="materialSubscriptionFormEmail"><i class="fas fa-lock"></i> Password</label>
                        </div>

                        <!-- Sign in button -->
                        <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Ingresar</button>

                    </form>
                    <!-- Form -->

                </div>

            </div>
            <!-- Material form subscription -->
        </section>
    </main>
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    <script src="js/ajaxForm.js"></script>

</body>

</html>