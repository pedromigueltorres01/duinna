 <?php
 session_start();

 include('../controlador/validar_sessiones.php');
 verificar_session();
 
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Modificar Programa NNA</title>
   <link rel="stylesheet" type="text/css" href="../recursos/css/idena3.css">
  <script type="text/javascript" src="../recursos/js/jquery.js"></script>
  <link rel="stylesheet" type="text/css" href="../recursos/css/idena4.css">
  <link rel="stylesheet" type="text/css" href="../recursos/css/buscador.css" >
  <link rel="stylesheet" type="text/css" href="../recursos/css/prueba.css" >
  <link rel="stylesheet" type="text/css" href="../recursos/css/estilosdenombredeusuario.css" >
    <link rel="stylesheet" type="text/css" href="../recursos/css/reloj.css">
   <script type="text/javascript" src="../recursos/js/reloj.js"></script>
   <link rel="stylesheet" type="text/css" href="../recursos/css/estilo7.css">
   <link rel="stylesheet" type="text/css" href="../recursos/css/menu.css">
   <link rel="shortcut icon" type="image/x-icon" href="../recursos/imagenes/favicon.ico">


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
    <li><a href="../vista/Inicio_Promotor.php">INICIO </a></li>
    <li><a href="../vista/preguntadecedulapadre.php">REGISTRO NNA </a></li> 
    <li><a href="#">GESTIONAR NNA </a>
        <ul>
             <li><a href="../vista/inhabilitar_promo_nna.php">INHABILITAR NNA </a></li>
             <li><a href="../vista/habilitar_nna_Promo_.php">HABILITAR NNA </a></li>
             <li><a href="../vista/modifica_promo_nna.php">MODIFICAR DATOS DEL NNA </a></li>
 
         </ul>
     <li><a href="#">REPORTES </a>
        <ul>
             <li><a href="../vista/Reportes_Estado_promo.php">CONSULTA DE ESTADOS </a></li>
             <li><a href="../vista/Reporte_General_Estado_promo.php">CONSULTA NACIONAL </a></li>           
             <li><a href="../vista/Reportes_Programa_promo.php">REPORTES POR PROGRAMAS </a></li>
             <li><a href="../vista/Reportes_General_Programa_promo.php">REPORTES GENERAL POR PROGRAMAS </a></li>
           
         
 
         </ul>
    </li>
    <li><a href="#">REPORTES ESPECIFICO </a>
        <ul>
             <li><a href="../vista/Reporte_Discapacidad_promo.php">DISCAPACIDAD </a></li>
             <li><a href="../vista/Repore_Etnia_promo.php">PUEBLOS INDIGENAS </a></li>
             <li><a href="../vista/reporte_Escolarizado_promo.php">ESCOLARIZADO </a></li>
              <li><a href="../vista/buscar_familiares_promo.php">FAMILIAR </a></li>
             
         
 </li>
         
             
         
 
         </ul>
    
    <li><a href="../recursos/pdfs/manual_de_usuario.pdf" download="Manual de Usuario">AYUDA </a></li>
    <li><a href="../vista/confirmar_salida.php">SALIR </a></li>
</ul></br></br>


</center>
</br>




     <br>
       </form>

</br>
<center><h1><b style="color: #2ECCFA; " >Modificar datos de NNA</b></h1></center>


<div style=" width: 50%; text-align: left; ">
<form action="../controlador/con_modificar_datos_nna.php" method="POST">
  <center>
</br><div>
    <font style="margin-left: 20px" size="4"><p style="text-align: center; margin-top: 1em; ">Asignar Programa Preventivo</p></font>
</div>
<div>
    <select style="margin-left: 0%; top: -1.7em; " name="programapreventivo" required="complete este campo">

 <option value="" required="complete este campo">Seleccione</option>
<option value="Centro Comunitario de Protección Integral" required="complete este campo">Centro Comunitario de Protección Integral</option>
<option value="Semillero de la Patria Simón Bolívar" required="complete este campo">Semillero de la Patria Simón Bolívar</option>
<option value="Programa Nacional de Lectura Sombrero de la Ñ" required="complete este campo">Programa Nacional de Lectura Sombrero de la Ñ</option>
<option value="PROVINNA" required="complete este campo">Provinna</option>
<option value="Brigada de Formación en Comunicación Popular de NNA" required="complete este campo">Brigada de Formación en Comunicación Popular de NNA</option>
</select>
</div>
 <br><br>
<font style="margin-left: 5px" size="4"><p style="text-align: center;  margin-top: 1em;">Nombre del CCPI, Grupo o Codigo de Brigada</p></font>
<input style="margin-left: 2%; margin-top: 1.7em;" size="40" type="tex" name="ccpi" placeholder="Nombre del CCPI" required="complete este campo" >

<br><br>


    <font style="margin-left: 20px" size="4"><p style="text-align: center;  margin-top: 1em;">Lugar de Funcionamiento de la Brigada</p></font>
    <select style="margin-left: %; margin-top: 1.7em;" name="brigada" required="complete este campo">

 <option value="" required="complete este campo">Seleccione</option>
<option value="Institución Educativa" required="complete este campo">Institución Educativa</option>
<option value="Comunidad" required="complete este campo">Comunidad</option>
<option value="Nuevo Urbanismo" required="complete este campo">Nuevo Urbanismo</option>
<option value="Espacios de Recreación" required="complete este campo">Espacios de Recreación</option>
<option value="UPI" required="complete este campo">UPI</option>
<option value="UPIE" required="complete este campo">UPIE</option>
<option value="Otro" required="complete este campo">Otro</option>
</select>
 
     <br>

<br><br>




<div style=" width: 10;">
<input class='btn btn-lg btn-primary btn-block btn-signin' style="margin-left: 0%;" size="40" type="submit" name="incluir" value="Modificar">
</div>
</center>
</br>
</form>

</div>
         
<body>
    <center>    
                   
                </center>
</body>
</br></br></br></br></br>
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