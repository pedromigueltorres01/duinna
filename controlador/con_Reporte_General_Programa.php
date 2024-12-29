<?php
session_start();
//print_r($_POST);
  
 
if (isset($_POST['ReporteGeneralPrograma'])){

	include("../modelo/mod_Reporte_general_programa.php");
	$reporteGne =new ReporteGeneral();
    $reporteGne->ReporteGrneral();


}else{


$perfil= $_SESSION['perfil']; 

                 if( $perfil == 'ADMINISTRADOR'){
                 		?>
		                 		<script type="text/javascript">
		                 			alert('Ha ocurrido un error');
		                 			window.location='../vista/Reportes_General_Programa.php';
		                 		</script>
                 		<?php		                  
              }else if($perfil =='COORDINADOR'){                 
                  		?>
		                 		<script type="text/javascript">
		                 			alert('Ha ocurrido un error');
		                 			window.location='../vista/Reportes_General_Programa_coor.php';
		                 		</script>
                 		<?php
              }else{
                 		 ?>
		                 		<script type="text/javascript">
		                 			alert('Ha ocurrido un error');
		                 			window.location='../vista/Reportes_General_Programa_promo.php';
		                 		</script>
                 		<?php
              } 




}

?>