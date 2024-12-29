<?php
session_start();
//print_r($_POST);
 


if(isset($_POST['id_representante']) && !empty($_POST['id_representante'])){
    require('../modelo/mod_consultar_familiares.php');
    $con=new Familiares();
    $con->Consultar(); 


}else{



$perfil= $_SESSION['perfil']; 

                 if( $perfil == 'ADMINISTRADOR'){

                    ?>
							<script type="text/javascript">
								alert('Asegurese de introducir la cédula del Representante para realizar la consulta familiar.');
								window.location="../vista/buscar_familiares.php";
							</script>


					<?php
                     exit();                
              }else if($perfil =='COORDINADOR'){
                  
                  ?>
							<script type="text/javascript">
								alert('Asegurese de introducir la cédula del Representante para realizar la consulta familiar.');
								window.location="../vista/buscar_familiares.php";
							</script>


					<?php
                  exit();

              }else{
                   ?>
							<script type="text/javascript">
								alert('Asegurese de introducir la cédula del Representante para realizar la consulta familiar.');
								window.location="../vista/buscar_familiares.php";
							</script>


					<?php
                   exit();
               
              } 








}

?>