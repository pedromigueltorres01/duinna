<?php
ini_set('dysplay-errors',1);
error_reporting(E_ALL);
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$respuestas=$_POST['respuesta'];
$pregunta=$_POST['pregunta'];

include_once("../modelo/mod_conexion.php");
$conexion= new conexion();
$pgconn=$conexion->conectar();
include_once("../modelo/mod_usuario.php");
$usu= new usuario();
$consulta= $usu->agregar($usuario,$clave,$cedula,$nombre,$apellido,$pregunta,$respuestas,$pgconn);
if($consulta){
	header('location:../vista/vis_registrocompleto');
	{else {
	echo"tabla Usuario vacio";
	}



?>