<?php
session_start();
class IngresarDatosEducativos{
    public $ESTATUS="ACTIVO";
    
  	

  
  public function AddDatosEducativos(){
  	

  	include ("../modelo/mod_conexion.php");


                $escolarizado=strtoupper($_POST['escolarizado']);
                $sabeleer=strtoupper($_POST['sabeleer']);
                $institucion=strtoupper($_POST['institucion']);
                $niveleducativo=strtoupper($_POST['niveleducativo']);
                $turno=strtoupper($_POST['turno']);
                $ultimo_grado_apro=strtoupper($_POST['ultimogradoaprobado']); 


      
      $codigo=$_SESSION['NUM_NNA'];
      $foranea=$_SESSION['fk'];
 


$consulta=pg_query($con,"SELECT codigo FROM  datos_educativos_nna where codigo  = '$codigo' and num_hijos ='$foranea'   ");

                 //valida si el Usuario ya exixte
                if(pg_num_rows ($consulta) ==0 ){


  	$insertarNna="INSERT INTO datos_educativos_nna (escolarizado,sabe_leer,institucion,ultimo_grado_apro,turno,nivel_educativo,codigo,num_hijos,estatus) values ('$escolarizado','$sabeleer','$institucion','$ultimo_grado_apro','$turno','$niveleducativo','$codigo','$foranea','$this->ESTATUS');";

         if (!$insertarNna) {

                                    ?><script>
                                      alert('No se pudo crear el usuario, intentelo de nuevo más tarde.');

                                    </script>

                                    <?php
                                    require("../index");

                               exit;
                                   
                                 } 
                                 $sql=pg_query($insertarNna);
                         $this->$insertarNna=null;
            
             ?>
                   <script type="text/javascript">
                     window.location="../vista/terceraparteidena.php";
                   </script>


             <?php

                 exit();              

} else{

                     ?>
                 <script type="text/javascript">
                      alert('Recuperando registro');
                     window.location="../vista/terceraparteidena.php";
                   </script>                
                     <?php





  }

  }


}

        

?>