<?php
session_start();
class ReporteDisca{


public function GenerarReDisca(){


include ("../modelo/mod_conexion.php");
$programa=strtoupper($_POST['Programa']); 

$consul_general=pg_query($con,"
select h.codigo,h.cedula,h.primer_nombre,h.primer_apellido,h.fecha_naci,h.edad,h.sexo,h.telefono,h.correo,h.estatus,
p.asignar_programa,p.fecha_incorporacion,p.nombre_ccpi_grupo_codigo,p.lugar_funcionamiento,h.promotor,h.cedulapromotor
from datos_nna as h inner join programa_nna as p on h.codigo = p.codigo where p.asignar_programa =  '$programa' and 
h.estatus='ACTIVO' and p.estatus='ACTIVO'");
if (!$consul_general) {
  echo "no hace la consulta";
  # code...
}



				$perfil= $_SESSION['perfil']; 

                 if( $perfil == 'ADMINISTRADOR'){

                    require('../vista/mostrar_consulta_Programa.php');
                     exit();                
              }else if($perfil =='COORDINADOR'){
                  
                  require('../vista/mostrar_consulta_Programa_coor.php');
                  exit();

              }else{
                   require('../vista/mostrar_consulta_Programa_promo.php');
                   exit();
               
              } 

          

}




}



?>