<?php
include '../Conexion/Conectar.php';
require_once 'Reservacion.php';

class DAOReservacion{
    var $con;

    public function __construct() {

    }
    public function insertar($obj){
        $c = conexion();
        $id = $obj -> getIdReserva();
        $idreg = $obj -> getIdRegistro();

        $sql = "insert into reservacion values ($id,$idreg);";
        if (!$c -> query($sql)){
            print "Error al ejecutar la consulta";
        }else{
            echo '<script language="javascript">alert("Reservacion insertada correctamente!");</script>';
        }

        mysqli_close($c);

        }

        public function modificar($obj){
          $c = conexion();
          $id = $obj -> getIdReserva();
          $idreg = $obj -> getIdRegistro();

            $sql = "update reservacion set idRegistro=$idreg where idReserva= $id";
            if (!$c -> query($sql)){
                print "Error al ejecutar la consulta";
            }else{
                echo '<script language="javascript">alert("Reservacion modificado correctamente!");</script>';
            }

            mysqli_close($c);
        }

    public function eliminar($obj){
        $c = Conexion::conexion();
        $id = $obj -> getIdReserva();
        $sql = "delete from reservacion where idReserva = $id";
        if (!$c -> query($sql)){
            print "Error al ejecutar la consulta";
        }else{
            echo '<script language="javascript">alert("Reservacion eliminado correctamente!");</script>';
        }
        mysqli_close($c);
    }
    public function listar(){
		$c = conectar();
		$sql="select * from reservacion";
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
		$sql="select * from reservacion where idReserva = $obj";
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
