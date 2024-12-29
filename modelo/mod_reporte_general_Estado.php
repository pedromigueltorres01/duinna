<?php
session_start();
class ReporteGeneral{



 public function ReporteGeneral(){

			$desde=$_POST['desde'];
			$hasta=$_POST['hasta'];
			$programa= strtoupper($_POST['Programa']);

include ("../modelo/mod_conexion.php");
$consul_generalEstado=pg_query($con,"
						SELECT h.codigo,
						u.estado,u.municipio,u.parroquia,u.direccion_sector,asig.asignar_programa,asig.fecha_incorporacion,
						asig.nombre_ccpi_grupo_codigo,
						h.nacionalidad,h.cedula,h.primer_nombre,h.primer_apellido,h.fecha_naci,h.edad,h.sexo,
						edu.escolarizado,edu.nivel_educativo,edu.turno,
						e.rasgos_etnicos,e.rasgos_afroamericanos,
						s.induque_discapacidad,s.indique_enfermedad,
						h.indique_trabajo,
						a.indique_deport,
						h.estatus,
						p.primer_nombre,p.primer_apellido,p.parentesco,p.nacionalidad1,p.cedula,p.telefono,p.correo,p.trabajo
						 FROM  datos_nna
						 as h   INNER JOIN ubicacion_nna as u ON h.codigo=u.codigo INNER JOIN
						 programa_nna as asig ON asig.codigo=h.codigo INNER JOIN salud_nna as s ON s.codigo = h.codigo INNER JOIN 
						 etnia_nna as e ON e.codigo=h.codigo INNER JOIN actividad_recreativa_nna as a ON a.codigo=h.codigo INNER JOIN
						 datos_educativos_nna as edu ON edu.codigo=h.codigo INNER JOIN datos_representante_nna as p ON p.num_hijos = h.num_hijos   WHERE asig.fecha_incorporacion  BETWEEN '$desde'::DATE AND '$hasta'::DATE and 
						 h.estatus ='ACTIVO' and  u.estatus ='ACTIVO' and  asig.estatus ='ACTIVO' and  s.estatus ='ACTIVO' and  e.estatus ='ACTIVO'
						 and  a.estatus ='ACTIVO' and  edu.estatus ='ACTIVO' and asig.asignar_programa='$programa'    
");


			$perfil= $_SESSION['perfil']; 

                 if( $perfil == 'ADMINISTRADOR'){

                    require_once('../vista/Mostrar_consulta_estado.php');
                     exit();                
              }else if($perfil =='COORDINADOR'){
                  
                  require_once('../vista/Mostrar_consulta_estado_coor.php');
                  exit();

              }else{
                   require_once('../vista/Mostrar_consulta_estado_promo.php');
                   exit();
               
              } 
	}
}
?>