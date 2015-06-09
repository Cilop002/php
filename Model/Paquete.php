<?php
class Paquete{

  private $_idPaquete;
  private $_contenido;

  public function __construct(){
  }

  public function getIdPaquete(){
    return $this->_idPaquete;
  }
  public function getContenido(){
    return $this->_contenido;
  }
  public function setIdPaquete($_idPaquete){
    $this->_idPaquete=$_idPaquete;
  }
  public function setContenido($_contenido){
    $this->_contenido=$_contenido;
  }
}
?>
