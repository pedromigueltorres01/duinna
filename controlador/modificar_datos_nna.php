<?php
//print_r($_POST);
if(isset($_POST['modificarNna'])){

include_once('../modelo/mod_modificar_nna.php');


		  $buscar=new ModificarDatos();
		  $buscar->ConsultaModi();





}

?>