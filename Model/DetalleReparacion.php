<?php
class DetalleReparacion{

  private $_idReparacion;
  private $_numPlaca;
  private $_falla;

  public function __construct(){
  }

  public function getIdReparacion(){
    return $this->_idReparacion;
  }
  public function setIdReparacion($_idReparacion){
    $this->_idReparacion=$_idReparacion;
  }
  public function getNumPlaca(){
    return $this->_numPlaca;
  }
  public function setNumPlaca($_numPlaca){
    $this->_numPlaca=$_numPlaca;
  }
  public function getFalla(){
    return $this->_falla;
  }
  public function setFalla($_falla){
    $this->_falla=$_falla;
  }

  public function mostrarDatos(){
    $consulta=$this->bd->query("select * from detallereparacion");
    while($filas=$consulta->fetch_assoc()){
       $this->detallereparacion[]=$filas;
           }
    return $this->detallereparacion;
  }

  public function agregarDatos($_idReparacion,$_numPlaca,$_falla){
   		$consulta=$this->bd->query("insert into detallereparacion values ($_idReparacion,'$_numPlaca','$_falla');");
  }

  public function modificarDatos($_idReparacion,$_numPlaca,$_falla){
      $consulta=$this->bd->query("update detallereparacion set numPlaca='$_numPlaca',falla='$_falla' where idReparacion=$_idReparacion;");
  }

  public function eliminarDatos($_idReparacion){
      $consulta=$this->bd->query("delete from detallereparacion where idReparacion=$_idReparacion;");
  }

  public function buscarDatos($busqueda){
      $consulta=$this->bd->query("select * from detallereparacion where nombre like '$busqueda%'");
      while($filas=$consulta->fetch_assoc()){
        $this->detallereparacion[]=$filas;
      }
      return $this->detallereparacion;
  }
}
?>
