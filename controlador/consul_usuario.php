<?php

 

    class Consulta_Especifica{






    		public function consultar(){

    			include_once("../modelo/mod_conexion.php");

					
    				
    				$usuario=$_POST['usuario'];

    					 

			

					$sql=("SELECT  nombre, apellido,  usuario,perfil,estado, passwords,estatus FROM registro_usuario where usuario ='$usuario' and estatus ='ACTIVO'");
					if(!$sql){


                    ?>
                    <script>
                    	alert("Se produjo un error, intentelo de nuevo más tarde.");
                        window.locaction="../vista/Inicio.php";
                    </script>

                    <?php

					}
                    $res=pg_query($sql);
					$arr= pg_fetch_array($res);
					require("../vista/mostrar_consulta_especifica.php");
					exit();




    	}
        




    }
   


 
 

?>