<?php
 



if(isset($_POST['nombre'])&& !empty($_POST['nombre'])  &&
 isset($_POST['apellido']) && !empty($_POST['apellido'])  &&
 isset($_POST['usuario']) && !empty($_POST['usuario']) &&
 isset($_POST['perfil']) && !empty($_POST['perfil']) &&
 isset($_POST['estado']) && !empty($_POST['estado']) &&
 isset($_POST['password']) && !empty($_POST['password'])&&
 isset($_POST['confirpassword'])  && !empty($_POST['confirpassword'])){
 	include('../modelo/mod_crearUsuarios.php');
 

			$verificar=new CrearUsuarios();
		    $verificar->Validar_Usua();

}else

		?>

             <script type="text/javascript"> 
              alert('HUBO ERROR. INICIE SESION NUEVAMENTE!.');

             </script>

		<?php
		require('../index.php');
exit;





  
?>