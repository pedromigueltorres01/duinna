<?php
 
if(isset($_POST['usuario']) && !empty($_POST['usuario'])){


		$usuario=$_POST['usuario'];



			include ("../modelo/mod_conexion.php");
			include("consul_usuario.php");

			//hace una consulta de usuario ingresado
			$consulta=pg_query($con,"SELECT usuario FROM  registro_usuario where usuario  = '$usuario' ");

			           //valida si el Usuario ya exixte
			          if(pg_num_rows ($consulta) ==1 ):


			$consulta_Especifica=new Consulta_Especifica();
			$consulta_Especifica->consultar();


			  exit();


  endif;
          {

          ?> 
          <script>
          	alert("El  usuario que introdujo no existe, introduzca un usuario válido.");
          	window.location="../vista/Inicio.php"
          </script>
          <?php
          
           exit();

          }



}else
{

	?>
			<script>
				alert("Debe introducir el usario para poder hacerlasss consulta.");
			</script>

	<?php
		require("../vista/consul_usuario.phpl");
		exit();


}
?>