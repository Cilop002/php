<?php
class Cliente{

  private $_idCliente;
  private $_nombre;
  private $_edad;
  private $_telefono;
  private $_correo;
  private $_pass;
  private $_nacionalidad;
  private $_tipo;

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
  public function getTipo(){
    return $this->_tipo;
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
  public function setTipo($_tipo){
    $this->_tipo=$_tipo;
  }
}
?>
