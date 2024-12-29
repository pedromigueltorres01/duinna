<?php
session_start();
class ReporteEtnia{


  public function GenerarReporte(){

  	include ("../modelo/mod_conexion.php");

  	$consul_general=pg_query($con,"select h.codigo,h.nacionalidad,h.cedula,h.primer_nombre,h.primer_apellido,h.fecha_naci,h.edad,h.sexo,h.estado_civil,h.telefono,h.promotor,h.cedulapromotor,
e.rasgos_etnicos,h.estatus
from datos_nna as h inner join etnia_nna as e on h.codigo = e.codigo and NOT rasgos_etnicos  = 'NO APLICA' and h.estatus = 'ACTIVO' and e.estatus='ACTIVO' ");


$perfil= $_SESSION['perfil']; 

                 if( $perfil == 'ADMINISTRADOR'){

					require_once('../vista/mostrar_consulta_Etnia.php');
						
                     exit();                
              }else if($perfil =='COORDINADOR'){
                  
                require_once('../vista/mostrar_consulta_Etnia_coor.php');


                  exit();

              }else{
                  require_once('../vista/mostrar_consulta_Etnia_promo.php');
                   exit();
               
      } 
  }
}


?>