<?php
session_start();
ob_start();
class GestionarNna{

public $estatus="INACTIVO";
public $ESTATUS='ACTIVO';
public $ACTIVO_NNA;
public function Inhabilitar_nna(){
   $NNA=$_SESSION['NNa'];




   include_once('../modelo/mod_conexion.php');

   $consulta=pg_query($con,"SELECT codigo  FROM  datos_nna where codigo  = '$NNA'  or num_hijos= '$NNA' or cedula= '$NNA'  ");


                 //valida si el Usuario ya exixte
                if(pg_num_rows ($consulta) == !0){



      $consulta=pg_query("UPDATE ubicacion_nna set estatus= '$this->estatus'   WHERE codigo='$NNA' or num_hijos ='$NNA'");
	  $consulta=pg_query("UPDATE datos_nna set estatus= '$this->estatus'   WHERE codigo='$NNA' or num_hijos ='$NNA'");
	  $consulta=pg_query("UPDATE etnia_nna set estatus= '$this->estatus'  WHERE codigo='$NNA' or num_hijos ='$NNA'");
      $consulta=pg_query("UPDATE programa_nna set estatus= '$this->estatus'   WHERE codigo='$NNA' or num_hijos ='$NNA'");
      $consulta=pg_query("UPDATE salud_nna set estatus= '$this->estatus'   WHERE codigo='$NNA' or num_hijos ='$NNA'");
      $consulta=pg_query("UPDATE actividad_recreativa_nna set estatus= '$this->estatus'   WHERE codigo='$NNA' or num_hijos ='$NNA'");
      $consulta=pg_query("UPDATE datos_educativos_nna set estatus= '$this->estatus'   WHERE codigo='$NNA' or num_hijos ='$NNA'");


              $perfil= $_SESSION['perfil']; 
                 if( $perfil == 'ADMINISTRADOR'){
                     ?>
                             <script type="text/javascript">
                              alert('El Nna se inhabilitó correctamente.');
                              window.location="../vista/Inicio.php";                  
                             </script>
                    <?php                
              }else if($perfil =='COORDINADOR'){
                  
                  ?>
                             <script type="text/javascript">
                              alert('El Nna se inhabilitó correctamente.');
                              window.location="../vista/Inicio_Coordinador.php";                  
                             </script>
                    <?php 


              }else{
                   ?>
                             <script type="text/javascript">
                              alert('El Nna se inhabilitó correctamente.');
                              window.location="../vista/Inicio_Promotor.php";                  
                             </script>
                    <?php 



               
              }  

        }else{


                  $perfil= $_SESSION['perfil']; 
                 if( $perfil == 'ADMINISTRADOR'){


                    ?>
                       <script type="text/javascript">
                        alert('El Nna no está registrado. Sólo puede inhabilitar Nna con el código o la cédula del Nna. ');
                        window.location="../vista/Inicio.php";
                       </script>

                  <?php
               
              }else if($perfil =='COORDINADOR'){
                  
                        ?>
                           <script type="text/javascript">
                            alert('El Nna no está registrado. Sólo puede inhabilitar Nna con el código o la cédula del Nna. ');
                            window.location="../vista/Inicio_Coordinador.php";
                            

                           </script>
                      <?php
              }else{
                         ?>
                             <script type="text/javascript">
                              alert('El Nna no está registrado. Sólo puede inhabilitar Nna con el código o la cédula del Nna. ');
                              window.location="../vista/Inicio_Promotor.php";
                             </script>
                        <?php              
              }  
        }


} 
public function MostrarConNna(){



 include ("../modelo/mod_conexion.php");
           $NNA=$_POST['NNA']; 

       $consulta=pg_query($con,"SELECT codigo  FROM  datos_nna where codigo  = '$NNA'  or cedula= '$NNA'  ");


                 //valida si el Usuario ya exixte
                if(pg_num_rows ($consulta) == !0){

                  //$result = pg_query($con,"SELECT codigo from datos_nna where codigo  = '$NNA'  or num_hijos= '$NNA' or cedula= '$NNA' ;");

     /* if (!$result) {

       //echo "An error occurred.";
       exit;

      }*/
   
    
    
    
 $result = pg_query($con,"SELECT estatus from datos_nna where codigo  = '$NNA'  or num_hijos= '$NNA' or cedula= '$NNA' ;");
 $condicion=pg_fetch_array($result);

  if($condicion['0']=='ACTIVO'){


         $_SESSION['NNa']=$NNA;         

                 
                 

         $consul_NNA=pg_query($con,"select datos_nna.codigo,nacionalidad,datos_nna.cedula,datos_nna.primer_nombre,datos_nna.primer_apellido,datos_nna.fecha_naci,
datos_nna.edad,datos_nna.sexo,datos_nna.estado_civil,datos_nna.telefono,datos_nna.correo,datos_nna.estatus,datos_nna.promotor,datos_nna.cedulapromotor from datos_nna
inner join datos_representante_nna 
on datos_nna.num_hijos = datos_representante_nna.num_hijos 
inner join programa_nna
on datos_nna.num_hijos = programa_nna.num_hijos where datos_representante_nna.cedula = '$NNA' or datos_nna.codigo = '$NNA' or datos_nna.cedula = '$NNA'  ");
    $arr= pg_fetch_array($consul_NNA);

 //$this->ACTIVO_NNA=$arr;


  //print_r($arr);
  return $arr;


                   //$res=pg_query($consul_NNA);
}else if($condicion['0']=='INACTIVO'){

 $_SESSION['habilitar']=$NNA;

                 
                 

         $consul_NNA=pg_query($con,"select datos_nna.codigo,nacionalidad,datos_nna.cedula,datos_nna.primer_nombre,datos_nna.primer_apellido,datos_nna.fecha_naci,
datos_nna.edad,datos_nna.sexo,datos_nna.estado_civil,datos_nna.telefono,datos_nna.correo,datos_nna.estatus,datos_nna.promotor,datos_nna.cedulapromotor from datos_nna
inner join datos_representante_nna 
on datos_nna.num_hijos = datos_representante_nna.num_hijos 
inner join programa_nna
on datos_nna.num_hijos = programa_nna.num_hijos where datos_representante_nna.cedula = '$NNA' or datos_nna.codigo = '$NNA' or datos_nna.cedula = '$NNA'  ");


   



                   //$res=pg_query($consul_NNA);
          $arr= pg_fetch_array($consul_NNA);
           return $arr;


             

}else{


         $perfil= $_SESSION['perfil']; 
                 if( $perfil == 'ADMINISTRADOR'){

                          ?>
                           <script type="text/javascript">
                             alert('El Nna se encuentra Habalitó correctamente.');
                             window.location="../vista/Inicio.php";
                           </script>

                        <?php                
              }else if($perfil =='COORDINADOR'){
                  
                  ?>
                           <script type="text/javascript">
                             alert('El Nna se encuentra Habalitó correctamente.');
                             window.location="../vista/Inicio_Coordinador.php";
                           </script>

                        <?php


              }else{
                       ?>
                           <script type="text/javascript">
                             alert('El Nna se encuentra Habalitó correctamente.');
                             window.location="../vista/Inicio_Promotor.php";
                           </script>

                       <?php               
              }    
        }

 }else{

              $perfil= $_SESSION['perfil']; 
                 if( $perfil == 'ADMINISTRADOR'){


                     
                           ?>
                             <script type="text/javascript">
                               alert('El Nna no está registrado. Sólo puede gestionar con el código o la cédula del Nna. ');
                               window.location="../vista/Inicio.php";
                             </script>

                           <?php                
              }else if($perfil =='COORDINADOR'){
                  
                              
                           ?>
                             <script type="text/javascript">
                               alert('El Nna no está registrado. Sólo puede gestionar con el código o la cédula del Nna. ');
                               window.location="../vista/inhabilitar_coor_nna.php";
                             </script>

                           <?php
              }else{
                                         
                         ?>
                           <script type="text/javascript">
                             alert('El Nna no está registrado. Sólo puede gestionar con el código o la cédula del Nna. ');
                             window.location="../vista/Inicio_Promotor.php";
                           </script>

                         <?php               
              }  

      }

}
public function HabilitarNna(){
   $nna=$_POST['HABILITAR'];

 $nna=$_SESSION['habilitar'];


   include_once('../modelo/mod_conexion.php');

   $consulta=pg_query($con,"SELECT codigo  FROM  datos_nna where codigo  = '$nna'   or cedula= '$nna'  ");


                 //valida si el Usuario ya exixte
  if(pg_num_rows ($consulta) == !0){



                        $consulta=pg_query("UPDATE ubicacion_nna set estatus= '$this->ESTATUS'   WHERE codigo='$nna' or num_hijos ='$nna'");
                      $consulta=pg_query("UPDATE datos_nna set estatus= '$this->ESTATUS'   WHERE codigo='$nna' or num_hijos ='$nna'");
                      $consulta=pg_query("UPDATE etnia_nna set estatus= '$this->ESTATUS'  WHERE codigo='$nna' or num_hijos ='$nna'");
                        $consulta=pg_query("UPDATE programa_nna set estatus= '$this->ESTATUS'   WHERE codigo='$nna' or num_hijos ='$nna'");
                        $consulta=pg_query("UPDATE salud_nna set estatus= '$this->ESTATUS'   WHERE codigo='$nna' or num_hijos ='$nna'");
                        $consulta=pg_query("UPDATE actividad_recreativa_nna set estatus= '$this->ESTATUS'   WHERE codigo='$nna' or num_hijos ='$nna'");
                        $consulta=pg_query("UPDATE datos_educativos_nna set estatus= '$this->ESTATUS'   WHERE codigo='$nna' or num_hijos ='$nna'");




                $perfil= $_SESSION['perfil']; 
              if( $perfil == 'ADMINISTRADOR'){
                    ?>
                             <script type="text/javascript">
                              alert('El Nna se habilitó correctamente.');
                              window.location="../vista/Inicio.php";                        
                             </script>

                    <?php

              }else if($perfil =='COORDINADOR'){  
                  ?>
                             <script type="text/javascript">
                              alert('El Nna se habilitó correctamente.');
                              window.location="../vista/Inicio_Coordinador.php";
                              

                             </script>

                    <?php
              }else{
                   ?>
                             <script type="text/javascript">
                              alert('El Nna se habilitó correctamente.');
                              window.location="../vista/Inicio_Promotor.php";
                              

                             </script>

                    <?php 
              } 

  }else{




                  $perfil= $_SESSION['perfil']; 
                 if( $perfil == 'ADMINISTRADOR'){


                    ?>
                     <script type="text/javascript">
                      alert('El Nna no existe registrado. Sólo puede habilitar Nna con el código o la cédula del Nna. ');
                      window.location="../vista/Inicio.php";
                     </script>
                 <?php
                
              }else if($perfil =='COORDINADOR'){
                  
                  ?>
                     <script type="text/javascript">
                      alert('El Nna no existe registrado. Sólo puede habilitar Nna con el código o la cédula del Nna. ');
                      window.location="../vista/Inicio_Coordinador.php";
                     </script>
                 <?php


              }else{
                   ?>
                     <script type="text/javascript">
                      alert('El Nna no existe registrado. Sólo puede habilitar Nna con el código o la cédula del Nna. ');
                      window.location="../vista/Inicio_Promotor.php";
                     </script>
                 <?php
               
              } 


        }


    }


}



?>