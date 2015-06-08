<?php
class Reporte{

  private $_idReporte;
  private $_idRegistro;

  public function __construct(){
  }

  public function getIdReporte(){
    return $this->_idReporte;
  }
  public function getIdRegistro(){
    return $this->_idRegistro;
  }
  public function setIdReporte($_idReporte){
    $this->_idReporte=$_idReporte;
  }
  public function setIdRegistro($_idRegistro){
    $this->_idRegistro=$_idRegistro;
  }

  public function mostrarDatos(){
    $consulta=$this->bd->query("select * from reporte");
    while($filas=$consulta->fetch_assoc()){
       $this->reporte[]=$filas;
           }
    return $this->reporte;
  }

  public function agregarDatos($_idReporte,$_idRegistro){
       $consulta=$this->bd->query("insert into reporte values ($_idReporte,$_idRegistro);");
       print("<script>alert('Reporte ingresado exitosamente')</script>");
  }

  public function modificarDatos($_idReporte,$_idRegistro){
      $consulta=$this->bd->query("update reporte set idRegistro=$_idRegistro where idReporte=$_idReporte");
      print("<script>alert('Reporte modificado exitosamente.')</script>");
  }

  public function eliminarDatos($_idReporte){
      $consulta=$this->bd->query("delete from reporte where idReporte=$_idReporte;");
      print("<script>alert('Reporte eliminado exitosamente.')</script>");
  }

  public function buscarDatos($busqueda){
      $consulta=$this->bd->query("select * from reporte where idReporte=$busqueda");
      while($filas=$consulta->fetch_assoc()){
        $this->reporte[]=$filas;
      }
      return $this->reporte;
  }
}
?>
