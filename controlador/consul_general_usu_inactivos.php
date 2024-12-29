<?php

 


if(isset($_POST['consulta_general']))
{
	include ("../modelo/mod_conexion.php");
    $consul_general=pg_query($con,"SELECT * FROM  registro_usuario where estatus !='ACTIVO' ");
    if( !$consul_general){
    	?> 
    	<script>
    		alert('Hubo un Error en la consulta, intentelo de nuevo.');


    	</script>

    	<?php
        require("../index.php");
    		exit();
    }else{



	
include_once("../vista/mostrar_consulta_general_usu_inativos.php");
exit();

  
  }



}else{

    ?>
        <script type="text/javascript">
         alert('Hubo un Error en la consulta, intentelo de nuevo.');   
        </script>


    <?php
	require("../index.php");
}
?>