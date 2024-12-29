 <?php
session_start();
class ReporteGeneral{

 public function ReporteGrneral(){


include ("../modelo/mod_conexion.php");



$consul=pg_query($con,"SELECT h.codigo,h.nacionalidad,h.cedula,h.primer_nombre,h.primer_apellido,h.fecha_naci,h.edad,h.sexo,h.estado_civil,h.telefono,h,correo,
h.indique_trabajo,
u.estado,u.municipio,u.parroquia,u.direccion_sector,
asig.asignar_programa,asig.fecha_incorporacion,asig.nombre_ccpi_grupo_codigo,asig.lugar_funcionamiento,
s.induque_discapacidad,s.indique_enfermedad,
e.rasgos_etnicos,e.rasgos_afroamericanos,
a.indique_deport,
edu.escolarizado,edu.sabe_leer,edu.institucion,edu.ultimo_grado_apro,edu.turno,edu.nivel_educativo,h.estatus
 FROM  datos_nna
 as h   INNER JOIN ubicacion_nna as u ON h.codigo=u.codigo INNER JOIN
 programa_nna as asig ON asig.codigo=h.codigo INNER JOIN salud_nna as s ON s.codigo = h.codigo INNER JOIN 
 etnia_nna as e ON e.codigo=h.codigo INNER JOIN actividad_recreativa_nna as a ON a.codigo=h.codigo INNER JOIN
 datos_educativos_nna as edu ON edu.codigo=h.codigo   WHERE   
 h.estatus ='ACTIVO' and  u.estatus ='ACTIVO' and  asig.estatus ='ACTIVO' and  s.estatus ='ACTIVO' and  e.estatus ='ACTIVO'
 and  a.estatus ='ACTIVO' and  edu.estatus ='ACTIVO'");


	$perfil= $_SESSION['perfil']; 

                 if( $perfil == 'ADMINISTRADOR'){

                   require_once('../vista/mostrar_consulta_General_Programa.php');
                     exit();                
              }else if($perfil =='COORDINADOR'){
                  
                  require_once('../vista/mostrar_consulta_General_Programa_coor.php');
                  exit();

              }else{
                   require_once('../vista/mostrar_consulta_General_Programa_promo.php');
                   exit();
               
              } 

       }
}
?>