<?php
class DetalleReserva{

  private $_idReserva;
  private $_idCliente;
  private $_vehiculo;
  private $_fecha;
  private $_monto;

  public function __construct(){
  }

  public function getIdReserva(){
    return $this->_idReserva;
  }
  public function getIdCliente(){
    return $this->_idCliente;
  }
  public function getFecha(){
    return $this->_fecha;
  }
  public function getMonto(){
    return $this->_monto;
  }
  public function getVehiculo(){
    return $this->_vehiculo;
  }
  public function setVehiculo(){
    $this->_vehiculo=$_vehiculo;
  }
  public function setIdReserva($_idReserva){
    $this->_idReserva=$_idReserva;
  }
  public function setIdCliente($_idCliente){
    $this->_idCliente=$_idCliente;
  }
  public function setFecha($_fecha){
    $this->_fecha=$_fecha;
  }
  public function setMonto($_monto){
    $this->_monto=$_monto;
  }

  public function mostrarDatos(){
    $consulta=$this->bd->query("select * from detallereserva");
    while($filas=$consulta->fetch_assoc()){
       $this->detallereserva[]=$filas;
           }
    return $this->detallereserva;
  }

  public function agregarDatos($_idReserva,$_idCliente,$_vehiculo,$_fecha,$_monto){
   		$consulta=$this->bd->query("insert into detallereserva values ($_idReserva,$_idCliente,'$_vehiculo','$_fecha',$_monto);");
  }

  public function modificarDatos($_idReserva,$_idCliente,$_vehiculo,$_fecha,$_monto){
      $consulta=$this->bd->query("update detallereserva set idCliente=$_idCliente,vehiculo='$_vehiculo',fecha='$_fecha',monto='_monto' where idReserva=$_idReserva;");
  }

  public function eliminarDatos($_idReserva){
      $consulta=$this->bd->query("delete from detallereserva where idReserva=$_idReserva;");
  }

  public function buscarDatos($busqueda){
      $consulta=$this->bd->query("select * from detallereserva where idCliente like '$busqueda%' ");
      while($filas=$consulta->fetch_assoc()){
        $this->detallereserva[]=$filas;
      }
      return $this->detallereserva;
  }
}
?>
