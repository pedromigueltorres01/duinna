<?php
require("../modelo/mod_conexion.php");
$id_estado=$_POST['id_estado'];

//$id_estado='1';
$resultM = pg_query($con,"SELECT id_municipio, municipio FROM municipios WHERE id_estado='$id_estado' ORDER BY municipio ASC;");


 	echo $html=  "<option value='0'>Selecione</option>";
    while($rowM = pg_fetch_assoc($resultM))
    {
		$html= "<option value='".$rowM['id_municipio']."'>".$rowM['municipio']."</option>";
		echo $html;
	}
		 
		 

?>

