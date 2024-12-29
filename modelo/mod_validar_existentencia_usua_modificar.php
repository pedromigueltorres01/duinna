<?php

class Existen_usua_modi{



	public function Validar(){
		include ("../modelo/mod_conexion.php");

	$usuario=$_POST['usuario'];
	$nombre =strtoupper($_POST['nombre']);
    $Apellido=strtoupper($_POST['Apellido']);
 
	
	$Perfil=strtoupper($_POST['Perfil']);
	$estado=strtoupper($_POST['estado']);
	$password=$_POST['password'];
/*

 
$estado =$estado1);
 echo $Apellido;
 echo $estado;
 echo $password;
 

		*/	

		
			          	



			          	


  
		$consulta=pg_query($con,"UPDATE registro_usuario SET nombre   = '$nombre'    WHERE usuario='$usuario' ");
		$consulta=pg_query($con,"UPDATE registro_usuario SET apellido  = '$Apellido'  WHERE usuario='$usuario' ");
        $consulta=pg_query($con,"UPDATE registro_usuario set perfil = '$Perfil'    WHERE usuario='$usuario' ");
		$consulta=pg_query($con,"UPDATE registro_usuario SET estado    = '$estado'    WHERE usuario='$usuario' ");
        
		$consulta=pg_query($con,"UPDATE registro_usuario SET passwords  = '$password'  WHERE usuario='$usuario' ");

		?>
		<script type="text/javascript">
			
         alert('Los datos se modificaron satisfactoriamente!')
         window.location="../vista/Inicio.php";
		</script>
          


		<?php


exit();





	}
}



	


?>