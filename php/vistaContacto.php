<!doctype html>
<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Project Renta de Vehiculos</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/main.css">

        <script src="../js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
      <?php
session_start();
if (empty($_SESSION["us"])) {
	session_start();
	session_destroy();
	header("location: ../index.php");
}
else{

}
 ?>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <nav class="navbar nav-principal navbar-fixed-top" role="navigation">


      <div class="container">
        <div class="navbar-header">

          <button class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
            <span class="icon-bar app-bar"></span>
            <span class="icon-bar app-bar"></span>
            <span class="icon-bar app-bar"></span>
          </button>
          <a class="navbar-brand link-personalizado" href="vistaInicio.php">Proj Renta</a>
        </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right nav-1">
              <li><a href="vistaVehiculos.php">Vechículos
                <span class="glyphicon icon-automobile"></span></a></li>
              <li><a href="vistaDescuentos.php">Descuentos
                <span class="glyphicon icon-gift"></span></a></li>
              <li><a href="vistaPaquetes.php">Paquetes
                <span class="glyphicon icon-briefcase"></span></a></li>
              <li><a href="#">Contactenos
                <span class="glyphicon icon-envelop"></span></a></li>
              <li><a href="frmRegistro.php" data-toggle="modal"><?php echo $_SESSION['us'];?>
                <span class="glyphicon icon-user-plus"></span></a></li>
              <li><a href="Cerrarsesion.php">Cerrar Sesion
                <span class="glyphicon icon-users"></span></a></li>
            </ul>

          </div><!--/.navbar-collapse -->
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
      <section class="app-principal">
        <div class="container">
          <h1>Proj Renta</h1>
          <p>Renta de vehículos en linea</p>
        <div>
      </section>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <form class="form-horizontal" method="POST">
          <div class="form-group">
            <label for="nombre"></label>
            <input class="" type="text" name="nom" placeholder="Nombre">
          <!--</div>-->
          <!--<div class="form-group">-->
            <label for="edad"></label>
            <input class="" type="text" name="edad" placeholder="Edad">
          <!--</div>-->
          <!--<div class="form-group">-->
            <label for="telefono"></label>
            <input class="" type="text" name="tel" placeholder="Teléfono">
          <!--</div>-->
          <!--<div class="form-group">-->
            <label for="correo"></label>
            <input class="" type="text" name="mail" placeholder="E-mail">
          <!--</div>-->
          <!--<div class="form-group">-->
            <label for="nacionalidad"></label>
            <input class="" type="text" name="nac" placeholder="Nacionalidad">
          <!--</div>-->
          <!--<div class="form-group">-->
            <label for="pass"></label>
            <center><textarea rows="4" cols="33" placeholder="Hola......"></textarea></center>

          </div>
          <center>
            <input type="submit" name="acept" value="Aceptar" class="btn btn-primary">
            <input type="submit" name="cancel" value="Cancelar" class="btn btn-default">
          </center>
        </form>
      </div>

      <hr>

      <footer>
        <p>&copy; BRBJ S.A. de C.V. 2015</p>
      </footer>





    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="../js/vendor/bootstrap.min.js"></script>

        <script src="../js/main.js"></script>


        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--<script>
          (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>-->
    </body>
</html>
