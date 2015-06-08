<?php
class Registro{

  private $_idRegistro;
  private $_AMR;
  private $_fallasComunes;
  private $_AMRT;

  public function __construct(){
  }

  public function getIdRegistro(){
    return $this->_idRegistro;
  }
  public function getAMR(){
    return $this->_AMR;
  }
  public function getFallasComunes(){
    return $this->_fallasComunes;
  }
  public function getAMRT(){
    return $this->_AMRT;
  }
  public function setIdRegistro($_idRegistro){
    $this->_idRegistro=$_idRegistro;
  }
  public function setAMR($_AMR){
    $this->_AMR=$_AMR;
  }
  public function setFallasComunes($_fallasComunes){
    $this->_fallasComunes=$_fallasComunes;
  }
  public function setAMRT($_AMRT){
    $this->_AMRT=$_AMRT;
  }

  public function mostrarDatos(){
    $consulta=$this->bd->query("select * from registro");
    while($filas=$consulta->fetch_assoc()){
       $this->registro[]=$filas;
           }
    return $this->registro;
  }

  public function agregarDatos($_idRegistro,$_AMR,$_fallasComunes,$_AMRT){
       $consulta=$this->bd->query("insert into registro values ($_idRegistro,'$_AMR','$_fallasComunes','$_AMRT');");
       print("<script>alert('Registro ingresado exitosamente')</script>");
  }

  public function modificarDatos($_idRegistro,$_AMR,$_fallasComunes,$_AMRT){
      $consulta=$this->bd->query("update registro set AMR='$_AMR',fallasComunes='$_fallasComunes',AMRT='$_AMRT' where idRegistro=$_idRegistro;");
      print("<script>alert('Registro modificado exitosamente.')</script>");
  }

  public function eliminarDatos($_idRegistro){
      $consulta=$this->bd->query("delete from registro where idRegistro=$_idRegistro;");
      print("<script>alert('Registro eliminado exitosamente.')</script>");
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
