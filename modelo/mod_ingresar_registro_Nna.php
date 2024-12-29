<?php
session_start();
class IngresarRegistroNna{
      public $estatus="ACTIVO";

      
     
      

public function AddNna(){
   include ("../modelo/mod_conexion.php");


         // pasa los valores de post a una variable php


            $Nacionalidad=$_POST['nacionalidad'];
            
            $Cedula=$_POST['cedula1'];
            $PrimerNombre=strtoupper($_POST['primernombre']); 
            $SegundoNombre=strtoupper($_POST['segundonombre']);
            $PrimerApellido=strtoupper($_POST['primerapellido']);
            $SegundoApellido=strtoupper($_POST['segundoapellido']);
            $Fecha_naci=strtoupper($_POST['fechadenacimiento']);
            $Edad=$_POST['años'];
            $estatus="ACTIVO";
            $Sexo=strtoupper($_POST['sexo']);
            $Estado_civil=strtoupper($_POST['civil']);
            $telefono=$_POST['telefonolocal'];
            $Email=strtoupper($_POST['mail']);
            $Trabajo=strtoupper($_POST['trabajo']);           
            $Programa=strtoupper($_POST['programapreventivo']);
            $FechaIncorporacion=$_POST['fechaincorporacion'];
            $ccpi=strtoupper($_POST['ccpi']);
            $brigada=strtoupper($_POST['brigada']);
            $cedula_promotor = $_SESSION['usuario'];
            $nombre_promotor = $_SESSION['username'];
            $codigo=$_SESSION['NUM_NNA'];

             $foranea = $_SESSION['fk'];

   //captura el numero de cedula del padre para generar la llave foranea
  


   
//inserta en la tabla datos_nna

      include ("../modelo/mod_conexion.php");

      //hace una consulta de Nna ingresado
      $consulta=pg_query($con,"SELECT codigo,cedula  FROM  datos_nna where codigo  = '$codigo'  or cedula ='$Cedula'    ");

                 //valida si el Usuario ya exixte
                if(pg_num_rows ($consulta) ==0 ){


                



     $q="INSERT INTO  datos_nna (nacionalidad,primer_nombre,segundo_nombre,primer_apellido,segundo_apellido,fecha_naci,edad,sexo,estado_civil,telefono,correo,indique_trabajo,estatus,cedula,num_hijos,codigo,promotor,cedulapromotor)

                        values ('$Nacionalidad','$PrimerNombre','$SegundoNombre','$PrimerApellido','$SegundoApellido','$Fecha_naci','$Edad','$Sexo','$Estado_civil','$telefono','$Email','$Trabajo','$this->estatus','$Cedula','$foranea','$codigo','$nombre_promotor','$cedula_promotor');";                     

                        if (!$q) {

                                    ?><script>
                                                  alert('No se pudo inserta los datos del NNa, vuelva a intentarlo.');
                                                  window.location="..vista/formularioidenasegudocaso.php";

                                                </script>

                                                <?php


                               exit;
                                   
                                 } 
                                            
                                                       $sql=pg_query($q);
                                                    //$sql=null;
                                                     $this->$q=null;
//inserta en la tabla Programa_nna

                           $qv="INSERT INTO  programa_nna (asignar_programa,nombre_ccpi_grupo_codigo,lugar_funcionamiento,num_hijos,codigo,estatus,fecha_incorporacion) values
                   ('$Programa','$ccpi','$brigada','$foranea','$codigo','$this->estatus','$FechaIncorporacion');";
                                    if (!$qv) {

                                                ?><script>
                                                  alert('No se pudo ingresar la dirección de NNA.');
                                                  window.location="..vista/formularioidenasegudocaso.php"

                                                </script>

                                                <?php


                                           exit;
                                               
                                             } 
                                                        
                                                     $sql=pg_query($qv);
                                                    $sql=null;
                  
                                                    $this->$qv=null;
               
                 
//llama la prximavista 
                                                  
                                          
                     ?>
                 <script type="text/javascript">
                      window.location="../vista/segundaparteidena.php";
                      </script>                 
                     <?php
       

               exit();
                

 } else{

                     ?>
                 <script type="text/javascript">
                  alert('Ya está registrado un NNA con la cédula insertada,  o el número de hijos en el formulario, verifique sus datos.');
                     window.location="../vista/formularioidena.php";
                      </script>                 
                     <?php




  }
  
                        


            


                        
  






              


} public function AddNna2(){
  
   include ("../modelo/mod_conexion.php");


         // pasa los valores de pot a una variable php


            $Nacionalidad=strtoupper($_POST['nacionalidad']);
            
            $Cedula=strtoupper($_POST['cedula1']);
            $num_hijos=$_POST['num_hijos'];
            $PrimerNombre=strtoupper($_POST['primernombre']); 
            $SegundoNombre=strtoupper($_POST['segundonombre']);
            $PrimerApellido=strtoupper($_POST['primerapellido']);
            $SegundoApellido=strtoupper($_POST['segundoapellido']);
            $Fecha_naci=$_POST['fechadenacimiento'];
            $Edad=strtoupper($_POST['años']);
            $estatus="ACTIVO";
            $Sexo=strtoupper($_POST['sexo']);
            $Estado_civil=strtoupper($_POST['civil']);
            $telefono=$_POST['telefonolocal'];
            $Email=strtoupper($_POST['mail']);
            $Trabajo=strtoupper($_POST['trabajo']);
            $estado=strtoupper($_POST['Estado']);
            $municipio=strtoupper($_POST['municipio']);
            $parroquia=strtoupper($_POST['parroqia']);
            $direccion=strtoupper($_POST['direccion']);
            $programa=strtoupper($_POST['programapreventivo']) ;
            $FechaIncorporacion=$_POST['fechaincorporacion'];
            $ccpi=strtoupper($_POST['ccpi']);
            $brigada=strtoupper($_POST['brigada']);


              $cedula_promotor = $_SESSION['usuario'];
              $nombre_promotor = strtoupper($_SESSION['username']);
              $codigo=$_SESSION['cedulapre2'].'-'.$num_hijos;
              $fkForanea2=$_SESSION['cedulapre2'];
 
 
   //captura el numero de cedula del padre para generar la llave foranea
  


   
//inserta en la tabla datos_nna

    

      //hace una consulta de Nna ingresado
      $consulta=pg_query($con,"SELECT codigo,cedula FROM  datos_nna where codigo  = '$codigo' or cedula ='$Cedula' ");


                 //valida si el Usuario ya exixte
                if(pg_num_rows ($consulta) ==0 ){

             $_SESSION['NUM_NNA']=$codigo;
                $_SESSION['fk']=$fkForanea2;
     
               


     $q="INSERT INTO  datos_nna (nacionalidad,primer_nombre,segundo_nombre,primer_apellido,segundo_apellido,fecha_naci,edad,sexo,estado_civil,telefono,correo,indique_trabajo,estatus,cedula,num_hijos,codigo,promotor,cedulapromotor) 
                        values ('$Nacionalidad','$PrimerNombre','$SegundoNombre','$PrimerApellido','$SegundoApellido','$Fecha_naci','$Edad','$Sexo','$Estado_civil','$telefono','$Email','$Trabajo','$this->estatus','$Cedula','$fkForanea2','$codigo','$nombre_promotor','$cedula_promotor');";                     

                        if (!$q) {

                                    ?><script>
                                      alert('No se inserta los datos del Nna, vuelva a intentarlo.');
                                      window.location='../vista/formularioidenasegudocaso.php';
                                    </script>

                                    <?php



                               exit;
                                   
                                 } 
                                         
                                                       $sql=pg_query($q);
                                                    //$sql=null;
                                                     $this->$q=null;

    $qv="INSERT INTO  programa_nna (asignar_programa,nombre_ccpi_grupo_codigo,lugar_funcionamiento,num_hijos,codigo,estatus,fecha_incorporacion) values
                   ('$programa','$ccpi','$brigada','$fkForanea2','$codigo','$this->estatus','$FechaIncorporacion');";
                                    if (!$qv) {

                                                ?><script>
                                                  alert('inserta la dirección Nna, vuelva a intentarlo.');
                                                  window.location="..vista/formularioidenasegudocaso.php"

                                                </script>

                                                <?php


                                           exit;
                                               
                                             } 
                                                        
                                                     $sql=pg_query($qv);
                                                    $sql=null;
                  
                                                    $this->$qv=null;


     





//inserta en la tabla Programa_nna

                           $qv="INSERT INTO  programa_nna (asignar_programa,fecha_incorporacion,nombre_ccpi_grupo_codigo,lugar_funcionamiento,num_hijos,codigo,estatus) values
                   ('$programa','$FechaIncorporacion','$ccpi','$brigada','$fkForanea2','$codigo','$this->estatus');";
                                    if (!$qv) {

                                                ?><script>
                                      alert('No se inserta los datos del Nna, vuelva a intentarlo.');
                                      window.location='../vista/formularioidenasegudocaso.php';
                                    </script>

                                    <?php



                                           exit;
                                               
                                             } 
                                                        
                                                     $sql=pg_query($qv);
                                                    $sql=null;
                  
                                                    $this->$qv=null;
               
                 
//llama la prximavista 5

                                     
                                          
                     ?>
                 <script type="text/javascript">
                      window.location="../vista/segundaparteidena2.php";
                      </script>                 
                     <?php
       

               exit();
                


 } else{

                     ?>
                 <script type="text/javascript">
                  alert('Ya está registrado un NNA con la cédula insertada,  o el número de hijos en el formulario, verifique sus datos.');
                     window.location="../vista/formularioidenasegudocaso.php";
                      </script>                 
                     <?php





  }
  
                        


          


}



}


?>