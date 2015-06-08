<?php
class Turista extends Cliente{

  private $_idPaquete;

  public function __construct(){
  }

  public function getIdPaquete(){
    return $this->_idPaquete;
  }
  public function setIdPaquete(){
    $this->_idPaquete=$_idPaquete;
  }

  public function mostrarDatos(){
    $consulta=$this->bd->query("select * from turista");
    while($filas=$consulta->fetch_assoc()){
       $this->cliente[]=$filas;
           }
    return $this->cliente;
  }
}
?>
