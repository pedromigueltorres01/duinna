<?php
session_start();
ob_start();
//listo
//print_r($_POST);
//error_reporting(E_ALL);

if(isset($_POST['HABILITAR']) && !empty($_POST['HABILITAR'])){

include_once('../modelo/mod_gestionar_nna.php');
 $obj =new GestionarNna();
 $obj->HabilitarNna();



}
else if(isset($_POST['NNA']) && !empty($_POST['NNA'])){

 include_once('../modelo/mod_gestionar_nna.php');
 //include_once('../vista/inhabilitar_nna_consultado.php');
 $obj =new GestionarNna();
 $res=$obj->MostrarConNna();

   $_SESSION['dat']=$res;
 //print_r($_SESSION['dat']);

   if($res['11']=="ACTIVO"){

                // muestra la vista correspodiente, segun el perfil
              $perfil= $_SESSION['perfil']; 
                 if( $perfil == 'ADMINISTRADOR' &&$res==['11']){


                     ?>
                     	<script type="text/javascript">
	
								window.location="../vista/inhabilitar_nna_consultado.php?arr=$lol";
						</script>
					<?php

                     exit();

                  

                
              }else if($perfil =='COORDINADOR'){

              	?>
                     	<script type="text/javascript">
	
								window.location="../vista/inhabilitar_nna_consultado_coor.php?arr=$lol";
						</script>
					<?php
                  
                  
                  exit();


              }else{


              		?>
                     	<script type="text/javascript">
	
								window.location="../vista/inhabilitar_nna_consultado_promo.php?arr=$lol";
						</script>
					<?php
                  


                   
                   exit();              
              }  
          }else if($res['11']=="INACTIVO"){

          	
          	$perfil= $_SESSION['perfil']; 
                 if( $perfil == 'ADMINISTRADOR'){

		?>
                     	<script type="text/javascript">
	
								window.location="../vista/mostrar_consulta_habilitar.php?arr=$lol";
						</script>
					<?php

                    
                     exit();

                  

                
              }else if($perfil =='COORDINADOR'){

              	?>
                     	<script type="text/javascript">
	
								window.location="../vista/mostrar_consulta_habilitar_coor.php?arr=$lol";
						</script>
					<?php
                  
                 
                  exit();


              }else{
              	?>
                     	<script type="text/javascript">
	
								window.location="../vista/mostrar_consulta_habilitar_promo.php?arr=$lol";
						</script>
					<?php
                   
                   exit();



               
              } 
          }
   
   
}else if(isset($_POST['modificarNna']) && !empty($_POST['modificarNna']))
{

	 include_once('../modelo/mod_gestionar_nna.php');
 $obj =new GestionarNna();
 $obj->Inhabilitar_nna();



}else{

			$perfil= $_SESSION['perfil']; 
                 if( $perfil == 'ADMINISTRADOR'){

						?>
						<script type="text/javascript">
							
							alert('Asegurese llenar el campo Buscar NNA.');
							window.location="../vista/inhabilitar_nna.php";
						</script>


						<?php

                  

                
              }else if($perfil =='COORDINADOR'){
                  
							                  ?>
							<script type="text/javascript">
								
								alert('Asegurese llenar el campo Buscar NNA.');
								window.location="../vista/inhabilitar_coor_nna.php";
							</script>


							<?php


              }else{
							                  ?>
							<script type="text/javascript">
								
								alert('Asegurese llenar el campo Buscar NNA.');
								window.location="../vista/inhabilitar_promo_nna.php";
							</script>


							<?php


               
              } 









}


?>