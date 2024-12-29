<?php
session_start();
//print_r($_POST);
 
 
if(isset($_POST['RealizarReporte'])){
 include_once('../modelo/mod_reporte_Etnia.php');

       $repor=new ReporteEtnia();
       $repor->GenerarReporte();


}else{



	$perfil= $_SESSION['perfil']; 

                 if( $perfil == 'ADMINISTRADOR'){

					?> 
						<script type="text/javascript">
							window.location="../vista/Inicio.php"
						</script>
					<?php

						
                     exit();                
              }else if($perfil =='COORDINADOR'){
                  
                  ?> 
						<script type="text/javascript">
							window.location="../vista/Inicio_Coordinador.php"
						</script>
				<?php


                  exit();

              }else{
                   ?> 
						<script type="text/javascript">
							window.location="../vista/Inicio_Promotor.php"
						</script>
				<?php
                   exit();
               
              } 



}


?>