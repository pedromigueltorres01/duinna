<?php  session_start();

  
 

$usuario = $_POST['usuario'];
include_once('../modelo/modelo/mod_conexion.php');
$obj_conexion= new conexion();
$consulta = $obj_conexion->conectar();
include_once ('../modelo/mod_usuario.php');
$obj_usuario= new usuario();
$column= $obj_usuario->recuperarclave($usuario);
if($column) {
	$pregunta=$column['pregunta'];
	$respuesta=$column['respuesta'];
	?>
	<script type="text/javascript">
		parent.location
	</script>
	
	<?php 
	
	
	}	
	?>