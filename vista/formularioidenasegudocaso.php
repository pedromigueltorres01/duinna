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
    <link rel="stylesheet" type="text/css" href="../recursos/css/idena4.css">
  <link rel="stylesheet" href="../recursos/css/estilos.ccs">
  <link rel="stylesheet" href="../recursos/css/estilosdenombredeusuario.css">
  <script type="text/javascript" src="../recursos/js/jquery.js"></script>
  <script type="text/javascript" src="../recursos/js/formularioidena.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="../recursos/imagenes/favicon.ico">    <!icono de DUINNA en la pestaña (tittle)>
       <link rel="stylesheet" type="text/css" href="">
       <script lenguage="javascript">
    //function que me carga los municipios
      $(document).ready(function(){
        $("#cbx_estado").change(function () {
          $('#cbx_parroquia').find('option').remove().end().append('<option value="whatever">Selecione</option>').val('whatever');
          
          
          $("#cbx_estado option:selected").each(function () {
            id_estado = $(this).val();
            $.post("../controlador/getMunicipio.php", { id_estado: id_estado }, function(data){
              $("#cbx_municipio").html(data);
            });            
          });
        })
      });
      
      //hasta que es la function de los municipios

      
      //aqui inicia la de las parroquias
      $(document).ready(function(){
        $("#cbx_municipio").change(function () {
 
          //$('#cbx_parroquia').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');
          
          $("#cbx_municipio option:selected").each(function () {
            id_municipio = $(this).val();
            $.post("../controlador/getParroquia.php", { id_municipio: id_municipio }, function(data){
              $("#cbx_parroquia").html(data);
            });            
          });
        })
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


  



<head>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
function mostrar9(id) {
      if (id=="cedulado1"){
      $("#cedulado1").show();
      $("#pasaporte1").hide();
       $("#no_documento").hide();
    }

    if (id=="pasaporte1"){
      $("#cedulado1").hide();
      $("#pasaporte1").show();
       $("#no_documento").hide();
    }

        if (id=="no_documento"){
      $("#cedulado1").hide();
      $("#pasaporte1").hide();
       $("#no_documento").show();
    }
    
}
</script>
</head>

<?php
require("../modelo/mod_conexion.php");
$result = pg_query($con,"SELECT id_estado,estado from estados order by estado asc;");
    ?>









      <P style="background-color:lightgrey; width: 100%;" align="center"><b>Data única de incorporación de niños, niñas y adolescentes</b></p>





    </center>
    

<font FACE="arial">


<form action="../controlador/validar_Nna2.php" method="post">    <!INCLUIR>


     <table bgcolor="#999" style="margin-left: 250px" width="60%">
<a>
        <tr>
            <td> <font style="margin-left: 10px" size="4"><b>Datos del Niño, Niña y Adolescente</b></font> </td>
        </tr>

     </table> <!franja gris>
     
<br>

<table><body>



<form action="index.php" method="post">
<font style="margin-left: 13.7em;" size="4"> <b>Cédula o Pasaporte del NNA</b> </font>
    <select  style="margin-left: 7em;" id="status" name="cedula_o_pasaporte" onChange="mostrar9(this.value);">
        <option  value="" required="complete este campo">Seleccione</option>
        <option value="cedulado1">Cédula</option>
        <option value="pasaporte1">Pasaporte</option>
        <option value="no_documento">No poseé</option>
    
     </select>


</br>


<div id="cedulado1" class="element" style="display: none;">
   
<br>      
       
<font style="margin-left: 13.7em;" size="4"><b>Número de Cédula</font>

<input style="margin-left: 13.3em;" size="40" type="text" placeholder="Indique la cédula"  name="cedula1"  pattern="[0-9]{8,}" title="Solo números min. 8 digitos">

 </div>

 <div id="pasaporte1" class="element" style="display: none;">
 <br>   
<font style="margin-left: 13.7em;" size="4">Número de Pasaporte</b></font>
<input style="margin-left: 11em;" size="40" type="text" placeholder="Indique el pasaporte"  name="pasaporte1" >

</div>
</br>

  <font style="margin-left: 13.7em;" size="4"><b>Nacionalidad<b></font>
      <select style="margin-left: 17.4em;" name="nacionalidad" required="complete este campo">

 <option value="" required="complete este campo">Seleccione</option>

<option value="V" required="complete este campo">V</option>

<option value="E" required="complete este campo">E</option>


</select>

</br>


</br>
<font style="margin-left: 13.7em;" size="4"><b>Número del hijo</font>
      <select style="margin-left: 15em;" name="num_hijos" required="complete este campo">

 <option  value="" required="complete este campo">Seleccione</option>

<option value="1" required="complete este campo">1</option>
<option value="2" required="complete este campo">2</option>
<option value="3" required="complete este campo">3</option>
<option value="4" required="complete este campo">4</option>
<option value="5" required="complete este campo">5</option>
<option value="6" required="complete este campo">6</option>
<option value="7" required="complete este campo">7</option>
<option value="8" required="complete este campo">8</option>
<option value="9" required="complete este campo">9</option>
<option value="10" required="complete este campo">10</option>
<option value="11" required="complete este campo">11</option>
<option value="12" required="complete este campo">12</option>
<option value="13" required="complete este campo">13</option>
<option value="14" required="complete este campo">14</option>
<option value="15" required="complete este campo">15</option>
<option value="16" required="complete este campo">16</option>
<option value="17" required="complete este campo">17</option>
<option value="18" required="complete este campo">18</option>
<option value="19" required="complete este campo">19</option>
<option value="20" required="complete este campo">20</option>


      </select> <!numero del hijo>


</br><br>





<font style="margin-left: 13.7em;" size="4">Primer Nombre</font>
<input style="margin-left: 15.1em;" size="40" type="tex" placeholder="Primer Nombre" name="primernombre" required pattern="[a-z,A-Z]{3,}" title="Solo letras sin espacios min. 3 letras"required="complete este campo" >
<br><br>
<font style="margin-left: 13.7em;" size="4">Segundo Nombre</font>
<input style="margin-left: 13.5em;" size="40" type="tex" placeholder="Segundo Nombre" name="segundonombre" pattern="[a-z,A-Z]{3,}" title="Solo letras sin espacios min. 3 letras">
<br><br>
<font style="margin-left: 13.7em;" size="4">Primer Apellido</font>
<input style="margin-left: 14.8em;" size="40" type="tex" placeholder="Primer Apellido" name="primerapellido" required pattern="[a-z,A-Z]{3,}" title="Solo letras sin espacios min. 3 letras" required="complete este campo">
<br><br>
<font style="margin-left: 13.7em;" size="4">Segundo Apellido</font>
<input style="margin-left: 13.4em;" size="40" type="tex" placeholder="Segundo Apellido" name="segundoapellido" pattern="[a-z,A-Z]{3,}" title="Solo letras sin espacios min. 3 letras">





<script language="JavaScript">
function edad(Fecha){
fecha = new Date(Fecha)
hoy = new Date()                                                                  /*CALCULAR LA EDAD BITCHES!!!*/
ed = parseInt((hoy -fecha)/365/24/60/60/1000)
document.getElementById('años').value = ed 
}
</script>

<br><br>
<font style="margin-left: 13.7em;" size="4">Fecha de Nacimiento</font>
<input style="margin-left: 18em;" size="40" type="date" name="fechadenacimiento" required="complete este campo" onblur="edad(this.value)"  step="1" min="1989-01-01" max="2018-12-31">
<br><br>

 <b><font style="margin-left: 13.7em;" size="4"> Edad</b> <input placeholder="Edad" required="complete este campo" name="años" id="años" style="margin-left: 7.3em;"> </br></br><!edad>



<font style="margin-left: 13.7em;" size="4"><b>Sexo</font>
      <select style="margin-left: 28em" name="sexo" required="complete este campo">

 <option  value="" required="complete este campo">Seleccione</option>

<option value="M" required="complete este campo">Masculino</option>

<option value="F" required="complete este campo">Femenino</option>
      </select> <!sexo del nna> 



</br>

</br>
<font style="margin-left: 13.7em;" size="4"><b>Estado civil</font>
      <select style="margin-left: 23.8em;" name="civil" required="complete este campo">

 <option  value="" required="complete este campo">Seleccione</option>

<option value="soltero" required="complete este campo">Soltero/a</option>

<option value="casado" required="complete este campo">Casado/a</option>
      </select> <!estado civil del nna> 





<table><body>

<form action="index.php" method="post">
<font style="margin-left: 0em" size="4"> <b>Teléfono</b> </font>
    <select style="margin-left: 25.6em;" id="status" required="complete este campo" name="telefono" onChange="mostrar(this.value);">
        <option value="">Seleccione</option>
        <option value="telefono">Si</option>
        <option value="telefonono">No</option>
    
     </select>



<div id="telefono" class="element" style="display: none;">
    
      
      <form action="index.php" method="post">
      <br> 
<font style="margin-left: 13.7em;" size="4">Teléfono</font>
<input style="margin-left:20em;" size="40" placeholder="Número de Teléfono" name="telefonolocal" pattern="[0-9]{10,}" title="Solo números sin espacios min. 10 digitos">
</form></form>
 

</div>

</body></table>

<table><body>


 <font style="margin-left:0%;" size="4"> <b>Email</b> </font>
    <select style="margin-left: 27.5em;" id="email11" required="complete este campo" name="email" required="complete este campo" onChange="mostrar(this.value);">
        <option value=""required="complete este campo">Seleccione</option>
        <option value="email1">Si</option>
        <option value="emailno">No</option>
    
     </select>




<div id="email1" class="element" style="display: none;">
    
      
     
       </br>
  <label style="margin-left: 13.7em;" size="4" for="mail">Correo Electrónico</label>
  <input type="email"  style="margin-left:18.8em;" placeholder="Email"  id="mail" name="mail">
<script>
var email = document.getElementById("mail");

email.addEventListener("keyup", function (event) {
  if (email.validity.typeMismatch) {
    email.setCustomValidity("¡Este correo no es valido para el registro DUINNA!");
  } else {
    email.setCustomValidity("");
  }
});</script>

 

</div>



</body></table>


<script>

var mostrarValor1 = function(x){
document.getElementById('trabajo').value=x;
}
</script>

<font style="margin-left: 13.7em;" size="4">Trabaja</font>
          <input style="margin-left: 17em;" size="40" type="tex" placeholder="Indique el trabajo" id="trabajo" name="trabajo" required="complete este campo" >

<select  name="notrabajo" onchange="mostrarValor1(this.value); ">                <!VALUE!>
<option value="">Seleccione</option>
<option value="No Aplica">No Aplica</option>

</select>
      
</br></br>
<div> <label style="margin-left: 13.7em;" for="es_tado">Estado</label> <select style="margin-left: 17.6em;" name="cbx_estado" id="cbx_estado" required="complete este campo">
                          <option value="">Selecione</option><?php

    while ($rowE = pg_fetch_array($result)) {

      ?>
                   <option value=" <?php echo "   $rowE[0]";?> "> <?php echo "   $rowE[1]";?></option>
                         
                <?php
      
    }
    ?>
    </select>
    </div> 


<br>


<div>
  <font style=""><label style="margin-left: 13.7em;" for="mu_nicipio">Municipio</label></font>
            <select id="cbx_municipio" name="cbx_municipio" style="margin-left: 15.7em;" required="complete este campo"></select></div>

</br>

      <div>
  <font style=""><label style="margin-left: 13.7em;" for="pa_rroqia">Parroquia</label></font>
            <select id="cbx_parroquia" name="cbx_parroquia" style="margin-left: 15.7em;" required="complete este campo">            

            </select>
</div>



<br><br>
 <font style="margin-left: 13.7em;" size="4">Dirección del hogar</font>
          <input id="direccion" placeholder="    Dirección de su vivienda" style="margin-left: 9em;" size="40" type="tex" name="direccion" required="complete este campo">



</br></br>
    <font style="margin-left: 13.7em;" size="4"><b>Asignar Programa Preventivo<b></font>
    <select style="margin-left: 14em;" name="programapreventivo" required="complete este campo">

 <option value="" required="complete este campo">Seleccione</option>
<option value="Centro Comunitario de Protección Integral" required="complete este campo">Centro Comunitario de Protección Integral</option>
<option value="Semillero de la Patria Simón Bolívar" required="complete este campo">Semillero de la Patria Simón Bolívar</option>
<option value="Programa Nacional de Lectura Sombrero de la Ñ" required="complete este campo">Programa Nacional de Lectura Sombrero de la Ñ</option>
<option value="PROVINNA" required="complete este campo">Provinna</option>
<option value="Brigada de Formación en Comunicación Popular de NNA" required="complete este campo">Brigada de Formación en Comunicación Popular de NNA</option>
</select>


<br><br>
<font style="margin-left:13.7em;" size="4">Fecha de incorporación al Programa</font>
<input style="margin-left: 9.5em;" size="40" type="date" name="fechaincorporacion" required="complete este campo" step="1" min="1989-01-01" max="2018-12-31">


<br><br>
<font style="margin-left: 13.7em;" size="4">Nombre del CCPI, Grupo o Codigo de Brigada</font>
<input style="margin-left: 3.4em;" size="40" type="tex" name="ccpi" placeholder="Nombre del CCPI" required="complete este campo" >


<br><br>
    <font style="margin-left: 13.7em;" size="4"><b>Lugar de Funcionamiento de la Brigada<b></font>
    <select style="margin-left: 7.7em;" name="brigada" required="complete este campo">

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




<br><br>


 
     <br>



</br>
<br>
<br>
<input class='btn btn-lg btn-primary btn-block btn-signin' style="margin-left: 300px" size="40" type="reset" name="borrar" value="Borrar" <!--onclick=" alert('BORRADO');"--/>
<input class='btn btn-lg btn-primary btn-block btn-signin' style="margin-left: 300px" size="40" type="submit" name="incluir" value="Enviar">


</form>

</font>

 </form>


<!--<script><div class="n"><div class="n">
<a href="#" title="Ir arriba"><img alt="Ir arriba" border="0"
src="file:///C:/Users/1234/Desktop/Nueva%20carpeta/IDENNA(formulario)/formularioidena.html"
style=position:fixed;botttom:0;right:0;/></a></div></script>*/-->

<footer id="footer2" style="background-color: #999"> <address style="margin-left: 0%;"> <font color="white"><center></b> Intranet Idena - Copyletf2015 Instituto Anonimo Consejo Nacional de Derechos de Niñas, Niños y Adolescentes &copy; <br>
  Todos los derechos reservados &copy; </b></font> <br> </address> </footer>


</table>
</body>
</body>


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
select {
    border-radius: 30px;
    border-color: rgb(169, 169, 169);        /*borde de los select*/
}
}
</style>

<style>
input:focus {
background-color:#08ff64;
border: 2px solid #00aeea;     /*color del input cuando le dan click*/
}
</style>


<style>
select:focus {
background-color:#08ff64;            /*color del select cuando le dan click*/
}
border: 2px solid #00aeea;
}
</style>
</html>
