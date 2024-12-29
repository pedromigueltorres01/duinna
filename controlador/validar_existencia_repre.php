<?php
//print_r($_POST);
if (isset($_POST['cedula'])  &&!empty($_POST['cedula'])  ){
 include_once('../modelo/validar_registro_NNa.php');

 
 $consu=new Consul_Existencia_repre();
 $consu->consultaCedula();


}else if (isset ($_POST['pasaporte'])  && !empty($_POST['pasaporte'])) {
	 include_once('../modelo/validar_registro_NNa.php');


	 $consu=new Consul_Existencia_repre();
 $consu->consultaPasaporte();
	# code...
}
{

	
}



?>