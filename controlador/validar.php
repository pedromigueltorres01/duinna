<?php

 

//print_r($_POST);


	 session_start();
 

if( isset($_POST['usuario']) && !empty($_POST['usuario']) &&
    isset($_POST['password']) && !empty($_POST['password']) &&
isset($_POST['perfil']) && !empty($_POST['perfil'])){

 
			  	include('../modelo/mod_validar.php');
			  

			 $verificar =new ValidarSession();
			  $verificar->Session();

			  $sesion[5]=$_SESSION['perfil'];
			   if($sesion['5'] == 'ADMINISTRADOR'){

 	          ?>
				<script type="text/javascript">
			  		window.location="../vista/Inicio.php";
				</script>
	          <?php
				exit();     

      }else if ($sesion['5'] == 'COORDINADOR'){

				?> 
					<script type="text/javascript">
	      				window.location="../vista/Inicio_Coordinador.php";
	      			</script>
	      		<?php
				exit();
				


      }else if($sesion['5'] == 'PROMOTOR'){

				?>			
					<script type="text/javascript">
						window.location="../vista/Inicio_Promotor.php";
					</script>		
    			<?php
    			exit();
      }else{
      			?>
					<script type="text/javascript">
							alert('No se ha podido validar el perfil de usuario, vuelva a iniciar sesion!');
							window.location="../index.php";
					</script>
				<?php


      }


}else
{
			?><script type="text/javascript">
				alert('Aseguerese de llenar todos los campos');
				window.location="../index.php";
			</script>
			
      <?php

			

}



?>

	
