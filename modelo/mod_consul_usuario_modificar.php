<?php

class BuascarUsuModifica{


public function consulta(){
	$usuario=$_POST['usuario'];

include("../modelo/mod_conexion.php");
$consulta = pg_query($con,"SELECT usuario,nombre,apellido,perfil,estado,passwords from registro_usuario where usuario ='$usuario';");



require('../vista/modificar_usuario.php');

}




}



?>