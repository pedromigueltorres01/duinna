<?php
 session_start();

 include('../controlador/validar_sessiones.php');
 verificar_session();
 
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Consultar Familiares</title>
  <link rel="stylesheet" type="text/css" href="../recursos/css/tablas.css">
  <script type="text/javascript" src="../recursos/js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="../recursos/css/idena3.css" >
  <link rel="stylesheet" type="text/css" href="../recursos/css/buscador.css" >
  <link rel="stylesheet" type="text/css" href="../recursos/css/prueba.css" >
   <link rel="shortcut icon" type="image/x-icon" href="../recursos/imagenes/favicon.ico">    <!icono de DUINNA en la pestaña (tittle)>
  <link rel="stylesheet" type="text/css" href="../recursos/css/menu.css" >
     <script type="text/javascript" src="../recursos/js/jquery-1.3.2.min.js"></script>
<script language="javascript">
$(document).ready(function() {
  $(".botonExcel").click(function(event) {
    $("#datos_a_enviar").val( $("<div>").append( $("#Exportar_a_Excel").eq(0).clone()).html());
    $("#FormularioExportacion").submit();
});
});
</script>
<style type="text/css">
.botonExcel{cursor:pointer;}
</style>
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

<div style="color: #0489B1; font-size: 1.1em; ">
  <b style="margin-left: 4%; "><script> document.write(new Date())</script></b>
</div> <!muestra la fecha y la hora>
<div style="position: relative;margin-top: -1.2%; margin-left: 75%; color: #04B404; font-size: 18px;"> 
  <p  " class="nombreUsuario"  ><B>Bienvenid@ <?php echo $_SESSION['username'];?> &nbsp;<?php    
 echo$_SESSION['apellido']?></B></p
 ></div>





</head>
<body>
	<header>
    <center>
    	<head><img align="center" src="../vista/piedepagina.jpg" width="1330" height="80">
       <img src="../vista/DUINNA.jpg" style="width: 50%;
    height: 189px;"></head>


  





</body>


<head>
<html>
<section class="webdesigntuts-workshop">
  <form style= "margin-right: -77%; margin-top: -5%" id="searchform" action="../controlador/Con_Buscar_nna.php" method="POST">        
    <input type="search" name="NNA" placeholder="Buscar NNA..." required="complete este campo">         <!buscador>
    <button>Buscar</button>
  </form>
</section>
</html>

</head>





      <P style="background-color:lightgrey; width: 100%;" align="center"><b>Data única de incorporación de niños, niñas y adolescentes</b></p>

</center>
</br>
<center>
<ul class="menu">
    <li><a href="../vista/Inicio.php">INICIO </a></li>
    <li><a href="../vista/preguntadecedulapadre.php">REGISTRO NNA </a></li> 
    <li><a href="#">GESTIONAR NNA </a>
        <ul>
             <li><a href="../vista/inhabilitar_nna.php">INHABILITAR NNA </a></li>
             <li><a href="../vista/habilitar_nna.php">HABILITAR NNA </a></li>
             <li><a href="../vista/modifica_nna.php">MODIFICAR DATOS DEL NNA </a></li>
 
         </ul>
     <li><a href="#">REPORTES </a>
        <ul>
             <li><a href="../vista/Reportes_Estado.php">CONSULTA DE ESTADOS </a></li>
             <li><a href="../vista/Reporte_General_Estado.php">CONSULTA NACIONAL </a></li>
             
             <li><a href="../vista/Reportes_Programa.php">REPORTES POR PROGRAMAS </a></li>
             <li><a href="../vista/Reportes_General_Programa.php">REPORTES GENERAL POR PROGRAMAS </a></li>
           
         
 
         </ul>
    </li>
    <li><a href="#">REPORTES ESPECIFICO </a>
        <ul>
             <li><a href="../vista/Reporte_Discapacidad.php">DISCAPACIDAD </a></li>
             <li><a href="../vista/Repore_Etnia.php">PUEBLOS INDIGENAS </a></li>
             <li><a href="../vista/Reporte_Escolarizado.php">ESCOLARIZADO </a></li>
              <li><a href="../vista/buscar_familiares.php">FAMILIAR </a></li>
             
         
 </li>
         </ul>

         <li><a href="#">PRIVILEGIOS </a>
        <ul>
             <li><a href="../vista/crear_usu_login.html.php">CREAR USUARIO </a></li>
             <li><a href="../vista/consul_usuario.php">CONSULTAR USUARIO </a></li>
             <li><a href="../vista/buscar_usuario_modificar.php">MODIFICAR USUARIO </a></li>
               <li><a href="../vista/cambiar_estatus_usuario.php">ELIMINAR USUARIO </a></li>
                 <li><a href="../vista/consulta_de_usuarios_inactivos.php">COSULTAR USUARIOS ELIMINADOS </a></li>
                   <li><a href="../vista/activar_recuperar_usurios.php">RECUPERAR USUARIOS ELIMINADOS </a></li>
                     

             
         
 
         </ul>
    
    <li><a href="../recursos/pdfs/manual_de_usuario.pdf" download="Manual de Usuario">AYUDA </a></li>
    <li><a href="../vista/confirmar_salida.php">SALIR </a></li>
</ul></br></br>


</center>
 <form action="../vista/ficheroExcel.php" method="post" target="_blank"  style="margin-top: -2%" id="FormularioExportacion">
<p  style="margin-left: 56%"  ><B>Exportar a Excel</B>  <img src="../vista/export_to_excel.gif" class="botonExcel" /></p>
<input type="hidden" id="datos_a_enviar" name="datos_a_enviar"/>

</center>


   <table  style="margin-left: 0%" width="100%" border="1" cellpadding="20" cellspacing="0" bordercolor="#666666" id="Exportar_a_Excel" style="border-collapse:collapse;">
    <tr>
      <td colspan="27"><h2><p style="color: #01DFD7; font-size: 150%; margin: 0px; f" >Reporte Familiar</h2></td>
    </tr>
<tr bgcolor="#8A0808">
  <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Nº</td>
  <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Código Nna</td>
  <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Nacionalidad</td>
  <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Primer nombre</td>
  <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Primer apellido</td>
  <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Sexo</td>
  <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Estado civil</td>
  <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Estatus</td>
  <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Programa</td>
  <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Nombre de Ccpi Código Grupo o Brigada</td><td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Programa</td>
 
  <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Estado</td>
  <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Municiopio</td>
  <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Parroquia</td>
  <td style="color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Sector</td>

  

  <td style="background: #0404B4; color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Nacionalidad</td>
  <td style="background: #0404B4; color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Cédula</td>
  <td style="background: #0404B4; color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Nombre</td> 
  <td style="background: #0404B4; color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Apellido</td>
  <td style="background: #0404B4; color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Parentesco</td>
  <td style="background: #0404B4; color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Sexo</td>
  <td style="background: #0404B4; color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Estado civil</td>
  <td style="background: #0404B4; color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Teléfono</td>
  <td style="background: #0404B4; color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Email</td>
  <td style="background: #0404B4; color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Trabajo</td>
  <td style="background: #0404B4; color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Registrado por</td>
  <td style="background: #0404B4; color: white; font-family:arial, Times New Roman, helvetica; font-size: 100%; padding: 15px;">Cedula</td>
  
</tr>
<?php
$i=1;
  while($consulta=pg_fetch_array($consul)) {
  ?><tr>
      <td style="padding: 15px;"><?php echo "$i"." "; ?> </td>
      <td style="padding: 15px;"><?php echo $consulta['0']; ?></td>
      <td style="padding: 15px;"><?php echo $consulta['1']; ?></td>
      <td style="padding: 15px;"><?php echo $consulta['2']; ?></td>
      <td style="padding: 15px;"><?php echo $consulta['3']; ?></td>
      <td style="padding: 15px;"><?php echo $consulta['4']; ?></td>
      <td style="padding: 15px;"><?php echo $consulta['5']; ?></td>
      <td style="padding: 15px;"><?php echo $consulta['6']; ?></td>
      <td style="padding: 15px;"><?php echo $consulta['7']; ?></td>
      <td style="padding: 15px;"><?php echo $consulta['8']; ?></td>
      <td style="padding: 15px;"><?php echo $consulta['9']; ?></td>
      <td style="padding: 15px;"><?php echo $consulta['10']; ?></td>
      <td style="padding: 15px;"><?php echo $consulta['11']; ?></td>
      <td style="padding: 15px;"><?php echo $consulta['12']; ?></td>
      <td style="padding: 15px;"><?php echo $consulta['13']; ?></td>
      <td style="padding: 15px;"><?php echo $consulta['14']; ?></td>
      <td style="padding: 15px;"><?php echo $consulta['15']; ?></td>
      <td style="padding: 15px;"><?php echo $consulta['16']; ?></td>
      <td style="padding: 15px;"><?php echo $consulta['17']; ?></td>
      <td style="padding: 15px;"><?php echo $consulta['18']; ?></td>
      <td style="padding: 15px;"><?php echo $consulta['19']; ?></td>
      <td style="padding: 15px;"><?php echo $consulta['20']; ?></td>
      <td style="padding: 15px;"><?php echo $consulta['21']; ?></td>
      <td style="padding: 15px;"><?php echo $consulta['22']; ?></td>
      <td style="padding: 15px;"><?php echo $consulta['23']; ?></td>
      <td style="padding: 15px;"><?php echo $consulta['24']; ?></td>
      <td style="padding: 15px;"><?php echo $consulta['25']."<br>"; ?></td>
  </tr>
  


  <?php
  $i++; 
}

?>
