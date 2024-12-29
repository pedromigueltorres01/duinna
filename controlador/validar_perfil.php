    <?php
    session_start();
  //  print_r($_POST);


if (isset($_POST['validar_perfil']) && !empty($_POST['validar_perfil']) || isset($_POST['atras'])) {

 
		 $perfil=$_SESSION['perfil'];
	# code...
 

    if($perfil == 'ADMINISTRADOR'){

    		?>
	    		<script type="text/javascript">
	    			window.location="../vista/Inicio.php";
	    		</script>   		
      		<?php
			exit();	



      }else if ($perfil == 'COORDINADOR'){
			?>
				<script type="text/javascript">
				    window.location="../vista/Inicio_Coordinador.php";
				</script>     	
			<?php				      	
			exit();

      }else if($perfil == 'PROMOTOR'){
			?>
				<script type="text/javascript">
				      		window.location="../vista/Inicio_Promotor.php";
				</script>    			
		   <?php   	
			exit();
 
      }else{


 ?>

		
	

	<script type="text/javascript">
		alert1('No se ha podido validar su perfil, el registro se guardó satisfactoriamente vuelva a iniciar sesion.')
		window.location="../index.php";
	</script>
	<?php
	
	

}

    
}else{


 ?>

		
	

	<script type="text/javascript">
		alert(' ha ocurrido un error.')
		window.location="../index.php";
	</script>
	<?php
	


}

 ?>     