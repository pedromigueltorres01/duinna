<?php
sesion_star();
include_once("../modelo/mod_conexion.php");
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$usuario=new conexion();
$usuario->conectar();

$sql = "select * from usuario where usuario='$usuario' and clave='$clave'";
$result=pg_query($sql);
if($query=pg_fetch_array($result)) 
{
	$_SESION['usuario'] =$query['usuario'];
	$_SESION['clave']   =$query['clave'];
	
?>
 <script>
parent.location="../vista/va la direccion de la vistade bienvenida"; 
 </script>
 <?php
 }
 else{ /* if (!empty($salida)){


$SESION['usuario']= $$usuarion;
// echo "sesion iniciada";
 header(location):../vista/para sacar el usuario")
 }*/
  ?>
  <script>
  alert("Usuario no registrado");
  parent.location"../vista/vis_login.html";
  </script>
  <?php
}
?>