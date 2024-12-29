<?php 
error_reporting(E_ALL);
session_start();
$usuario = $_POST['usuario'];
$clave 	= $_POST['clave'];
$_SESSION['usuario'] = $usuario;
$_SESSION['clave'] = $clave;

include_once("../modelo/mod_conexion.php");
$conexion =new Conexion();
$pgconn = $conexion->conectar();
if($pgconn)
{  
include_once("../modelo/mod_usuario.php");
$obj_usuario = new usuario();
$column = $obj_usuario->autenticar($usuario,$clave,$pgconn);

}if($column) {
	$_SESSION['apellidos']= $column['apellidos'];
	$_SESSION['nombre']=$column['nombre'];
	$cod_perfil=$column['cod_perfil'];
	if($cod_perfil=='01') {
?>
	<script type="text/javascript">
	parent.location= "../vista/index_01.html";
	</script>
	<?php
    }
    if ($cod_perfil=='02') {
    	include_once ("../vista/index_02.php");
	} 
	}
   }
	?>