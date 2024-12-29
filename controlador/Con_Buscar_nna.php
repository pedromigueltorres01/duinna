<?php
session_start();
//print_r($_POST);

 

if(isset($_POST['NNA']) && !empty($_POST['NNA'])){
    include('../modelo/mod_consulta_Especifina_Nna.php');

    $consu=new Reporteespecifica_nna();
    $res=$consu->consultarNna();
    
    $_SESSION['bus_nna']=$res;

    	




    $perfil= $_SESSION['perfil'];

                 if( $perfil == 'ADMINISTRADOR'){

         		 ?>
			    	<script type="text/javascript">
			    		window.location="../vista/consulta_especifica_Nna.php";
			    	</script>
    			<?php

          exit();

                  

                
              }else if($perfil =='COORDINADOR'){
              	 ?>
			    	<script type="text/javascript">
			    		window.location="../vista/consulta_especifica_coo_Nna.php";
			    	</script>
    			<?php
                  
         		 exit();


              }else{

              	 ?>
			    	<script type="text/javascript">
			    		window.location="../vista/consulta_especifica_promo_Nna.php";
			    	</script>
    			<?php
                 
                    
          		exit();



               
              } 
    

}else {


$perfil= $_SESSION['perfil']; 
                 if( $perfil == 'ADMINISTRADOR'){


			          ?>
							<script type="text/javascript">	
								alert('Asgeurese de Ingresar el Código del NNA valido!');
								window.location="../vista/Inicio.php";
							</script>
					<?php

                  

                
              }else if($perfil =='COORDINADOR'){
                  
              	?>
					<script type="text/javascript">	
						alert('Asgeurese de Ingresar el Código del NNA valido!');
						window.location="../vista/Inicio.php";
					</script>
				<?php


              }else{
                 ?>
						<script type="text/javascript">	
							alert('Asgeurese de Ingresar el Código del NNA valido!');
							window.location="../vista/Inicio.php";
						</script>
				<?php 
              } 
}


?>