<?php
//print_r($_POST);

  


if(isset($_POST['usuario']) && !empty($_POST['usuario'])){

include('../modelo/mod_consul_usuario_modificar.php');




			$buscar =new BuascarUsuModifica();
			$buscar->consulta();

}else{
 ?>
 <script type="text/javascript">
 	alert('Asegurese de llenar el campo');
 	window.location='../vista/buscar_usuario_modificar.php';
 </script>





<?php

}






?>