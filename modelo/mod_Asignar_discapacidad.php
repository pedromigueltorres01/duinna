<?php
session_start();
class IgresarDiscapacidad{

         public $ESTATUS="ACTIVO";
      

      public function AddDiscapacidad(){
      	include("../modelo/mod_conexion.php");


      	$discapacidad=strtoupper($_POST['nadiscapacidad']);      	
      	$enfermedad=strtoupper($_POST['poseeenfermedad']);
        $codigo=$_SESSION['NUM_NNA'];
        $foranea = $_SESSION['fk'];
 


              $consulta=pg_query($con,"SELECT codigo FROM  salud_nna where codigo  = '$codigo' and num_hijos ='$foranea' ");

                 //valida si el Usuario ya exixte
                if(pg_num_rows ($consulta) ==0 ){
      	
      	$insertadiscapacidad="INSERT INTO salud_nna (induque_discapacidad,indique_enfermedad,codigo,num_hijos,estatus) values ('$discapacidad','$enfermedad','$codigo','$foranea','$this->ESTATUS'); ";
      	if(!$insertadiscapacidad)
			{
				?>
				        <script>
                        alert('No se pudo crear el usuario, intentelo de nuevo más tarde.');
                </script>

                                    <?php
                                    require("../index.php");


			}
			$sql=pg_query($insertadiscapacidad);
              $sql=null;
                  
               $this->$insertadiscapacidad=null;
			                   
             ?>
              <script type="text/javascript">
              	  window.location="../vista/actividadesrecreativas.php";

              </script>

             <?php
          
                  
             exit();  


}else{




               ?>
               <script type="text/javascript">
                alert('Recuperando registro.');
                 
                 window.location="../vista/actividadesrecreativas.php";
               </script>
               <?php  




  }

      }


}



?>