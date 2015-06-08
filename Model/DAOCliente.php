<?php
include '../Conexion/Conectar.php';
require_once 'Cliente.php';

class DAOCliente {
    var $con;

    public function __construct() {

    }
    public function insertar($obj){
        $c = conexion();
        $id = $obj -> getIdCliente();
        $name = $obj -> getNombre();
        $edad = $obj -> getEdad();
        $tel = $obj -> getTelefono();
        $mail = $obj -> getCorreo();
        $pass = $obj -> getPass();
        $nac = $obj -> getNacionalidad();

        $sql = "insert into cliente values ('$id','$name','$edad','$tel','$mail','$pass','$nac')";
        if (!$c -> query($sql)){
            print "Error al ejecutar la consulta";
        }else{
            echo '<script language="javascript">alert("Cliente insertado correctamente!");</script>';
        }

        mysqli_close($c);

        }
    public function eliminar($obj){
        $c = Conexion::conexion();
        $id = $obj -> getIdEquipo();
        $sql = "delete from cliente where idCliente = $id";
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
        $name = $obj -> getNombre();
        $edad = $obj -> getEdad();
        $tel = $obj -> getTelefono();
        $mail = $obj -> geCorreo();
        $pass = $obj -> getPass();
        $nac = $obj -> getNacionalidad();

        $sql = "update cliente set nombre = '$name', edad = $edad, telefono = '$tel', correo = '$mail', pass = '$pass', nacionalidad = '$nac' where idCliente = '$id'";
        if (!$c -> query($sql)){
            print "Error al ejecutar la consulta";
        }else{
            echo '<script language="javascript">alert("Cliente modificado correctamente!");</script>';
        }

        mysqli_close($c);
    }
    public function listar(){
		$c = conectar();
		$sql="select * from cliente";
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
		$sql="select * from cliente where idCliente like '%'$obj'%'";
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
