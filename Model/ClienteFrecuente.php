<?php
class ClienteFrecuente{
  
  private $_idCliente;
  private $_idDescuento;

  function __construct(){
  }

  public function getIdCliente(){
    return $this->_idCliente;
  }
  public function getIdDescuento(){
    return $this->_idDescuento;
  }
  public function setIdCliente($_idCliente){
    $this->_idCliente=$_idCliente;
  }
  public function setIdDescuento($_idDescuento){
    $this->_idDescuento=$_idDescuento;
  }

  public function mostrarDatos(){
    $consulta=$this->bd->query("select * from clientefrecuente");
    while($filas=$consulta->fetch_assoc()){
       $this->clienteFrecuente[]=$filas;
           }
    return $this->clienteFrecuente;
  }

  public function agregarDatos($_idCliente,$_idDescuento){
   		$consulta=$this->bd->query("insert into clientefrecuente values ($_idCliente,$_idDescuento);");
  }

  public function modificarDatos($_idCliente,$_idDescuento){
      $consulta=$this->bd->query("update clientefrecuente set idDescuento=$_idDescuento where idCliente=$_idCliente;");
  }

  public function eliminarDatos($_idCliente){
      $consulta=$this->bd->query("delete from clientefrecuente where idCliente=$_idCliente;");
      print("<script>alert('Cliente eliminado de la lista exitosamente.')</script>");
  }
}
?>

