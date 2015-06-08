<?php
class Reservacion{

  private $_idReserva;
  private $_idRegistro;

  public function __construct(){
  }

  public function getIdReserva(){
    return $this->_idReserva;
  }
  public function getIdRegistro(){
    return $this->_idRegistro;
  }
  public function setIdReserva($_idReserva){
    $this->_idReserva=$_idReserva;
  }
  public function setIdRegistro($_idRegistro){
    $this->_idRegistro=$_idRegistro;
  }

  public function mostrarDatos(){
    $consulta=$this->bd->query("select * from reservacion");
    while($filas=$consulta->fetch_assoc()){
       $this->reservacion[]=$filas;
           }
    return $this->reservacion;
  }

  public function agregarDatos($_idReserva,$_idRegistro){
       $consulta=$this->bd->query("insert into reservacion values ($_idReserva,$_idRegistro);");
       print("<script>alert('Reservacion ingresada exitosamente')</script>");
  }

  public function modificarDatos($_idReserva,$_idRegistro){
      $consulta=$this->bd->query("update reservacion set idRegistro=$_idRegistro where idReserva=$_idReserva;");
      print("<script>alert('Reservacion modificada exitosamente.')</script>");
  }

  public function eliminarDatos($_idReserva){
      $consulta=$this->bd->query("delete from reservacion where idReserva=$_idReserva;");
      print("<script>alert('Cliente eliminado exitosamente.')</script>");
  }

  public function buscarDatos($busqueda){
      $consulta=$this->bd->query("select * from reservacion where idReserva=$busqueda");
      while($filas=$consulta->fetch_assoc()){
        $this->reservacion[]=$filas;
      }
      return $this->reservacion;
  }
}
?>
