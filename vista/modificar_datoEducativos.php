<?php
 session_start();

 include('../controlador/validar_sessiones.php');
 verificar_session();
 
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Modificar Datos Educativos NNa</title>
  <link rel="stylesheet" type="text/css" href="idena3.css">
  <link rel="stylesheet" type="text/css" href="menu.css">
  <link rel="stylesheet" type="text/css" href="../recursos/css/idena3.css">
  <link rel="stylesheet" type="text/css" href="../recursos/css/idena4.css">
  <link rel="shortcut icon" type="image/x-icon" href="../recursos/imagenes/favicon.ico">    <!icono de DUINNA en la pestaña (tittle)>
  <script type="text/javascript" src="../recursos/js/jquery.js"></script>
  <script type="text/javascript" src="../recursos/js/jquery.js"></script>


   <script type="text/javascript">
$(document).ready(function() {
    $('ul li:has(ul)').hover(function(e) {
         $(this).find('ul').css({display: "block"});
     },
     function(e) {
         $(this).find('ul').css({display: "none"});
     });
});
 </script>

</head>
<body>




  <header>
    <center>
       <head><img align="center" src="../recursos/imagenes/piedepagina.jpg" width="1330" height="80">
       <img src="DUINNA.jpg" style="width: 50%;
    height: 189px;"></head>


<P style="background-color:lightgrey; width: 100%;" align="center"><b>Data única de incorporación de niños, niñas y adolescentes</b></p>



  </br>
   <center>
<ul class="menu">
    <li><a href="../vista/Inicio.php">INICIO</a></li>
    <li><a href="../vista/preguntadecedulapadre.php">REGISTRO NNA</a></li> <li><a href="#">GESTIONAR NNA</a>
        <ul>
             <li><a href="../vista/inhabilitar_nna.php">INHABILITAR NNA</a></li>
             <li><a href="../vista/habilitar_nna.php">HABILITAR NNA</a></li>
             <li><a href="../vista/modifica_nna.php">MODIFICAR DATOS DEL NNA</a></li>
 
         </ul>
     <li><a href="#">REPORTES</a>
        <ul>
             <li><a href="../vista/Reportes_Estado.php">CONSULTA DE ESTADOS</a></li>
             <li><a href="../vista/Reporte_General_Estado.php">CONSULTA NACIONAL</a></li>
             
             <li><a href="../vista/Reportes_Programa.php">REPORTES POR PROGRAMAS</a></li>
             <li><a href="../vista/Reportes_General_Programa.php">REPORTES GENERAL POR PROGRAMAS</a></li>
           
         
 
         </ul>
    </li>
    <li><a href="#">REPORTES ESPECIFICO </a>
        <ul>
             <li><a href="../vista/Reporte_Discapacidad.php">DISCAPACIDAD</a></li>
             <li><a href="../vista/Repore_Etnia.php">PUEBLOS INDIGENAS</a></li>
             <li><a href="../vista/Reporte_Escolarizado.php">ESCOLARIZADO</a></li>
              <li><a href="../vista/buscar_familiares.php">FAMILIAR</a></li>
             
         
 </li>
         </ul>

         <li><a href="#">PRIVILEGIOS</a>
        <ul>
             <li><a href="../vista/crear_usu_login.html.php">CREAR USUARIO</a></li>
             <li><a href="../vista/consul_usuario.php">CONSULTAR USUARIO</a></li>
             <li><a href="../vista/buscar_usuario_modificar.php">MODIFICAR USUARIO</a></li>
               <li><a href="../vista/cambiar_estatus_usuario.php">ELIMINAR USUARIO</a></li>
                 <li><a href="../vista/consulta_de_usuarios_inactivos.php">COSULTAR USUARIOS ELIMINADOS</a></li>
                   <li><a href="../vista/activar_recuperar_usurios.php">RECUPERAR USUARIOS ELIMINADOS</a></li>
                     

             
         
 
         </ul>
    
    <li><a href="../recursos/pdfs/manual_de_usuario.pdf" download="Manual de Usuario">AYUDA</a></li>
    <li><a href="../vista/confirmar_salida.php">SALIR</a></li>
</ul></br></br>




</br>




     
     <br>
     <br>

<center><h1><b style="color: #2ECCFA;">Modificar datos de NNA</b></h1></center>

<br><br><br>
<script>

var mostrarValor = function(x){
document.getElementById('institucion').value=x;
}
</script>


<form action="../controlador/con_modificar_datos_nna.php" method="POST">
 <font style="margin-left: 0px" size="4"> <b>Esta escolarizado</b> </font>
    <select style="margin-left: 100px" id="escolarizado1" name="escolarizado" required="complete este campo" onChange="muestra(this.value);">
        <option value="" required="complete este campo" >Seleccione</option>
        <option value="Si escolarizado" required="complete este campo" >Si</option>
        <option value="No escolarizado" required="complete este campo" >No</option>
    
     </select>

</br>




        <br>
       <font style="margin-left: 0px" size="4"><b>Sabe Leer</font>
      <select style="margin-left: 158px" name="sabeleer" required="complete este campo" required="complete este campo">

<option value="" required="complete este campo">Seleccione</option>

<option value="Si sabe Leer" required="complete este campo">Si</option>

<option value="No sabe leer" required="complete este campo">No</option>


</select>
    




</br>

 



</select>

<br><br>
<font style="margin-left: 226px" size="4">Nivel Educativo</font>
      <select style="margin-left: 180px" name="niveleducativo" required="complete este campo">

<option value="" required="complete este campo">Seleccione</option>

<option value="preescolar" required="complete este campo">Pre-escolar aprobado</option>

<option value="primaria" required="complete este campo">Primaria aprobado</option>

<option value="bachillerato" required="complete este campo">Bachillerato aprobado</option>

<option value="TSU" required="complete este campo">Tecnico superior universitario aprobado</option>

<option value="N/A" required="complete este campo">N/A</option>

</select>



<br><br>

<font style="margin-left: 60px" size="4">Turno</font>
      <select style="margin-left: 256px" name="turno" required="complete este campo">

<option value="" required="complete este campo">Seleccione</option>

<option value="Mañana" required="complete este campo">Mañana</option>

<option value="Tarde" required="complete este campo">Tarde</option>

<option value="Noche" required="complete este campo">Noche</option>

<option value="Mixto" required="complete este campo">Mixto</option>

<option value="N/A" required="complete este campo">N/A</option>


</select>
<br><br>


<font style="margin-left: 115px" size="4">Ultimo Grado Aprobado</font>
  <select style="margin-left: 113px" name="ultimogradoaprovado" required="complete este campo">

<option value="" required="complete este campo">Seleccione</option>

<option value="1 nivel" required="complete este campo">1 nivel</option>

<option value="2 nivel" required="complete este campo">2 nivel</option>

<option value="3 nivel" required="complete este campo">3 nivel</option>

<option value="4 nivel" required="complete este campo">4 nivel</option>

<option value="5 nivel" required="complete este campo">5 nivel</option>

<option value="6 nivel" required="complete este campo">6 nivel</option>

<option value=Comenzando el nivel" required="complete este campo">Comenzando el nivel</b></option>

<option value="N/A" required="complete este campo">N/A</option>


</select>
</br></br>

 <br>
<font style="margin-left: 306px" size="4">Nombre la Institución donde estudia</font>
<input style="margin-left: 23px" size="40" type="tex"placeholder="Nombre de la institución" name="institucion" id="institucion" value="" required="complete este campo" pattern="{2,}" >

<br><br>



</br></br>



<input class='btn btn-lg btn-primary btn-block btn-signin' style="margin-left: 0px" size="40" type="submit" name="incluir" value="Modificar">



<br>
</form>
  

     <body>
    <center>    
                   
                </center>
</body>
</br></br>
<footer id="footer2" style="background-color: #999"> <address style="margin-left: 30%;"> <font color="white"><center></b> Intranet Idena - Copyletf2015 Instituto Anonimo Consejo Nacional de Derechos de Niñas, Niños y Adolescentes &copy; <br>
  Todos los derechos reservados &copy; </b></font> <br> </address> </footer>
</html>
<style>
input:focus {
background-color:#08ff64;
border: 2px solid #00aeea;     /*color del input cuando le dan click*/
}
</style>

<style>
input {
    -webkit-appearance: textfield;
    background-color: white;
    -webkit-rtl-ordering: logical;
    cursor: text;
    padding: 1px;
    border-width: 2px;                                       /*borde de los input*/
    border-top-width: 3px;
    border-right-width: 2px;
    border-bottom-width: 2px;
    border-left-width: 4px;
    border-style: inset;
    border-color: initial;
    border-image: initial;
    border-radius: 30px;
}
</style>


<style>
.btn {
    font-weight: 700;
    height: 36px;
    -moz-user-select: none;
    -webkit-user-select: none;      /*botones del incluir y borrar*/
    user-select: none;
    cursor: pointer;

  color:white;
  background-color:#0d8efc;
  border-color:#0fdb4eba;
}
</style>