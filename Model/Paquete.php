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

  public function mostrarDatos(){
    $consulta=$this->bd->query("select * from paquete");
    while($filas=$consulta->fetch_assoc()){
       $this->paquete[]=$filas;
           }
    return $this->paquete;
  }

  public function agregarDatos($_idPaquete,$_contenido){
   		$consulta=$this->bd->query("insert into paquete values ($_idPaquete,'$_contenido');");
   		print("<script>alert('Paquete ingresado exitosamente')</script>");
  }

  public function modificarDatos($_idPaquete,$_contenido){
      $consulta=$this->bd->query("update paquete set contenido='$_contenido' where idPaquete=$_idPaquete;");
      print("<script>alert('Paquete modificado exitosamente.')</script>");
  }

  public function eliminarDatos($_idPaquete){
      $consulta=$this->bd->query("delete from paquete where idPaquete=$_idPaquete;;");
      print("<script>alert('Paquete eliminado exitosamente.')</script>");
  }

  public function buscarDatos($busqueda){
      $consulta=$this->bd->query("select * from paquete where idPaquete=$busqueda");
      while($filas=$consulta->fetch_assoc()){
        $this->paquete[]=$filas;
      }
      return $this->paquete;
  }
}
?>
