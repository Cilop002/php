
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
}
?>
