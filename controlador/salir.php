<?php
session_start();
 session_destroy();

 include('validar_sessiones.php');
 verificar_session();





header("location: ../index.php");

?>


 
