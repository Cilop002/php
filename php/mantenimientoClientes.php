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
          <a class="navbar-brand link-personalizado" href="vistaAdmin.php">Proj Renta</a>
        </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right nav-1">
              <li><a href="mantenimientoVehiculos.php">Mant. Vehículos
                <span class="glyphicon icon-automobile"></span></a></li>
              <li><a href="mantenimientoDescuentos.php">Mant. Descuentos
                <span class="glyphicon icon-gift"></span></a></li>
              <li><a href="mantenimientoPaquetes.php">Mant. Paquetes
                <span class="glyphicon icon-briefcase"></span></a></li>
                <li><a href="mantenimientoProveedor.php">Mant. Proveedores
                  <span class="glyphicon icon-user"></span></a></li>

              <li><a><?php echo $_SESSION['us'];?>
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
    <!-- Main jumbotron for a primary marketing message or call to action -->

    <div class="container">
      <!-- Example row of columns -->
      <form action="#" method="POST">
        <table align="center">
          <tr>
            <td>Busqueda por Nombre:</td>
            <td><input class="form-control" type="text" name="$busqueda"></td>
            <td><input type="submit" name="buscar" value="Buscar" class="btn1"></td>
          </tr>
        </table>
        <br><br>
        <table align="center">
          <tr>
            <td><b><font size="4">Id Cliente:&nbsp;&nbsp;</font></b></td>
            <td><input class="form-control" type="text" name="id" ></td>
          </tr>
          <tr>
            <td><b><font size="4">Nombre:&nbsp;&nbsp;</font></b></td>
            <td><input class="form-control" type="text" name="nom" ></td>
          </tr>
          <tr>
            <td><b><font size="4">Edad:&nbsp;&nbsp;</font></b></td>
            <td><input class="form-control" type="text" name="edad" ></td>
          </tr>
          <tr>
            <td><b><font size="4">Telefono:&nbsp;&nbsp;</font></b></td>
            <td><input class="form-control" type="text" name="tel" ></td>
          </tr>
          <tr>
            <td><b><font size="4">Correo:&nbsp;&nbsp;</font></b></td>
            <td><input class="form-control" type="text" name="mail" ></td>
          </tr>
          <tr>
            <td><b><font size="4">Password:&nbsp;&nbsp;</font></b></td>
            <td><input class="form-control" type="password" name="pass" ></td>
          </tr>
          <tr>
            <td><b><font size="4">Nacionalidad:&nbsp;&nbsp;</font></b></td>
            <td><input class="form-control" type="text" name="nac" ></td>
          </tr>
          <tr>
            <td><b><font size="4">Tipo:&nbsp;&nbsp;</font></b></td>
            <td><input class="form-control" type="text" name="tipo" ></td>
          </tr>
        </table>
        <br>
        <table align="center">
          <tr>
            <td><input type="submit" name="add" value="Agregar" class="btn1"></td>
            <td><input type="submit" name="del" value="Eliminar" class="btn1"></td>
            <td><input type="submit" name="mod" value="Modificar" class="btn1"></td>
          </tr>
        </table>
      </form>
      </div>

      <hr>

      <?php
      //creacion del  Data Acces Object
      require '../Model/DAOCliente.php';
      $dao = new DAOCliente();
      $dao->listar();

      function cargar(){
      	$client = new Cliente();
        $client -> setIdCliente($_POST["id"]);
        $client -> setNombre($_POST["nom"]);
        $client -> setEdad($_POST["edad"]);
        $client -> setTelefono($_POST["tel"]);
        $client -> setCorreo($_POST["mail"]);
        $client -> setPass($_POST["pass"]);
        $client -> setNacionalidad($_POST["nac"]);
        $client -> setPass($_POST["pass"]);
        $client -> setTipo($_POST["tipo"]);
      	return $client;

      }
      //que boton? si modificar eliminar o ingresar
      if(isset($_REQUEST['add'])){
      	$dao->insertar(cargar());
        echo '<script language="javascript">location.href = "mantenimientoClientes.php";</script>';
      }
      if(isset($_REQUEST['del'])){
      	$dao->eliminar(cargar());
        echo '<script language="javascript">location.href = "mantenimientoClientes.php";</script>';
      }
      if(isset($_REQUEST['mod'])){
      	$dao->modificar(cargar());
        echo '<script language="javascript">location.href = "mantenimientoClientes.php";</script>';
      }
      if(isset($_REQUEST['buscar'])){
      	$dao->buscar($_POST["buscar"]);
      }

      ?>

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
