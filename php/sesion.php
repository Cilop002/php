<?php require_once 'Conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Session</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body class="color">
	<div class="header">
			<h1>Bienvenido</h1>
	</div>
	<div class="body">
		<center>
			<div class="formWrapper">
					<div class="formTitle">Entrar</div>
					<form id="signInForm" action="<?php echo $_SERVER['PHP_SELF']?>" name="signIn" method="post">
							<input name="us" type="text" placeholder="Username">
							<input name="pass" type="password" placeholder="Password">
							<input id="signInBtn" name="login" type="submit" value="Acceder" required/>
							<div class="smallText">
									<span>¿No estas registrado? <div class="button" id="signUpButton">Registrate Aquí</div></span>
									<span>¿Olvidaste tu password? <a href="">Recordar Password</a></span>
							</div>
					</form>
			</div>
		</center>
	</div>
		<?php
			/*<center>
				<div class="formWrapper">
						<div class="formTitle">Entrar</div>
						<form id="signInForm" action="<?php echo $_SERVER['PHP_SELF']?>" name="signIn" method="post">
								<input name="us" type="text" placeholder="Username" required/>
								<input name="pass" type="password" placeholder="Password" required/>
								<input id="signInBtn" name="signInBtn" type="submit" value="Acceder" required/>
								<div class="smallText">
										<span>¿No estas registrado? <div class="button" id="signUpButton">Registrate Aquí</div></span>
										<span>¿Olvidaste tu password? <a href="">Recordar Password</a></span>
								</div>
						</form>
				</div>
			</center>*/
		?>

	<div class="footer">

	</div>

</body>
</html>
