<?php
session_start();

class Reporteespecifica_nna{

    public function consultarNna(){

   include ("../modelo/mod_conexion.php");
           $NNA=$_POST['NNA']; 

       $consulta=pg_query($con,"SELECT codigo  FROM  datos_nna where codigo  = '$NNA'  or num_hijos= '$NNA' or cedula= '$NNA'  ");


                 //valida si el Usuario ya exixte
                if(pg_num_rows ($consulta) == !0){

                  //$result = pg_query($con,"SELECT codigo from datos_nna where codigo  = '$NNA'  or num_hijos= '$NNA' or cedula= '$NNA' ;");

     /* if (!$result) {

       //echo "An error occurred.";
       exit;

      }*/
    
    
    $codi=pg_fetch_array($consulta);
    





                 $_SESSION['codigo_consultaNNa']=$codi['0'];

                 
                 

         $consul_NNA=pg_query($con,"SELECT h.codigo,h.nacionalidad,h.cedula,h.primer_nombre,h.primer_apellido,h.fecha_naci,h.edad,h.sexo,h.estado_civil,h.telefono,h.correo,
h.indique_trabajo,
u.estado,u.municipio,u.parroquia,u.direccion_sector,
asig.asignar_programa,asig.fecha_incorporacion,asig.nombre_ccpi_grupo_codigo,asig.lugar_funcionamiento,
edu.escolarizado,edu.sabe_leer,edu.institucion,edu.ultimo_grado_apro,edu.turno,edu.nivel_educativo,h.estatus,h.promotor,h.cedulapromotor
 FROM  datos_nna
 as h   INNER JOIN ubicacion_nna as u ON h.codigo=u.codigo INNER JOIN
 programa_nna as asig ON asig.codigo=h.codigo INNER JOIN  
 datos_educativos_nna as edu ON edu.codigo=h.codigo   WHERE h.codigo='$NNA' or h.cedula='$NNA' or h.num_hijos ='$NNA'  
 and h.estatus ='ACTIVO' and  u.estatus ='ACTIVO' and  asig.estatus ='ACTIVO'
  and  edu.estatus ='ACTIVO' ");


$arr= pg_fetch_array($consul_NNA);
return $arr;

 }else{


$perfil= $_SESSION['perfil']; 
                 if( $perfil == 'ADMINISTRADOR'){


                     ?>
                         <script type="text/javascript">
                           alert('El Nna no existe registrado. ');
                           window.location="../vista/Inicio.php";
                         </script>

                      <?php
                
              }else if($perfil =='COORDINADOR'){
                  
                   ?>                         <script type="text/javascript">
                           alert('El Nna no existe registrado. ');
                           window.location="../vista/Inicio_Coordinador.php";
                         </script>
                      <?php


              }else{
                  
                       ?>        
                         <script type="text/javascript">
                           alert('El Nna no existe registrado. ');
                           window.location="../vista/Inicio_Promotor.php";
                         </script>
                      <?php

               
                    }

      }

    }
}
?>
