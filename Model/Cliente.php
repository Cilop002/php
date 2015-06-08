<?php
class Cliente{

  private $_idCliente;
  private $_nombre;
  private $_edad;
  private $_telefono;
  private $_correo;
  private $_pass;
  private $_nacionalidad;

  public function __construct(){

  }

  public function getIdCliente(){
    return $this->_idCliente;
  }
  public function getNombre(){
    return $this->_nombre;
  }
  public function getEdad(){
    return $this->_edad;
  }
  public function getTelefono(){
    return $this->_telefono;
  }
  public function getCorreo(){
    return $this->_correo;
  }
  public function getPass(){
    return $this->_pass;
  }
  public function getNacionalidad(){
    return $this->_nacionalidad;
  }
  public function setIdCliente($_idCliente){
    $this->_idCliente=$_idCliente;
  }
  public function setNombre($_nombre){
    $this->_nombre=$_nombre;
  }
  public function setEdad($_edad){
    $this->_edad=$_edad;
  }
  public function setTelefono($_telefono){
    $this->_telefono=$_telefono;
  }
  public function setCorreo($_correo){
    $this->_correo=$_correo;
  }
  public function setPass($_pass){
    $this->_pass=$_pass;
  }
  public function setNacionalidad($_nacionalidad){
    $this->_nacionalidad=$_nacionalidad;
  }

  public function mostrarDatos(){
    $consulta=$this->bd->query("select * from cliente");
    while($filas=$consulta->fetch_assoc()){
       $this->cliente[]=$filas;
           }
    return $this->cliente;
  }

  public function agregarDatos($_idCliente,$_nombre,$_edad,$_telefono,$_correo,$_pass,$_nacionalidad){
   		$consulta=$this->bd->query("insert into cliente values ($_idCliente,'$_nombre',$_edad,'$_telefono','$_correo','$_pass','$_nacionalidad');");
   		print("<script>alert('Cliente ingresado exitosamente')</script>");
  }

  public function modificarDatos($_idCliente,$_nombre,$_edad,$_telefono,$_correo,$_pass,$_nacionalidad){
      $consulta=$this->bd->query("update cliente set nombre='$_nombre',edad=$_edad,telefono='$_telefono',correo='$_correo',pass='$_pass',nacionalidad='$_nacionalidad' where idCliente=$_idCliente;");
      print("<script>alert('Cliente modificado exitosamente.')</script>");
  }

  public function eliminarDatos($_idCliente){
      $consulta=$this->bd->query("delete from cliente where idCliente=$_idCliente;");
      print("<script>alert('Cliente eliminado exitosamente.')</script>");
  }

  public function buscarDatos($busqueda){
      $consulta=$this->bd->query("select * from cliente where nombre like '$busqueda%' ");
      while($filas=$consulta->fetch_assoc()){
        $this->cliente[]=$filas;
      }
      return $this->cliente;
  }
}
?>
