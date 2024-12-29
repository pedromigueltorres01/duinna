<?php
//print_r($_POST);
 

 
if (isset($_POST['incluir']) && !empty($_POST['incluir']) ) {
	include("../modelo/mod_informacion_Etnica.php");
	


       $Add=new IgresarInformacionEtnica();
        $Add->AddEtnia();



	# code...
}else
{

  ?>
    <script type="text/javascript">
    	alert('Asegúrese de llenar todos los campos!');
    	window.location="../vista/terceraparteidena.php";
    </script>

  <?php

}


?>