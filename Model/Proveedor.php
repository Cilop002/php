
<?php
class Proveedor{

  private $_idProv;
  private $_nombre;
  private $_telefono;
  private $_representante;
  private $_correo;

  public function __construct(){
  }

  public function getIdProv(){
    return $this->_idProv;
  }
  public function getNombre(){
    return $this->_nombre;
  }
  public function getTelefono(){
    return $this->_telefono;
  }
  public function getRepresentante(){
    return $this->_representante;
  }
  public function getCorreo(){
    return $this->_correo;
  }
  public function setIdProv($_idProv){
    $this->_idProv=$_idProv;
  }
  public function setNombre($_nombre){
    $this->_nombre=$_nombre;
  }
  public function setTelefono($_telefono){
    $this->_telefono=$_telefono;
  }
  public function setRepresentante($_representante){
    $this->_representante=$_representante;
  }
  public function setCorreo($_correo){
    $this->_correo=$_correo;
  }

  public function mostrarDatos(){
    $consulta=$this->bd->query("select * from proveedor");
    while($filas=$consulta->fetch_assoc()){
       $this->proveedor[]=$filas;
           }
    return $this->proveedor;
  }

  public function agregarDatos($_idProv,$_nombre,$_telefono,$_representante,$_correo){
       $consulta=$this->bd->query("insert into proveedor values ($_idProv,'$_nombre','$_telefono','$_representante','$_correo');");
       print("<script>alert('Proveedor ingresado exitosamente')</script>");
  }

  public function modificarDatos($_idProv,$_nombre,$_telefono,$_representante,$_correo){
      $consulta=$this->bd->query("update proveedor set nombre='$_nombre',telefono='$_telefono',representante='$_representante',correo='$_correo' where idProv=$_idProv;");
      print("<script>alert('Proveedor modificado exitosamente.')</script>");
  }

  public function eliminarDatos($_idProv){
      $consulta=$this->bd->query("delete from proveedor where idProv=$_idProv;");
      print("<script>alert('Proveedor eliminado exitosamente.')</script>");
  }

  public function buscarDatos($busqueda){
      $consulta=$this->bd->query("select * from proveedor where nombre like '$busqueda%'");
      while($filas=$consulta->fetch_assoc()){
        $this->proveedor[]=$filas;
      }
      return $this->proveedor;
  }
}
?>

