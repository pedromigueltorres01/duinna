<?php
//print_r($_POST);




 
if (isset($_POST['practicadeporte']) && !empty($_POST['practicadeporte'])) {

include_once('../modelo/mod_ingresar_actividades_recreativas.php');

	 $Addrecre=new ActividadesRecre();
	 $Addrecre->AddRecre();
	# code...
}else{

?>
<script type="text/javascript">
	alert('Asegurese de llenar todos lo campos!');
	window.location="../vista/actividadesrecreativas.php";


</script>



<?php

exit();
}


?>