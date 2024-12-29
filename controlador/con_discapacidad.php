<?php 
//print_r($_POST);

 

 
if ( isset($_POST['nadiscapacidad']) && !empty($_POST['nadiscapacidad']) ) {
	include_once("../modelo/mod_Asignar_discapacidad.php");


	$AddDisca=new IgresarDiscapacidad();
	$AddDisca->AddDiscapacidad();

	# code...
}else
{
	?>
       <script type="text/javascript">
       	   alert('Asegurese de llenar todos los datos');
       	   window.location="../vista/cuartaparteidena.php";
       </script>

	<?php
	exit();
}


?>