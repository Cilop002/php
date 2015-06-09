<?php require_once '../Conexion/Conectar.php'; ?>
  <html class="no-js" lang="es">
      <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
          <title>Project Renta de Vehiculos</title>
          <meta name="description" content="">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="apple-touch-icon" href="../apple-touch-icon.png">

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
            <a class="navbar-brand link-personalizado" href="../index.php">Proj Renta</a>
          </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right nav-1">
                <li><a href="vistaVehiculos.php">Vechículos
                  <span class="glyphicon icon-automobile"></span></a></li>
                <li><a href="vistaDescuentos.php">Descuentos
                  <span class="glyphicon icon-gift"></span></a></li>
                <li><a href="vistaPaquetes.php">Paquetes
                  <span class="glyphicon icon-briefcase"></span></a></li>
                <li><a href="vistaContact.php">Contactenos
                  <span class="glyphicon icon-envelop"></span></a></li>
                <li><a href="#" data-toggle="modal">Registro
                  <span class="glyphicon icon-user-plus"></span></a></li>
                <li><a href="frmIngreso.php">Ingresar
                  <span class="glyphicon icon-users"></span></a></li>
              </ul>
            </div><!--/.navbar-collapse -->
          </div><!--/.navbar-collapse -->
      </nav>
      <br>
      <div class="container">
        <!-- Example row of columns -->
        <form id="signInForm" action="<?php echo $_SERVER['PHP_SELF']?>" name="signIn" method="post">
      			<input name="mail" type="text" placeholder="E-Mail">
      			<input name="pass" type="password" placeholder="Password">
      			<input name="login" type="submit" value="Acceder" required/>
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
  <?php
  if (isset($_POST["login"])) {
  	$correo= htmlspecialchars($_POST["mail"]);
  	$password = htmlspecialchars($_POST["pass"]);
  	$type = 0;
  	$con = conexion();
  	$sql = "select correo from cliente";
  	$sql2 = "select pass from cliente where correo = '$correo'";
  	$mail = $con->query($sql);
  	$pass = $con->query($sql2);
  	$ncampos1 = mysqli_num_fields($mail);
  	$ncampos2 = mysqli_num_fields($pass);

  	for ($i=0; $i < $ncampos1; $i++) {
  		while ($fila = mysqli_fetch_row($mail)) {
  			if ($r1 == false) {
  				if ($correo == $fila[$i]) {
  					$r1 = true;
  				}
  				else {
  					$r1 = false;
  				}
  			}
  		}
  	}

  	for ($i=0; $i < $ncampos2; $i++) {
  		while ($fila2 = mysqli_fetch_row($pass)) {
  			if ($r2 == false) {
  				if ($password == $fila2[$i]) {
  					$r2 = true;
  				}
  				else {
  					$r2 = false;
  				}
  			}
  		}
  	}
  	if ($r1 == true && $r2 == true) {
  		session_start();
  		$_SESSION["us"] = $correo;
  		header("location:vistaInicio.php");
  	}else{

  		header("location:Session.php");
  	}
  }
