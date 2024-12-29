<?php
session_start();
class ValidarSession{


public function Session(){
  

include_once("../modelo/mod_conexion.php");
	 $usuario  =$_POST['usuario'];
     $passwords=$_POST['password'];
     $perfil=strtoupper($_POST['perfil']);
    
     



			$result = pg_query($con,"SELECT usuario,passwords,estatus,nombre,apellido,perfil,estado from registro_usuario where usuario ='$usuario'   and perfil='$perfil' ;");

			if (!$result) {
 			 echo "An error occurred.";
 			 header('Location: ../index.php');
 			 exit;
			}

		
		
		$sesion= pg_fetch_array($result);

		


if($sesion[0] == $_POST['usuario'] &&  $sesion[2] == 'ACTIVO'){

  //verifica que la comparacion de la encriptacion este bien...
	if(password_verify($passwords, $sesion[1]) ){

      $_SESSION['usuario'] = $sesion[0];
      $_SESSION['username'] = $sesion[3];
      $_SESSION['apellido'] = $sesion[4];
      $_SESSION['perfil'] = $sesion[5];
      $_SESSION['estado'] = $sesion[6];
    
     
  

     
			


		

		}else{
				?>
				<script type="text/javascript">
					
				alert('La contraseña es incorrecta! ');
				window.location="../index.php";	
				</script>


				<?php

				





		}	


	}else 
	{
 ?>


					<script type="text/javascript">
							alert('Usuario no se encuentra registrado, o el perfil es incorrecto!');
					 		window.location="../index.php";
					</script>

	
	<?php

	
	
	

}









}



}

?>