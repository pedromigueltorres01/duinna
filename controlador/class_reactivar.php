<?php

class Estatus1
{
 public $estatus='ACTIVO';

	
	public function modificar_estatus1(){
		include_once("../modelo/mod_conexion.php");

		$usuario=$_POST['usuario'];


		$consulta=pg_query("UPDATE registro_usuario SET estatus='$this->estatus' WHERE usuario='$usuario'");

		?>

       <script type="text/javascript">
       	
         alert('El usuario se recuperó corretamente!');
         window.location="../vista/Inicio.php"

       </script>


		<?php

			


	}
}

?>