<?php 
class Usuario
{
	private $_idUser;
	private $_nombre;
	private $_edad;
	private $_telefono;
	private $_correo;
	private $_password;
	function __construct()
	{

	}
	public function getIdUser()
	{
		return $this->_idUser;
	}
	public function setIdUser($_idUser)
	{
		$this->_idUser=$_idUser;
	}
	public function getNombre()
	{
		return $this->_nombre;
	}
	public function setNombre($_nombre)
	{
		$this->_nombre=$_nombre;
	}
	public function getEdad()
	{
		return $this->_edad;
	}
	public function setEdad($_edad)
	{
		$this->_edad=$_edad;
	}
	public function getTelefono()
	{
		return $this->_telefono;
	}
	public function setTelefono($_telefono)
	{
		$this->_telefono=$_telefono;
	}
	public function getCorreo()
	{
		return $this->_correo;
	}
	public function setCorreo($_correo)
	{
		$this->_correo=$_correo;
	}
	public function getPassword()
	{
		return $this->_password;
	}
	public function setPassword($_password)
	{
		$this->password=$_password;
	}
}
 ?>