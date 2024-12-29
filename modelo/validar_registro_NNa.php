<?php
 session_start();
 class Consul_Existencia_repre{
	
		public function consultaCedula()

     		{
     	 
					include_once('../modelo/mod_conexion.php');
					
			 $cedula=$_POST['cedula'];
			 $_SESSION['fk'] = $cedula;
             $_SESSION['cedulapre2'] =$_POST['cedula']; 




		$consulta=pg_query($con,"SELECT cedula FROM  datos_representante_nna where cedula  = '$cedula'");

			           //valida si el Usuario ya exixte
			     if(pg_num_rows ($consulta) ==0 )
			       {
			          	  
					
                    ?><script type="text/javascript">
                    	
                    	 window.location="../vista/datosrepresentante.php";
                    </script>

                    <?php       
			          
			       }else

			        {

			         	?>

                          <script type="text/javascript">
                           window.location="../vista/formularioidenasegudocaso.php";
                          </script>
			         	


			         	<?php
			         	
                              exit();

                             
			        }


	      }
	      public function consultaPasaporte(){
	      	
		  include_once('../modelo/mod_conexion.php');
    
                     $pasaporte=$_POST['pasaporte'];
                     $_SESSION['fk'] = $pasaporte;
               
                     $_SESSION['cedulapre2'] =$pasaporte;  

                     

					$consulta=pg_query($con,"SELECT cedula FROM  datos_representante_nna where cedula  = '$pasaporte'");

			           //valida si el Usuario ya exixte
			          if(pg_num_rows ($consulta) ==0 )
			         {
			          	 
                       
                    ?><script type="text/javascript">
                    	
                    	 window.location="../vista/datosrepresentante.php";
                    </script>


                       

                    <?php
               
                           
			         }else
			         {   
                          ?>

                          <script type="text/javascript">
                           window.location="../vista/formularioidenasegudocaso.php";

                      </script>
			         	


			         	<?php

			        }




      }




 }
?>