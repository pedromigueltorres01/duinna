<?php
 



    class Consulta_Especifica1{






    		public function consultar1(){

    			include_once("../modelo/mod_conexion.php");

					
    				
    				$usuario=$_POST['usuario'];

    					 

			

					$sql=("SELECT  nombre, apellido,  usuario,perfil,estado,estatus FROM registro_usuario where usuario ='$usuario' and estatus !='ACTIVO';");
					if(!$sql){


                    ?>
                    <script>
                    	alert("Se produjo un error, intentelo de nuevo más tarde.");
                    </script>

                    <?php
                        require("../index.php");
					}
                    $res=pg_query($sql);
					$arr= pg_fetch_array($res);
					require("../vista/mostrar_consulta_especifica_usu_inactivo.php");
					exit();




    	}
        




    }
   


 
 

?>