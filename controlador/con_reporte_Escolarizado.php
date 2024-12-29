<?php
session_start();
//print_r($_POST);
 
if(isset($_POST['RealizarReporte'])){

      include('../modelo/mod_Reporte_Escolarizado.php');
     $reportESco=new ReporteEscolarizado();
     $reportESco->GenerarRepor();

}else{



	$perfil= $_SESSION['perfil']; 

                 if( $perfil == 'ADMINISTRADOR'){

                    ?>
							<script type="text/javascript">
								alert('Hubo un error, vuelva a intentarlo');
							    window.location="../vista/Reporte_Escolarizado.php";

							</script>


					<?php
                     exit();                
              }else if($perfil =='COORDINADOR'){
                  
                  ?>
								<script type="text/javascript">
									alert('Hubo un error, vuelva a intentarlo');
								    window.location="../vista/Reporte_Escolarizado_coor.php";

								</script>


					<?php
                  exit();

              }else{
                  ?>
								<script type="text/javascript">
									alert('Hubo un error, vuelva a intentarlo');
								    window.location="../vista/Reporte_Escolarizado_promo.php";

								</script>
					<?php
                   exit();
               
              }
}



?>