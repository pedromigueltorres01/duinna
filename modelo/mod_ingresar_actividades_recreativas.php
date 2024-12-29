<?php
session_start();
 class ActividadesRecre{

Public $ESTATUS="ACTIVO";
 public function AddRecre(){
 	include("../modelo/mod_conexion.php");


 	$deporte=strtoupper($_POST['practicadeporte']);  
  $codigo=$_SESSION['NUM_NNA'];
  $foranea = $_SESSION['fk'];
 


              $consulta=pg_query($con,"SELECT codigo FROM  actividad_recreativa_nna where codigo  = '$codigo' and num_hijos ='$foranea' ");

                 //valida si el Usuario ya exixte
                if(pg_num_rows ($consulta) ==0 ){

  $insertaRaza="INSERT INTO actividad_recreativa_nna (indique_deport,num_hijos,codigo,estatus) values ('$deporte','$foranea','$codigo','$this->ESTATUS');";
			if (!$insertaRaza) {
				?><script>
                                      alert('No se pudo crear el usuario, intentelo de nuevo más tarde.');
                                    </script>

                                    <?php


                               exit;
				
			}

			                           $sql=pg_query($insertaRaza);
                                  $this->$insertaRaza=null;



                                    ?>
                 <script type="text/javascript">
                      window.location="../vista/Guardadocompletoidenna.php";
                      </script>                 
                     <?php
       

               exit();

               }else{




               ?>
               <script type="text/javascript">
                window.location="../vista/Guardadocompletoidenna.php";
                 
               </script>
               <?php  




  }


 }




 }


?>