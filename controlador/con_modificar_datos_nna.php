<?php
session_start();
//print_r($_POST);

 

 
if(isset($_POST['Estado_mod']) && isset($_POST['municipio_mod']) && isset($_POST['parroqia']) && isset($_POST['direccion']) && !empty($_POST['Estado_mod']) && !empty($_POST['municipio_mod']) && !empty($_POST['parroqia']) && !empty($_POST['direccion']) ){

		require_once('../modelo/mod_modificar_nna.php');
  
       $insert=new ModificarDatos();
       $insert->ConsultaModi();

       $perfil= $_SESSION['perfil']; 
                 if( $perfil == 'ADMINISTRADOR'){


                    ?>
                        <script type="text/javascript">
                          alert('La ubicación del Nna se modificó correctamente!');
                          
                          window.location="../vista/Inicio.php";
                        </script>
                   <?php

                  exit();
                  
                }else if($perfil =='COORDINADOR'){
                  
                 ?>
                        <script type="text/javascript">
                          alert('La ubicación del Nna se modificó correctamente!');
                          
                          window.location="../vista/Inicio_Coordinador.php";
                        </script>
                <?php

                exit();
   

              }else{
                   ?>
                        <script type="text/javascript">
                          alert('La ubicación del Nna se modificó correctamente!');
                          
                          window.location="../vista/Inicio_Promotor.php";
                        </script>
                  <?php

                 exit();               
              } 


}else if(isset($_POST['escolarizado']) && isset($_POST['sabeleer']) && isset($_POST['niveleducativo']) && isset($_POST['turno']) && isset($_POST['ultimogradoaprovado']) && isset($_POST['institucion']) &&  !empty($_POST['escolarizado']) && !empty($_POST['sabeleer']) && !empty($_POST['niveleducativo']) && !empty($_POST['turno']) && !empty($_POST['ultimogradoaprovado']) && !empty($_POST['institucion'])){
    
		    require_once('../modelo/mod_modificar_nna.php');
		    $Educativos=new ModificarDatos();
		    $Educativos->ModificarDatosEducativos();
		       $perfil= $_SESSION['perfil']; 

                 if( $perfil == 'ADMINISTRADOR'){

                    ?>
                          <script type="text/javascript">
                            alert('Los datos Educativos se actualizaron Nna correctamente!');         
                            window.location="../vista/Inicio.php";
                          </script>
                    <?php                
              }else if($perfil =='COORDINADOR'){
                ?>
                          <script type="text/javascript">
                            alert('Los datos Educativos se actualizaron Nna correctamente!');         
                            window.location="../vista/Inicio_Coordinador.php";
                          </script>
                <?php
              }else{
                   ?>
                          <script type="text/javascript">
                            alert('Los datos Educativos se actualizaron Nna correctamente!');         
                            window.location="../vista/Inicio_Promotor.php";
                          </script>
                  <?php
              } 



}else if(isset($_POST['programapreventivo']) && isset($_POST['ccpi']) && isset($_POST['brigada']) && !empty($_POST['programapreventivo'])
&& !empty($_POST['ccpi']) && !empty($_POST['brigada'])){
			 require_once('../modelo/mod_modificar_nna.php');
			  $progra=new ModificarDatos();
			  $progra->ModificarPrograma();
						  $perfil= $_SESSION['perfil']; 

			                 if( $perfil == 'ADMINISTRADOR'){

			                     ?>
			                          <script type="text/javascript">
			                            alert('El cambio de progrma del Nna se se realizó correctamente!');
			                            
			                            window.location="../vista/Inicio.php";
			                          </script>
			                    <?php
			                   exit();                
			              }else if($perfil =='COORDINADOR'){
			                  
			                   ?>
			                          <script type="text/javascript">
			                            alert('El cambio de progrma del Nna se se realizó correctamente!');
			                            
			                            window.location="../vista/Inicio_Coordinador.php";
			                          </script>
			                  <?php
			                  exit();

			              }else{
			                  ?>
			                          <script type="text/javascript">
			                            alert('El cambio de progrma del Nna se se realizó correctamente!');
			                            
			                            window.location="../vista/Inicio_Promotor.php";
			                          </script>
			                  <?php
			                  exit();
			               
			              }



}else if(isset($_POST['cambiar_cedula'])  && !empty($_POST['cambiar_cedula'])){
     require_once('../modelo/mod_modificar_nna.php');

	$modicedula=new ModificarDatos();
	$modicedula->ModificarCedula();
			$perfil= $_SESSION['perfil']; 

		                 if( $perfil == 'ADMINISTRADOR'){

		                      ?>
		                          <script type="text/javascript">
		                            alert('Se Asignó la Cédula al Nna correctamente!');
		                            
		                            window.location="../vista/Inicio.php";
		                          </script>

		                     <?php                
		              }else if($perfil =='COORDINADOR'){
		                  
		                    ?>
		                        <script type="text/javascript">
		                          alert('Se Asignó la Cédula al Nna correctamente!');
		                          
		                          window.location="../vista/Inicio_Coordinador.php";
		                        </script>

		                  <?php 

		              }else{
		                  ?>
		                        <script type="text/javascript">
		                          alert('Se Asignó la Cédula al Nna correctamente!');
		                          
		                          window.location="../vista/Inicio_Promotor.php";
		                        </script>

		                  <?php 
		               
		              } 



}else
{


$perfil= $_SESSION['perfil']; 
                 if( $perfil == 'ADMINISTRADOR'){


                    ?>
						 <script type="text/javascript">
						 	alert('Asegúrese de no dejar ningún campo vacío!');
						 	window.location="../vista/Inicio.php";
						 </script>
					<?php

                  

                
              }else if($perfil =='COORDINADOR'){
                  
                  ?>
						 <script type="text/javascript">
						 	alert('Asegúrese de no dejar ningún campo vacío!');
						 	window.location="../vista/Inicio_Coordinador.php";
						 </script>
				<?php


              }else{
                   ?>
						 <script type="text/javascript">
						 	alert('Asegúrese de no dejar ningún campo vacío!');
						 	window.location="../vista/Inicio_Promotor.php";
						 </script>
					<?php


               
              } 





}


?>

 