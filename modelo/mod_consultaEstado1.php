<?php

class ReporteGeneral1{

public function reporte(){
include ("../modelo/mod_conexion.php");


$estado=strtoupper($_POST['estado']);



$consul_general=pg_query($con,"select h.codigo,h.primer_nombre,h.primer_apellido,h.fecha_naci,h.edad,h.estatus,u.estado,u.municipio,u.parroquia,u.direccion_sector from
 datos_nna as h  inner join ubicacion_nna as u
on h.codigo = u.codigo WHERE u.estado = '$estado' AND u.estatus ='INACTIVO' and h.estatus ='INACTIVO'");






?> 

<script type="text/javascript">
	
window.location="../vista/consultaPorEstado.php";	


</script>     <?php


exit();






}
}
?>