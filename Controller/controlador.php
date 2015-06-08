<?php
require_once 'Conexion/Conectar.php';
if (isset($_POST["acept"])) {
    $confPass = $_POST["con-pass"];
    $id = "";
    $nom = $_POST["nom"];
    $edad = $_POST["edad"];
    $tel = $_POST["tel"];
    $mail = $_POST["mail"];
    $pass = $_POST["pass"];
    $nac = $_POST["nac"];
    $conul = $conexion->prepare("insert into cliente values('',?,?,?,?,?,?)");
    $conul->bind_param('1',$nom,$edad,$tel,$mail,$pass,$nac);
    /*$cliente -> setIdCliente($id);
    $cliente -> setNombre($nombre);
    $cliente -> setEdad($edad);
    $cliente -> setTelefono($tel);
    $cliente -> setCorreo($correo);
    $cliente -> setPass($pass);
    $cliente -> setNacionalidad($nac);
    $cliente -> agregarDatos($id, $nombre, $edad, $tel, $correo, $pass, $nac);*/
    header("location: Views/index.php");
}
header("location: Views/index.php");


?>
