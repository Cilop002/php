<?php
include '../Conexion/Conectar.php';
require_once 'Proveedor.php';

class DAOProveedor{
    var $con;

    public function __construct() {

    }
    public function insertar($obj){
        $c = conexion();
        $id = $obj -> getIdProv();
        $nom = $obj -> getNombre();
        $tel = $obj -> getTelefono();
        $rep = $obj -> getRepresentante();
        $mail = $obj -> getCorreo();

        $sql = "insert into proveedor values ($id,'$nom','$tel','$rep','$mail');";
        if (!$c -> query($sql)){
            print "Error al ejecutar la consulta";
        }else{
            echo '<script language="javascript">alert("Proveedor insertado correctamente!");</script>';
        }

        mysqli_close($c);

        }
    public function eliminar($obj){
        $c = Conexion::conexion();
        $id = $obj -> getIdProv();
        $sql = "delete from proveedor where idProv = $id";
        if (!$c -> query($sql)){
            print "Error al ejecutar la consulta";
        }else{
            echo '<script language="javascript">alert("Proveedor eliminado correctamente!");</script>';
        }
        mysqli_close($c);
    }
    public function modificar($obj){
      $c = conexion();
      $id = $obj -> getIdProv();
      $nom = $obj -> getNombre();
      $tel = $obj -> getTelefono();
      $rep = $obj -> getRepresentante();
      $mail = $obj -> getCorreo();

        $sql = "update proveedor set nombre='$nom',telefono='$tel',representante='$rep',correo='$mail' where idProv= $id";
        if (!$c -> query($sql)){
            print "Error al ejecutar la consulta";
        }else{
            echo '<script language="javascript">alert("Proveedor modificado correctamente!");</script>';
        }

        mysqli_close($c);
    }
    public function listar(){
		$c = conectar();
		$sql="select * from proveedor";
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
		$sql="select * from proveedor where nombre like '$obj%'";
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
