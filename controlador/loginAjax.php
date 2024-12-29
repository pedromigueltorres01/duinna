<?php
include_once("../modcelo/mod_conexion.php");
$mensajeOK=False;
$mensajeError='El Sistema no se Encuentra Disponible';
if(isset($_POST['usuario'],$_POST['password'])):

	if($_POST['usuario']!=""):

		if($_POST['password']!=""):


			$usuario=$_POST['usuario'];
			$password=$_POST['password'];




            



			$consulta=pg_query($con,("Select * from usuario where usuario='$usuario' and password='$password'"));
				if(pg_num_rows($consulta)>0):
					$mensajeOk=true;
					$Usua=pg_fetch_array($consulta);


							session_start();
					$_SESSION['Id']=$Usua[0];
					$_SESSION['usuario']=$Usua[1];
					$mensajeError='Logueado correctamente ok.';
				else:
					$mensajeError='Usuario o contraseña incorrecta.';
				endif;
			else:
				$mensajeError='Contraseña incorrecta.';
			endif;
		else:
			$mensajeError='Usuario no existe ok.';
		endif;
	else:
		$mensajeError='Todos los datos son requeridos.';
	endif;
	$salidaJson=array('respuesta' => $mensajeOk, 'mensaje' =>$mensajeError);
	echo json_encode($salidaJson);
?>
      