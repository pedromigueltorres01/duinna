<?php
 session_start();

 include('../controlador/validar_sessiones.php');
 verificar_session();
 
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Datos del NNA</title>
	<link rel="stylesheet" type="text/css" href="../recursos/css/idena3.css">
  <link rel="stylesheet" href="../recursos/css/estilos.ccs">
  <link rel="shortcut icon" type="image/x-icon" href="../recursos/imagenes/favicon.ico">    <!icono de DUINNA en la pestaña (tittle)>
       <link rel="stylesheet" type="text/css" href="">





<!--<p style="text-alig:center;">     <iframe width="200" height="200"
scrolling="no"
src="http://pagina-del-dia.euroresidentes.es/gadget-dia-de-hoy.php?fondo=rojo.png&amp;texto=FFFFFF" frameborder="0"></iframe></p>--><!para colocar la fecha exacta en la web(solo funciona con internet explorer)>
<?php
#session_start();

echo $_SESSION['username'];
?>

</head>
<body>
	<header>
    <center>
    	<head><img align="center" src="piedepagina.jpg" width="1330" height="80">   <img src="DUINNA.jpg" style="width: 50%;
    height: 189px;"></head>

      <body onload= "alert('Bienvenido al registro DUINNA. Porfavor Completar Todo el Formulario');"
      onUnLoad="confirm(Gracias por realizar el registro');">


      <!--<body onload= "alert('Bienvenido al registro de DUINNA');"
      onUnLoad="confirm(Gracias por realizar el registro');">-->


      <P style="background-color:lightgrey" align="center"><b>Data única de incorporación de niños, niñas y adolescentes</b></p>
      
      
    </center>
   
	
    
    <nav>
   <ul id="menu">
   <a href="Inicio_Promotor.html">

 <li><b>INICIO</b></li></a>


 

 <a href="gg.html">
 <li><font style="margin-left: 295px"> <b>SALIR</b></li></a></font>
</ul>

</nav> </header>





     <table bgcolor="#999" style="margin-left: 250px" width="60%">
<a>
        <tr>
            <td> <font style="margin-left: 10px" size="4"><b>Datos del Niño, Niña y Adolescente</b></font> </td>
        </tr>

     </table> <!franja gris>
     <br>

  <form action="segundaparteidena.html" method="post">    <!INCLUIR>




      <font style="margin-left: 250px" size="4"><b>Nacionalidad<b></font>
      <select style="margin-left: 100px" name="nacionalidad" required="complete este campo">

 <option value="" required="complete este campo">Seleccione</option>

<option value="1" required="complete este campo">V</option>

<option value="2" required="complete este campo">E</option>


</select>
<br>
<br>

 <font style="margin-left: 250px" size="4"><b>Cédula o Pasaporte<input style="margin-left: 145px" required pattern="[0-9]{8,}" required="complete este campo">
 <input id="saime" style="margin-left: 100px"  type="submit" name="validarsaime" value="VALIDAR SAIME">
<br><br>
<font style="margin-left: 250px" size="4">Primer Nombre</font>
<input style="margin-left: 75px" size="40" type="tex" name="primernombre" required pattern="[a-z,A-Z]{3,}" required="complete este campo" >
<br><br>
<font style="margin-left: 250px" size="4">Segundo Nombre</font>
<input style="margin-left: 65px" size="40" type="tex" name="segundonombre" required pattern="[a-z,A-Z]{3,}" required="complete este campo" >
<br><br>
<font style="margin-left: 250px" size="4">Primer Apellido</font>
<input style="margin-left: 75px" size="40" type="tex" name="primerapellido" required pattern="[a-z,A-Z]{3,}" required="complete este campo">
<br><br>
<font style="margin-left: 250px" size="4">Segundo Apellido</font>
<input style="margin-left: 63px" size="40" type="tex" name="segundoapellido" required pattern="[a-z,A-Z]{3,}" required="complete este campo" >
<br><br>
<font style="margin-left: 250px" size="4">Fecha de Nacimiento</font>
<input style="margin-left: 37px" size="40" type="date" name="fechadenacimiento" required="complete este campo" step="1" min="1989-01-01" max="2018-12-31">
<br><br>

 <b><font style="margin-left: 250px" size="4">Edad</b> <input style="margin-left: -103px" required pattern="[0-9]{1,}"> </br></br><!edad>

<font style="margin-left: 250px" size="4">Sexo</font>
<input style="margin-left: 150px" size="" type="radio" name="sexo" required="complete este campo">MASCULINO
<input style="margin-left: 28px" size="" type="radio" name="sexo" required="complete este campo">FEMENINO
<br><br>
<font style="margin-left: 250px" size="4">Estado Civil</font>
<input style="margin-left: 100px" size="" type="radio" name="estado_civil" required="complete este campo">SOLTERO
<input style="margin-left: 50px" size="" type="radio" name="estado_civil" required="complete este campo">CASADO
<br><br>
    <font style="margin-left: 250px" size="4"><b>¿Esta escolarizado?<b></font>
    <select style="margin-left: 100px" name="escolarizado" required="complete este campo">

 <option value="" required="complete este campo">Seleccione</option>
<option value="1" required="complete este campo">Si</option>
<option value="2" required="complete este campo">No</option>
</select>

</br></br>
<font style="margin-left: 250px" size="4">Teléfono Local</font>
<input style="margin-left: 70px" size="40"  name="telefonolocal" required pattern="[0-9]{10,}" required="complete este campo" >
<br><br>
<font style="margin-left: 250px" size="4">Teléfono Celular</font>
<input style="margin-left: 57px" size="40" name="telefonocelular" required pattern="[0-9]{10,}" required="complete este campo" >
<br><br>
<form>
  <label style="margin-left: 250px" size="4" for="mail">Correo Electrónico</label>
  <input required="complete este campo" type="email" id="mail" name="mail">
<script>
var email = document.getElementById("mail");

email.addEventListener("keyup", function (event) {
  if (email.validity.typeMismatch) {
    email.setCustomValidity("¡Este correo no es valido!");
  } else {
    email.setCustomValidity("");
  }
});</script>



<br><br>
    <font style="margin-left: 250px" size="4"><b>Asignar Programa Preventivo<b></font>
    <select style="margin-left: 100px" name="programa" required="complete este campo">

 <option value="" required="complete este campo">Seleccione</option>
<option value="1" required="complete este campo">Centro Comunitario de Protección Integral</option>
<option value="2" required="complete este campo">Semillero de la Patria Simón Bolívar</option>
<option value="3" required="complete este campo">Programa Nacional de Lectura Sombrero de la Ñ</option>
<option value="4" required="complete este campo">PROVINNA</option>
<option value="5" required="complete este campo">Brigada de Formación en Comunicación Popular de NNA</option>
</select>


<br><br>
<font style="margin-left: 250px" size="4">Fecha de incorporación al Programa</font>
<input style="margin-left: 37px" size="40" type="date" name="fechaincorporacion" required="complete este campo" step="1" min="1989-01-01" max="2018-12-31">


<br><br>
<font style="margin-left: 250px" size="4">Nombre del CCPI, Grupo o Codigo de Brigada</font>
<input style="margin-left: 75px" size="40" type="tex" name="ccpi" required="complete este campo" >


<br><br>
    <font style="margin-left: 250px" size="4"><b>Lugar de Funcionamiento de la Brigada<b></font>
    <select style="margin-left: 100px" name="brigada" required="complete este campo">

 <option value="" required="complete este campo">Seleccione</option>
<option value="1" required="complete este campo">Institución Educativa</option>
<option value="2" required="complete este campo">Comunidad</option>
<option value="3" required="complete este campo">Nuevo Urbanismo</option>
<option value="4" required="complete este campo">Espacios de Recreación</option>
<option value="5" required="complete este campo">UPI</option>
<option value="6" required="complete este campo">UPIE</option>
<option value="7" required="complete este campo">Otro</option>
</select>


<br><br>






      <table bgcolor="#999" style="margin-left: 250px" width="60%">

        <tr>
            <td> <font style="margin-left: 15px" size="4"><b>Datos del representante</b></font> </td>
        </tr>


     </table> <!franja gris>


</br>
    <font style="margin-left: 250px" size="4">Nacionalidad</font>
      <select style="margin-left: 70px" name="nacionalidad1" required="complete este campo">

 <option  value="" required="complete este campo">Seleccione</option>

<option value="1" required="complete este campo">V</option>

<option value="2" required="complete este campo">E</option>
      </select> <!nacionalidad del representante> 


      </br></br><font style="margin-left: 250px" size="4"><b>Cédula<input style="margin-left: 122px"  required pattern="[0-9]{6,}"> <!Cedula del representante>
      <input id="saime" style="margin-left: 100px"  type="submit" name="validarsaime" value="VALIDAR SAIME">
</br></br>
<font style="margin-left: 250px" size="4">Trabajo</font>
<input style="margin-left: 112px" size="40" type="tex" name="trabajo" required="complete este campo" >
<br><br>
 <font style="margin-left: 250px" size="4">Primer Nombre</font>
<input style="margin-left: 50px" size="40" type="tex" name="primernombrepadre" required pattern="[a-z,A-Z]{3,}" required="complete este campo" >
<br><br>
<font style="margin-left: 250px" size="4">Segundo Nombre</font>
<input style="margin-left: 40px" size="40" type="tex" name="segundonombrepadre" required pattern="[a-z,A-Z]{3,}" required="complete este campo" >
<br><br>
<font style="margin-left: 250px" size="4">Primer Apellido</font>
<input style="margin-left: 50px" size="40" type="tex" name="primerapellidopadre" required pattern="[a-z,A-Z]{3,}" required="complete este campo">
<br><br>
<font style="margin-left: 250px" size="4">Segundo Apellido</font>
<input style="margin-left: 40px" size="40" type="tex" name="segundoapellidopadre" required pattern="[a-z,A-Z]{3,}" required="complete este campo" >
<br><br>

          <font style="margin-left: 250px" size="4">Parentesco</font>
      <select style="margin-left: 80px" name="nacionalidad" required="complete este campo">

           <option value="" required="complete este campo">Seleccione</option>
<option value="1" required="complete este campo">Papá</option>
<option value="2" required="complete este campo">Mamá</option>
<option value="3" required="complete este campo">Tio</option>
<option value="4" required="complete este campo">Tia</option>
<option value="5" required="complete este campo">Hermano</option>
<option value="6" required="complete este campo">Hermana</option>
<option value="7" required="complete este campo">Abuelo</option>
<option value="8" required="complete este campo">Abuela</option>
      </select> <! <!parentesco del representante con el NNA>

      <br/><br/><font style="margin-left: 250px" size="4"><b>Teléfono</b>: <input style="margin-left: 100px"  required pattern="[0-9]{10,}"></br></br> <!telefono del representante>


     <font style="margin-left: 250px" size="4">Estado</font>
      <select style="margin-left: 117px" name="estado" id= "estado" required="complete este campo" required="complete este campo">

      <option value="" required="complete este campo">Seleccione</option>
      <option value="1" required="complete este campo">Amazonas</option>
      <option value="2" required="complete este campo">Anzoátegui</option>
      <option value="3" required="complete este campo">Apure</option>
      <option value="4" required="complete este campo">Aragua</option>
      <option value="5" required="complete este campo">Barinas</option>
      <option value="6" required="complete este campo">Bolívar</option>
      <option value="7" required="complete este campo">Carabobo</option>
      <option value="8" required="complete este campo">Cojedes</option>
      <option value="9" required="complete este campo">Delta Amacuro</option>
      <option value="10" required="complete este campo">Distrito Capital</option>
      <option value="11" required="complete este campo">Falcón</option>
      <option value="12" required="complete este campo">Guárico</option>
      <option value="13" required="complete este campo">Lara</option>
      <option value="14" required="complete este campo">Mérida</option>
      <option value="15" required="complete este campo">Miranda</option>
      <option value="16" required="complete este campo">Monagas</option>
      <option value="17" required="complete este campo">Nueva Esparta</option>
      <option value="18" required="complete este campo">Portuguesa</option>
      <option value="19" required="complete este campo">Sucre</option>
      <option value="20" required="complete este campo">Táchira</option>
      <option value="21" required="complete este campo">Trujillo</option>
      <option value="22" required="complete este campo">Vargas</option>
      <option value="23" required="complete este campo">Yaracuy</option>
      <option value="24" required="complete este campo">Zulia</option>
      </select> 

</select>
<br><br>
 <font style="margin-left: 250px" size="4">Municipio</font>
      <select style="margin-left: 90px" name="municipio" required="complete este campo">

<option value="" required="complete este campo">Seleccione</option>
<option value="1" required="complete este campo">Libertador</option>
<option value="2" required="complete este campo">Alto Orinoco</option>
<option value="3" required="complete este campo">Atabapo (San Fernando de Atabapo)</option>
<option value="4" required="complete este campo">Atures (Puerto Ayacucho)</option>
<option value="5" required="complete este campo">Autana (Isla Ratón)</option>
<option value="6" required="complete este campo">Manapiare (San Juan de Manapiare)</option>
<option value="7" required="complete este campo">Maroa (Maroa)</option>
<option value="8" required="complete este campo">Río Negro (San Carlos de Río Negro)</option>
<option value="9" required="complete este campo">Anaco (Anaco)</option>
<option value="10" required="complete este campo">Aragua (Aragua de Barcelona)</option>
<option value="11" required="complete este campo">Bolívar (Barcelona)</option>
<option value="12" required="complete este campo">Bruzual (Clarines)Libertador</option>
<option value="13" required="complete este campo">Cajigal (Onoto)</option>
<option value="14" required="complete este campo">Carvajal (Valle de Guanape)</option>
<option value="15" required="complete este campo">Diego Bautista Urbaneja (Lechería)</option>
<option value="16" required="complete este campo">Freites (Cantaura)</option>
<option value="17" required="complete este campo">Guanipa (San José de Guanipa)</option>
<option value="18" required="complete este campo">Guanta (Guanta)</option>
<option value="19" required="complete este campo">Independencia (Soledad)</option>
<option value="20" required="complete este campo">Libertad (San Mateo)</option>
<option value="21" required="complete este campo">McGregor (El Chaparro)</option>
<option value="22" required="complete este campo">Miranda (Pariaguán)</option>
<option value="23" required="complete este campo">Monagas (San Diego de Cabrutica)</option>
<option value="24" required="complete este campo">Peñalver (Puerto Píritu)</option>
<option value="25" required="complete este campo">Píritu (Píritu)</option>
<option value="26" required="complete este campo">San Juan de Capistrano (Boca de Uchire)</option>
<option value="27" required="complete este campo">Santa Ana (Santa Ana)</option>
<option value="28" required="complete este campo">Simón Rodriguez (El Tigre).</option>
<option value="29" required="complete este campo">Sotillo (Puerto La Cruz)</option>
<option value="30" required="complete este campo">Achaguas (Achaguas)</option>
<option value="31" required="complete este campo">Biruaca (Biruaca)</option>
<option value="32" required="complete este campo">Muñoz (Bruzual)</option>
<option value="33" required="complete este campo">Páez (Guasdualito)</option>
<option value="34" required="complete este campo">Pedro Camejo (San Juan de Payara)</option>
<option value="35" required="complete este campo">Rómulo Gallegos (Elorza)</option>
<option value="36" required="complete este campo">San Fernando (San Fernando de Apure)</option>
<option value="37" required="complete este campo">Bolívar (San Mateo)</option>
<option value="38" required="complete este campo">Camatagua(Camatagua)</option>
<option value="39" required="complete este campo"> Francisco Linares Alcántara (Santa Rita)</option>
<option value="40" required="complete este campo">Girardot (Maracay)</option>
<option value="41" required="complete este campo">José Ángel Lamas (Santa Cruz)</option>
<option value="42" required="complete este campo">Faltan...</option>
<option value="43" required="complete este campo">Faltan...</option>
<option value="44" required="complete este campo">Faltan...</option>
<option value="45" required="complete este campo">Faltan...</option>
<option value="46" required="complete este campo">Faltan...</option>
<option value="47" required="complete este campo">Faltan...</option>
<option value="48" required="complete este campo">Faltan...</option>
<option value="49" required="complete este campo">Faltan...</option>
<option value="50" required="complete este campo">Faltan...</option>
<option value="51" required="complete este campo">Faltan...</option>
<option value="52" required="complete este campo">Faltan...</option>
<option value="53" required="complete este campo">Faltan...</option>


</select>

<br><br>
 <font style="margin-left: 250px" size="4">Parroquia</font>
      <select style="margin-left: 90px" name="parroquia" required="complete este campo">

<option value="" required="complete este campo">Seleccione</option>
<option value="1" required="complete este campo">Alto Orinoco La Esmeralda</option>
<option value="2" required="complete este campo">Huachamacare Acanaña</option>
<option value="3" required="complete este campo">Marawaka Toky Shamanaña</option>
<option value="4" required="complete este campo">Mavaka Mavaka</option>
<option value="5" required="complete este campo">Sierra Parima Parimabé</option>

</select>
<br><br>
<form>
  <label style="margin-left: 250px" size="4" for="mail">Correo Electrónico</label>
  <input required="complete este campo" type="email" id="mail" name="mail">
<script>
var email = document.getElementById("mail");

email.addEventListener("keyup", function (event) {
  if (email.validity.typeMismatch) {
    email.setCustomValidity("¡Este correo no es valido!");
  } else {
    email.setCustomValidity("");
  }
});</script>

<br><br>
    <font style="margin-left: 250px" size="4"><b>¿Trabaja actualmente?<b></font>
    <select style="margin-left: 100px" name="trabajo" required="complete este campo">

 <option value="" required="complete este campo">Seleccione</option>
<option value="1" required="complete este campo">Si</option>
<option value="2" required="complete este campo">No</option>
</select>
<br><br>
<font style="margin-left: 250px" size="4">Dirección</font>
<input id="direccion" style="margin-left: 125px" size="40" type="tex" name="direccion" required="complete este campo" >

<br><br>


 
     <br>



</br>
<br>
<br>
<input style="margin-left: 300px" size="40" type="submit" name="incluir" value="INCLUIR">
<input style="margin-left: 300px" size="40" type="reset" name="borrar" value="BORRAR" <!--onclick=" alert('BORRADO');"--/>

</form>



 </form>


<!--<script><div class="n"><div class="n">
<a href="#" title="Ir arriba"><img alt="Ir arriba" border="0"
src="file:///C:/Users/1234/Desktop/Nueva%20carpeta/IDENNA(formulario)/formularioidena.html"
style=position:fixed;botttom:0;right:0;/></a></div></script>*/-->

<footer id="footer2" style="background-color: #999"> <address style="margin-left: 30%;"> <font color="white"><center></b> Intranet Idena - Copyletf2015 Instituto Anonimo Consejo Nacional de Derechos de Niñas, Niños y Adolescentes &copy; <br>
  Todos los derechos reservados &copy; </b></font> <br> </address> </footer>


</table>
</body>
</html>
