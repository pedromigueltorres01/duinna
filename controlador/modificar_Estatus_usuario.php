<?php

/**
* 
*/
class Estatus
{
 public $estatus='INACTIVO';

	
	public function modificar_estatus(){
		include_once("../modelo/mod_conexion.php");

		$usuario=$_POST['usuario'];


		$consulta=pg_query("UPDATE registro_usuario SET estatus='$this->estatus' WHERE usuario='$usuario'");

		?>

       <script type="text/javascript">
       	
         alert('El usuario se eliminó corretamente!');
         window.location="../vista/Inicio.php"

       </script>


		<?php

			


	}
}

?>