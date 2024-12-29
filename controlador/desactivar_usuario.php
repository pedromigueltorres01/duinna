<?php


if(isset($_POST['Eliminar']) ){


		$usuario=$_POST['usuario'];



			include ("../modelo/mod_conexion.php");
			include("modificar_Estatus_usuario.php");

			//hace una consulta de usuario ingresado
			$consulta=pg_query($con,"SELECT usuario FROM  registro_usuario where usuario  = '$usuario' ");

			           //valida si el Usuario ya exixte
			          if(pg_num_rows ($consulta) ==1 ):
			          	$cambiar =new Estatus();
			          	$cambiar->modificar_estatus();
			          	


			          

			          	
		
		



			  exit();


  endif;
          {

          ?> 
          <script>
          	alert('El usuario que introdujo no existe, introduzca un usuario válido.');
          	window.location="../vista/cambiar_estatus_usuario.php";

          
          </script>
          <?php

        
           exit();

          }



}
?>