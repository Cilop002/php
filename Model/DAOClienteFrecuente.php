<?php
include '../Conexion/Conectar.php';
require_once 'ClienteFrecuente.php';

class DAOClienteFrecuente {
    var $con;

    public function __construct() {

    }
    public function insertar($obj){
        $c = conexion();
        $id = $obj -> getIdCliente();
        $idDesc = $obj -> getIdDescuento();

        $sql = "insert into clientefrecuente values ($id,$idDesc);";
        if (!$c -> query($sql)){
            print "Error al ejecutar la consulta";
        }else{
            echo '<script language="javascript">alert("Cliente insertado correctamente!");</script>';
        }

        mysqli_close($c);

        }
    public function eliminar($obj){
        $c = Conexion::conexion();
        $id = $obj -> getIdCliente();
        $sql = "delete from clientefrecuente where idCliente = $id";
        if (!$c -> query($sql)){
            print "Error al ejecutar la consulta";
        }else{
            echo '<script language="javascript">alert("cliente eliminado correctamente!");</script>';
        }
        mysqli_close($c);
    }
    public function modificar($obj){
      $c = conexion();
      $id = $obj -> getIdCliente();
      $idDesc = $obj -> getIdDescuento();

        $sql = "update clientefrecuente set idDescuento=$idDesc where idCliente = $id";
        if (!$c -> query($sql)){
            print "Error al ejecutar la consulta";
        }else{
            echo '<script language="javascript">alert("Cliente modificado correctamente!");</script>';
        }

        mysqli_close($c);
    }
    public function listar(){
		$c = conectar();
		$sql="select * from clientefrecuente";
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
        public function buscar($obj){
		$c=conectar();
		$sql="select * from clientefrecuente where idCliente = $obj";
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
