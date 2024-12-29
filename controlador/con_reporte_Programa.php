<?php
session_start();
//print_r($_POST);
 
 
if(isset($_POST['RealizarReporte'])){
include("../modelo/mod_reporte_Programa.php");

$report=new ReporteDisca();
$report->GenerarReDisca();


}else{

$perfil= $_SESSION['perfil']; 

                 if( $perfil == 'ADMINISTRADOR'){

                    ?>
							<script type="text/javascript">	
								alert('Hubo un error!');
								window.location="../vista/Reportes_Programa.php";
							</script>
					<?php                
              }else if($perfil =='COORDINADOR'){
                  
                  ?>
						<script type="text/javascript">	
							alert('Hubo un error!');
							window.location="../vista/Reportes_Programa_coor.php";
						</script>
					<?php

              }else{
                   ?>
						<script type="text/javascript">	
							alert('Hubo un error!');
							window.location="../vista/Reportes_Programa_promo.php";
						</script>
					<?php
               
              } 






}


?>