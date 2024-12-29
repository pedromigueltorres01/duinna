<?php
//print_r($_POST);


if(isset($_POST['usuario']) && !empty($_POST['usuario']) &&
  isset($_POST['nombre']) && !empty($_POST['nombre']) &&
isset($_POST['Apellido']) && !empty($_POST['Apellido']) &&
isset($_POST['Perfil']) && !empty($_POST['Perfil']) &&
 isset($_POST['estado']) && !empty($_POST['estado'])  &&
 isset($_POST['password']) && !empty($_POST['password'])

){
  include_once('../modelo/mod_validar_existentencia_usua_modificar.php');
 
        $buscar =new Existen_usua_modi();
        $buscar->Validar();


}else  

{

	?>
			<script type="text/javascript">
				alert('Asegurese de llenar todos los campos');
			
			
				window.location="../vista/buscar_usuario_modificar.php";
			</script>

	<?php
		
		exit();

}

?>