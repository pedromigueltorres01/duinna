<?php
require("../modelo/mod_conexion.php");
$id_municipio=$_POST['id_municipio'];

//$id_estado='1';
$resultMuni = pg_query($con,"SELECT id_parroquia, parroquia FROM parroquias WHERE id_municipio='$id_municipio' ORDER BY parroquia ASC;");
if(empty($resultMuni )){

	echo "error de consulta";
}


			




 echo $html= "<option value=''>Selecione</option>";
    while($rowMuni = pg_fetch_assoc($resultMuni)) {

 	

$html= "<option value='".$rowMuni['parroquia']."'>".$rowMuni['parroquia']."</option>";


 echo $html;

		

												 
								}
		 
		 

?>

