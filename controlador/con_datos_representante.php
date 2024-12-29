<?php
//print_r($_POST);

 

if(isset($_POST['nacionalidad1'])&& isset($_POST['cedula']) && isset($_POST['num_hijos']) && isset($_POST['primernombrepadre']) && isset($_POST['primerapellidopadre']) && isset($_POST['nacionalidad']) &&  isset($_POST['fechadenacimientopadre']) && isset($_POST['años']) && isset($_POST['sexopadre']) && isset($_POST['civilpadre']) && isset($_POST['telefonopadre']) && isset($_POST['Estado']) && isset($_POST['municipio']) && !empty($_POST['parroqia'])  && isset($_POST['direccion']) && !empty($_POST['nacionalidad1'])&& !empty($_POST['cedula']) && isset($_POST['num_hijos'])  && !empty($_POST['primernombrepadre']) && !empty($_POST['primerapellidopadre']) && !empty($_POST['nacionalidad']) && !empty($_POST['fechadenacimientopadre']) && !empty($_POST['años']) && !empty($_POST['sexopadre']) && !empty($_POST['civilpadre']) && !empty($_POST['telefonopadre']) && !empty($_POST['Estado']) && !empty($_POST['municipio']) &&!empty($_POST['parroqia'])  && !empty($_POST['direccion']) ){
  include_once('../modelo/mod_ingresardatos.php');



     $Add=new IngresarDatos();
     $Add->Add_padre();
     exit();



}else
{


?> 
<script type="text/javascript">
	
	alert('Asegurese de llenar todos los campos!');

	window.location="../vista/datosrepresentante.php";
</script>


<?php

exit();
}




?>