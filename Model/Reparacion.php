<?php
class Reparacion{

  private $_idReparacion;

  public function __construct(){

  }

  public function getIdReparacion(){
    return $this->_idReparacion;
  }
  public function setIdReparacion($_idReparacion){
    $this->_idReparacion=$_idReparacion;
  }

  public function mostrarDatos(){
    $consulta=$this->bd->query("select * from reparacion");
    while($filas=$consulta->fetch_assoc()){
       $this->reparacion[]=$filas;
           }
    return $this->reparacion;   
  }

  public function agregarDatos($_idReparacion){
       $consulta=$this->bd->query("insert into registro values ($_idReparacion);");
       print("<script>alert(' Registro de Reparacion ingresado exitosamente')</script>");
  }

  public function eliminarDatos($_idReparacion){
      $consulta=$this->bd->query("delete from registro where idReparacion=$_idReparacion;");
      print("<script>alert('Registro de reparacion eliminado exitosamente.')</script>");
  }

  public function buscarDatos($busqueda){
      $consulta=$this->bd->query("select * from registro where idRegistro=$busqueda");
      while($filas=$consulta->fetch_assoc()){
        $this->registro[]=$filas;
      }
      return $this->registro;
  }
}
?>
