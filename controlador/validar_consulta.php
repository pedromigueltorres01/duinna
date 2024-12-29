<?php
//print_r($_POST)


if(isset($_POST['usuario']) && !empty($_POST['usuario'])){


		$usuario=$_POST['usuario'];



			include ("../modelo/mod_conexion.php");
			include("consul_usuario.php");

			//hace una consulta de usuario ingresado
			$consulta=pg_query($con,"SELECT usuario FROM  registro_usuario where usuario  = '$usuario' and estatus != 'INACTIVO' ");

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
          </script>
          <?php
          include_once('../vista/consul_usuario.php');
           exit();

          }



}else
{

	?>
			<script>
				alert("Debe introducir el usario para poder hacerla consulta.");
			</script>
			<script type="text/javascript">
				window.location="../vista/consul_usuario.php";
			</script>

	<?php
		
		exit();


}
?>
