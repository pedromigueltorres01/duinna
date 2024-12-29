<?php




if(isset($_POST['consulta_general']))
{
	include ("../modelo/mod_conexion.php");
    $consul_general=pg_query($con,"SELECT * FROM  registro_usuario where estatus !='INACTIVO'");
    if( !$consul_general){
    	?> 
    	<script>
    		alert('Hubo un Error en la consulta, intentelo de nuevo.');


    	</script>

    	<?php
        require("../vista/Inicio.php");
    		exit();
    }else{



	
include_once("../vista/mostrar_consulta_general.php");
exit();

  
  }



}else{

	?>
    <script type="text/javascript">
        alert('Ha Ocurrido un Error');
    </script>
    <?php
    require("../index.php");
}
?>