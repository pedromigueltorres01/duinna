<?php
session_start();
 class IgresarInformacionEtnica{
    public $ESTATUS="ACTIVO";

    public function AddEtnia(){


    	include_once('../modelo/mod_conexion.php');
      $etnia=strtoupper($_POST['etnia']);
      $rasgos_afroamericanos=strtoupper($_POST['afro']);
      $codigo=$_SESSION['NUM_NNA'];
      $foranea = $_SESSION['fk'];
 


$consulta=pg_query($con,"SELECT codigo FROM  etnia_nna where codigo  = '$codigo' and num_hijos ='$foranea'   ");

                 //valida si el Usuario ya exixte
                if(pg_num_rows ($consulta) ==0 ){


			$insertaRaza="INSERT INTO etnia_nna (rasgos_etnicos,rasgos_afroamericanos,codigo,num_hijos,estatus) values ('$etnia','$rasgos_afroamericanos','$codigo','$foranea','$this->ESTATUS');";
			     if (!$insertaRaza) {
				          ?><script>
                      alert('No se pudo crear el usuario, intentelo de nuevo más tarde.');
                      window.location="vista/terceraparteidena.php";
                   </script>

                 <?php
                exit;
				
			       }

			  $sql=pg_query($insertaRaza);
                         $this->$insertaRaza=null;
            
             ?>
                   <script type="text/javascript">
                    window.location="../vista/cuartaparteidena.php";
                   </script>


             <?php
            exit();   
}
{

                     ?>
                 <script type="text/javascript">
                  alert('Recuperando registro.');
                      window.location="../vista/cuartaparteidena.php";
                   
                      </script>                 
                     <?php

  }





    }



 }

?>







