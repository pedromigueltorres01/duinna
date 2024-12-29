<?php
session_start();
//print_r($_POST);
 



if(isset($_POST['estado'])){

include_once('../modelo/mod_consulta_por_estado.php');
$consultar=new ConsultaPorEstado();
$consultar->consultaEstado();




}else if (isset($_POST['ReporteGeneral'])) {



	if (isset($_POST['Programa']) && !empty($_POST['Programa'])) {
		# code...
	

		if (isset($_POST['desde']) && !empty($_POST['desde']) 
			&& isset($_POST['hasta']) && !empty($_POST['hasta'] )) {

				include_once('../modelo/mod_reporte_general_Estado.php');
				$consulEsatado =new ReporteGeneral();
				$consulEsatado->ReporteGeneral();
				exit();



			# code...
		}else{
				$perfil= $_SESSION['perfil']; 

                 if( $perfil == 'ADMINISTRADOR'){

                     ?>
							<script type="text/javascript">
								alert('Asegúrese de seleccionar las fechas')
							window.location="../vista/Reporte_General_Estado.php";
							</script>
					<?php              
              }else if($perfil =='COORDINADOR'){
                  
                  	 ?>
							<script type="text/javascript">
								alert('Asegúrese de seleccionar las fechas')
							window.location="../vista/Reporte_General_Estado_coor.php";
							</script>
					<?php

              }else{
                    ?>
							<script type="text/javascript">
								alert('Asegúrese de seleccionar las fechas')
							window.location="../vista/Reporte_General_Estado_promo.php";
							</script>
					<?php
               
              }
			exit();
		}

}else{
   
				$perfil= $_SESSION['perfil']; 

                 if( $perfil == 'ADMINISTRADOR'){

                    ?>
						   <script type="text/javascript">
						   	alert('Asegúrese seleccionar el programa.');
						   	window.location="../vista/Reporte_General_Estado.php";
						   </script>
					<?php               
              }else if($perfil =='COORDINADOR'){
                  
                  	?>
						   <script type="text/javascript">
						   	alert('Asegúrese seleccionar el programa.');
						   	window.location="../vista/Reporte_General_Estado_coor.php";
						   </script>
					<?php

              }else{
                   ?>
						   <script type="text/javascript">
						   	alert('Asegúrese seleccionar el programa.');
						   	window.location="../vista/Reporte_General_Estado_promo.php";
						   </script>
					<?php
               
              }
}

	
}else
{

				$perfil= $_SESSION['perfil']; 

                 if( $perfil == 'ADMINISTRADOR'){

                    ?>
							<script type="text/javascript">
								window.location="../vista/Reportes_Estado.php";
							</script>
					<?php                
              }else if($perfil =='COORDINADOR'){
                  
                  	?>
							<script type="text/javascript">
								window.location="../vista/Reportes_Estado_coor.php";
							</script>
					<?php

              }else{
                   ?>
							<script type="text/javascript">
								window.location="../vista/Reportes_Estado_promo.php";
							</script>
					<?php
               
              }







}




?>