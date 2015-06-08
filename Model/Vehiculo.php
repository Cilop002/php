
<?php
class Vehiculo{

  private $_numPlaca;
  private $_marca;
  private $_modelo;
  private $_anio;
  private $_color;
  private $_idProv;

  public function __construct(){
  }

  public function getNumPlaca(){
    return $this->_numPlaca;
  }
  public function getMarca(){
    return $this->_marca;
  }
  public function getModelo(){
    return $this->_modelo;
  }
  public function getAnio(){
    return $this->_anio;
  }
  public function getColor(){
    return $this->_color;
  }
  public function getIdProv(){
    return $this->_idProv;
  }
  public function setNumPlaca($_numPlaca){
    $this->_numPlaca=$_numPlaca;
  }
  public function setMarca($_marca){
    $this->_marca=$_marca;
  }
  public function setModelo($_modelo){
    $this->_modelo=$_modelo;
  }
  public function setAnio($_anio){
    $this->_anio=$_anio;
  }
  public function setColor($_color){
    $this->_color=$_color;
  }
  public function setIdProv($_idProv){
    $this->_idProv=$_idProv;
  }

  public function mostrarDatos(){
    $consulta=$this->bd->query("select * from vehiculo");
    while($filas=$consulta->fetch_assoc()){
       $this->vehiculo[]=$filas;
           }
    return $this->vehiculo;
  }

  public function agregarDatos($_numPlaca,$_marca,$_modelo,$_anio,$_color,$_idProv){
       $consulta=$this->bd->query("insert into vehiculo values ('$_numPlaca','$_marca','$_modelo','$_anio','$_color',$_idProv);");
       print("<script>alert('Vehiculo ingresado exitosamente')</script>");
  }

  public function modificarDatos($_numPlaca,$_marca,$_modelo,$_anio,$_color,$_idProv){
      $consulta=$this->bd->query("update cliente set marca='$_marca',modelo='$_modelo',anio='$_anio',color='$_color',idprov=$_idProv where numPlaca='$_numPlaca'");
      print("<script>alert('Vehiculo modificado exitosamente.')</script>");
  }

  public function eliminarDatos($_numPlaca){
      $consulta=$this->bd->query("delete from vehiculo where numPlaca='$_numPlaca';");
      print("<script>alert('Vehiculo eliminado exitosamente.')</script>");
  }

  public function buscarDatos($busqueda){
      $consulta=$this->bd->query("select * from vehiculo where marca like '$busqueda%'");
      while($filas=$consulta->fetch_assoc()){
        $this->vehiculo[]=$filas;
      }
      return $this->vehiculo;
  }
}
?>
