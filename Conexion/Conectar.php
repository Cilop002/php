<?php


function conexion(){
		$conexion = new mysqli("localhost","root","","proj");
		$conexion->query("SET NAMES 'utf8'");
		return $conexion;
	}
?>
