<?php
session_start();
class ReporteEscolarizado{

public function GenerarRepor(){
	include ("../modelo/mod_conexion.php");

$consul_general=pg_query($con,"select h.codigo,h.primer_nombre,h.primer_apellido,h.fecha_naci,h.edad,h.estatus,edu.escolarizado,edu.sabe_leer,edu.institucion,
edu.ultimo_grado_apro,edu.nivel_educativo,
edu.turno,h.promotor,h.cedulapromotor,edu.codigo,h.codigo from datos_nna as h inner join datos_educativos_nna as edu on h.codigo
 = edu.codigo and edu.escolarizado = 'SI ESCOLARIZADO' 
and h.estatus = 'ACTIVO' and edu.estatus='ACTIVO' ");

$perfil= $_SESSION['perfil']; 

                 if( $perfil == 'ADMINISTRADOR'){

                   require('../vista/mostrar_consulta_Escolarizado.php');
                     exit();                
              }else if($perfil =='COORDINADOR'){
                  
                  require('../vista/mostrar_consulta_Escolarizado_coor.php');
                  exit();

              }else{
                   require('../vista/mostrar_consulta_Escolarizado_promo.php');
                   exit();
               
              } 




}



}


?>