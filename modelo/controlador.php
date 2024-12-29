<?php
	//incluir el archivo de la clase Usuario
	include_once("../modelo/mod_usuario.php");
	//atributos de la vista
	$usuario= $_POST['txtUsuario'];
	$password= $_POST['txtPassword'];
	
	//crear objeto Usuario	
	$obj_usuario = new Usuario();

	$respuesta = $obj_usuario->InicioSession($usuario,$password);

	if($respuesta==true){

		echo "Hola  $usuario</br>";

	}else{

		echo "Usuario Inválido";
	}


?>
