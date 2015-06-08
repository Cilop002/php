<?php
class Descuento{

  private $_idDescuento;
  private $_cantidad;

  public function __construct(){
  }

  public function getIdDescuento(){
    return $this->_idDescuento;
  }
  public function getCantidad(){
    return $this->_cantidad;
  }
  public function setIdDescuento(){
    $this->_idDescuento=$_idDescuento;
  }
  public function setCantidad(){
    $this->_cantidad=$_cantidad;
  }

  public function mostrarDatos(){
    $consulta=$this->bd->query("select * from descuento");
    while($filas=$consulta->fetch_assoc()){
       $this->descuento[]=$filas;
           }
    return $this->descuento;
  }

  public function agregarDatos($_idDescuento){
   		$consulta=$this->bd->query("insert into descuento values ($_idDescuento,$_cantidad);");
       print("<script>alert('Descuento agregado exitosamente.')</script>");
  }

  public function modificarDatos($_idDescuento){
      $consulta=$this->bd->query("update descuento set cantidad=$_cantidad where idDescuento=$_idDescuento;");
      print("<script>alert('Descuento modificado exitosamente.')</script>");
  }

  public function eliminarDatos($_idCliente){
      $consulta=$this->bd->query("delete from descuento where idDescuento=$_idDescuento;");
      print("<script>alert('Descuento eliminado exitosamente.')</script>");
  }
}
?>
