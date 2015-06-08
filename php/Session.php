<?php require '../Conexion/Conectar.php'; ?>
<!doctype html>
<html class="no-js" lang="">
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
	<form id="signInForm" action="<?php echo $_SERVER['PHP_SELF']?>" name="signIn" method="post">
			<input name="mail" type="text" placeholder="E-Mail">
			<input name="pass" type="password" placeholder="Password">
			<input name="login" type="submit" value="Acceder" required/>
	</form>
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
	$sql3 = "select tipo from cliente where correo = '$correo'";
	$mail = $con->query($sql);
	$pass = $con->query($sql2);
	$tipo = $con->query($sql3);
	$ncampos1 = mysqli_num_fields($mail);
	$ncampos2 = mysqli_num_fields($pass);
	$ncampos3 = mysqli_num_fields($tipo);

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

	for ($i=0; $i < $ncampos3; $i++) {
  	while ($fila3 = mysqli_fetch_row($tipo)) {
   		$type = $fila3[$i];
  	}
 	}

	if ($r1 == true && $r2 == true && $type==1) {
		session_start();
		$_SESSION["us"] = $correo;
		header("location:vistaInicio.php");
	}elseif ($r1 == true && $r2 == true && $type==2) {
		session_start();
		$_SESSION["us"] = $correo;
		header("location:vistaAdmin.php");
	}else{
		header("location:Session.php");
	}
}
 ?>
