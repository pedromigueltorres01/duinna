<?php
session_start();
//print_r($_POST);
 
 
if( isset($_POST["Programa"])&& isset($_POST['desde']) && isset($_POST["estado"]) && isset($_POST ["hasta"]) && 
	!empty($_POST["Programa"]) && !empty($_POST['desde']) && !empty($_POST["estado"]) && !empty($_POST ["hasta"])){
 include('../modelo/mod_reporte_disca.php');
  $repor=new ReporteDiscapacidad();
  $repor->ReporteGe();

}else
{

$perfil= $_SESSION['perfil']; 

                 if( $perfil == 'ADMINISTRADOR'){
					?>

								<script type="text/javascript">
									alert('Asegúrese de llenar todos los campos.');
								    window.location="../vista/Reporte_Discapacidad.php";
								</script>

					<?php                
              }else if($perfil =='COORDINADOR'){
                  
                 	?>

								<script type="text/javascript">
									alert('Asegúrese de llenar todos los campos.');
								    window.location="../vista/Reporte_Discapacidad_coor.php";
								</script>

					<?php
              }else{
                  ?>

								<script type="text/javascript">
									alert('Asegúrese de llenar todos los campos.');
								    window.location="../vista/Reporte_Discapacidad_promo.php";
								</script>
					<?php
               
              } 

}


?>