<?php
session_start();
class ReporteDiscapacidad{


public function ReporteGe(){
  $programa=strtoupper($_POST["Programa"]);
  $desde=$_POST['desde'];
  $estado=strtoupper($_POST["estado"]);
  $hasta=$_POST ["hasta"];  

include ("../modelo/mod_conexion.php");

$consul_general=pg_query($con,"select h.codigo,asig.asignar_programa,h.cedula,nacionalidad,h.primer_nombre,h.primer_apellido,h.fecha_naci,h.edad,d.induque_discapacidad,
u.estado,u.municipio,u.parroquia,u.direccion_sector,h.estatus,
h.promotor,h.cedulapromotor from datos_nna as h inner join
 Salud_nna as d on h.codigo = d.codigo inner join ubicacion_nna as u on u.codigo=d.codigo inner join programa_nna as asig on asig.codigo = h.codigo where not induque_discapacidad = 'NO APLICA'  and h.estatus='ACTIVO' AND u.estatus='ACTIVO' and
 asig.fecha_incorporacion  BETWEEN '$desde'::DATE AND '$hasta'::DATE and u.estado ='$estado' and asig.asignar_programa='$programa'
 and asig.estatus = 'ACTIVO'  and d.estatus='ACTIVO' 
");

$perfil= $_SESSION['perfil']; 

                 if( $perfil == 'ADMINISTRADOR'){

                    require_once('../vista/mostrar_consulta_discapacidad.php');
                     exit();                
              }else if($perfil =='COORDINADOR'){
                  
                  require_once('../vista/mostrar_consulta_discapacidad_coor.php');
                  exit();

              }else{
                   require_once('../vista/mostrar_consulta_discapacidad_promo.php');
                   exit();
               
              }




}






}


?>