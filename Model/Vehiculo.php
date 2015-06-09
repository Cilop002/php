<?php
class Vehiculo{

  private $_numPlaca;
  private $_marca;
  private $_modelo;
  private $_anio;
  private $_color;
  private $_idProv;

  public function __construct(){
  }

  public function getNumPlaca(){
    return $this->_numPlaca;
  }
  public function getMarca(){
    return $this->_marca;
  }
  public function getModelo(){
    return $this->_modelo;
  }
  public function getAnio(){
    return $this->_anio;
  }
  public function getColor(){
    return $this->_color;
  }
  public function getIdProv(){
    return $this->_idProv;
  }
  public function setNumPlaca($_numPlaca){
    $this->_numPlaca=$_numPlaca;
  }
  public function setMarca($_marca){
    $this->_marca=$_marca;
  }
  public function setModelo($_modelo){
    $this->_modelo=$_modelo;
  }
  public function setAnio($_anio){
    $this->_anio=$_anio;
  }
  public function setColor($_color){
    $this->_color=$_color;
  }
  public function setIdProv($_idProv){
    $this->_idProv=$_idProv;
  }
}
?>
