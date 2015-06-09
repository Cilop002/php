<?php
include '../Conexion/Conectar.php';
require_once 'Vehiculo.php';

class DAOVehiculo{
    var $con;

    public function __construct() {

    }
    public function insertar($obj){
        $c = conexion();
        $placa = $obj -> getNumPlaca();
        $marca = $obj -> getMarca();
        $model = $obj -> getModelo();
        $anio = $obj -> getAnio();
        $color = $obj -> getColor();
        $idP = $obj -> getIdProv();

        $sql = "insert into vehiculo values ('$placa','$marca','$model',$anio,'$color',$idP);";
        if (!$c -> query($sql)){
            print "Error al ejecutar la consulta";
        }else{
            echo '<script language="javascript">alert("Vehiculo insertado correctamente!");</script>';
        }

        mysqli_close($c);

        }
    public function eliminar($obj){
        $c = conexion();
        $placa = $obj -> getNumPlaca();
        $sql = "delete from Vehiculo where numPlaca='$placa'";
        if (!$c -> query($sql)){
            print "Error al ejecutar la consulta";
        }else{
            echo '<script language="javascript">alert("Vehiculo eliminado correctamente!");</script>';
        }
        mysqli_close($c);
    }
    public function modificar($obj){
      $c = conexion();
      $placa = $obj -> getNumPlaca();
      $marca = $obj -> getMarca();
      $model = $obj -> getModelo();
      $anio = $obj -> getAnio();
      $color = $obj -> getColor();
      $idP = $obj -> getIdProv();

        $sql = "update vehiculo set marca='$marca',modelo='$model',anio=$anio,color='$color',idProv=$idP where numPlaca='$placa';";
        if (!$c -> query($sql)){
            print "Error al ejecutar la consulta";
        }else{
            echo '<script language="javascript">alert("Vehiculo modificado correctamente!");</script>';
        }

        mysqli_close($c);
    }
    public function listar(){
		$c = conexion();
		$sql="select * from vehiculo";
		$resultado = $c->query($sql);
		//mostrar resultado bonito
		print "<table>";
		$ncampos = mysqli_num_fields($resultado);
		//imprime encabezados de la consulta
		print "<tr>";
		for($i=0; $i<$ncampos;$i++){
		  print "<td><b><font color='black'>". mysqli_fetch_field_direct($resultado, $i)->name."</font></b></td>";
		}
		print "</tr>";
		//ahora todo el contenido de la consulta
		print "<tr>";
		for($i=0; $i<$ncampos;$i++){
		 	while($fila=mysqli_fetch_row($resultado)){  //mientras hayan registros
			 	print "<tr>";
						for ($j=0; $j<$ncampos; $j++)
						{
							print "<td>". $fila[$j] . " </td> ";
						}
				print "</tr>";
		 	}
		}
		print "</tr>";
	}
        public function buscar($busqueda){
		$c=conexion();
		$sql="select * from vehiculo where marca like '$busqueda%'";
		$resultado = $c->query($sql);
		if(!$c->query($sql)){
				print "Error al ejecutar la sql: ";//.$c->mysql_error();
		}else{
			echo "<center><h3><strong>Resultado de la busqueda</strong><h3></center>";
                            print "<table>";
                            $ncampos = mysqli_num_fields($resultado);
                            //imprime encabezados de la consulta
                            print "<tr>";
                            for($i=0; $i<$ncampos;$i++){
                              print "<td><b><font color='black'>". mysqli_fetch_field_direct($resultado, $i)->name."</font></b></td>";
                            }
                            print "</tr>";
                            //ahora todo el contenido de la consulta
                            print "<tr>";
                            for($i=0; $i<$ncampos;$i++){
                             	while($fila=mysqli_fetch_row($resultado)){  //mientras hayan registros
                            	 	print "<tr>";
                                	for ($j=0; $j<$ncampos; $j++)
                                	{
                                            print "<td>". $fila[$j] . " </td> ";
					}
					print "</tr>";
                                    }
				}
					print "</tr>";
		     }
		mysqli_close($c);
	}
}
