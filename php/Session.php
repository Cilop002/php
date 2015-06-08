<?php require_once '../Conexion/Conectar.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Session</title>
</head>
<body>
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
 ?>
