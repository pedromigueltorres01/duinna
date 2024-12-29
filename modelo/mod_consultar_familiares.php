<?php
class Familiares{


public function Consultar(){
	include_once('../modelo/mod_conexion.php');
   $id_representante=$_POST['id_representante'];

	$consul=pg_query($con,"SELECT 
h.codigo,h.nacionalidad,h.primer_nombre,h.primer_apellido,h.sexo,h.estado_civil,h.estatus, 
pro.asignar_programa,pro.nombre_ccpi_grupo_codigo,pro.lugar_funcionamiento,
u.estado,u.municipio,u.parroquia,u.direccion_sector,
p.nacionalidad1,p.cedula,p.primer_nombre,p.primer_apellido,p.parentesco,p.sexo,p.estado_civil,p.telefono,p.correo,p.trabajo
,h.promotor,h.cedulapromotor
 FROM datos_representante_nna as p  INNER JOIN
 datos_nna as h  ON p.cedula  = h.num_hijos INNER JOIN  programa_nna as pro on pro.codigo=h.codigo INNER JOIN ubicacion_nna as u ON h.codigo=u.codigo   and p.cedula ='$id_representante' ");

	$perfil= $_SESSION['perfil']; 

                 if( $perfil == 'ADMINISTRADOR'){

                    require_once'../vista/mostrar_consulta_familiar.php';
                     exit();                
              }else if($perfil =='COORDINADOR'){
                  
                  require_once'../vista/mostrar_consulta_familiar_coor.php';
                  exit();

              }else{
                   require_once'../vista/mostrar_consulta_familiar_promo.php';
                   exit();
               
              } 




}


}

?>