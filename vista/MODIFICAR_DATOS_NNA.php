<?php
 session_start();

 include('../controlador/validar_sessiones.php');
 verificar_session();
 
 
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Modificar NNa</title>
  <link rel="stylesheet" type="text/css" href="idena3.css">
  <link rel="stylesheet" type="text/css" href="menu.css">
  <link rel="stylesheet" type="text/css" href="../recursos/css/idena4.css" >
  <link rel="shortcut icon" type="image/x-icon" href="../recursos/imagenes/favicon.ico">    <!icono de DUINNA en la pestaña (tittle)>

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




      <table bgcolor="#999" style="margin-left: -22px" width="103%">
<a>
        <tr>
            <td> <font style="margin-left: 45%" size="4"><b>Ubicación del NNA</b></font> </td>
        </tr>

     </table> <!franja gris>
     <br>


<center><h1><b>Modificar datos de NNA</b></h1></center>












<form action="../controlador/con_modificar_datos_nna.php" method="POST">    <!MODIFICAR>


<label style="margin-left: 9px" for="es_tado_mod"><b>Cambiar Estado</b></label>
  <input style="margin-left: 180px" id="es_tado_mod" name="Estado_mod" placeholder="Indique el Estado" value="" pattern="[Aa]mazonas|[Aa]nzo[áa]tegui|[Aa]pure|[Aa]ragua|[Bb]arinas|[Bb]ol[íi]var|[Cc]arabobo|[Cc]ojedes|[Dd]elta [Aa]macuro|[Dd]istrito [Cc]apital|[Ff]alc[óo]n|[Gg]u[áa]rico|[Ll]ara|[Mm][ée]rida|[Mm]iranda|[Mm]onagas|[Nn]ueva [Ee]sparta|[Pp]ortuguesa|[Ss]ucre|[Tt][áa]chira|[Tt]rujillo|[Vv]argas|[Yy]aracuy|[Zz]ulia|[Zz]ulia">


</br></br>

<label style="margin-left: 9px" for="mu_nicipio_mod"><b>Cambiar Municipio</b></label>
  <input style="margin-left: 153px" type="text" id="mu_nicipio_mod" name="municipio_mod" placeholder="Indique el Municipio" pattern="[Aa]chaguas|[Bb]iruaca|[Mm]uñoz|[Pp]edro [Cc]amejo|[Ss]an [Ff]ernando|[Pp][áa]ez|[Rr][óo]mulo [Gg]allegos|[Aa]lto [Oo]rinoco|[Aa]tabapo|[Aa]tures|[Aa]utana|[Mm]anapiare|[Mm]aroa|[Rr][íi]o [Nn]egro|[Bb]ol[íi]var|[Cc]amatagua|[Ff]rancisco [Ll]inares [Aa]lc[áa]ntara|[Aa]tanasio [Gg]irardot|[Jj]os[ée] [AaÁá]ngel [Ll]amas|[Jj]os[ée] [AaÁá]ngel [Ll]amas|[Jj]os[ée] [Ff][ée]lix [Rr]ibas|[Jj]os[ée] [Rr]afael [Rr]evenga|[Ll]ibertador|[Mm]ario [Bb]riceño [Ii]ragorry|[Oo]cumare de la [Cc]osta de [Oo]ro|[Ss]an [Cc]asimiro|[Ss]an [Ss]ebasti[áa]n|[Ss]antiago [Mm]ariño|[Ss]antos [Mm]ichelena|[Ss]ucre|[Tt]ovar|[Uu]rdaneta|[Zz]amora|[Aa]lberto [Aa]rvelo [Tt]orrealba|[Aa]ndr[ée]s [Ee]loy [Bb]lanco|[Mm]unicipio [Aa]ntonio [Jj]os[ée] de [Ss]ucre|[Mm]unicipio [Aa]rismendi|[Bb]arinas|[Bb]ol[íi]var|[Cc]ruz [Pp]aredes|[Ee]zequiel [Zz]amora|[Mm]unicipio [Oo]bispos|[Mm]unicipio [Pp]edraza|[Mm]unicipio [Rr]ojas|[Mm]unicipio [Ss]osa|[Cc]aron[íi]|[Mm]unicipio [Cc]edeño|[Mm]unicipio el [Cc]allao|[Gg]ran [Ss]abana|[Hh]eres|[Pp]adre [Pp]edro [Cc]hien|[Pp]iar|[Aa]ngostura [Rr]a[úu]l [Ll]eoni|[Rr]oscio|[Ss]ifontes|[Mm]unicipio [Rr]ojas|[Ss]ucre|[Bb]ejuma|[Cc]arlos [Aa]rvelo|[Dd]iego [Ii]barra|[Gg]uacara|[Jj]uan [Jj]os[ée] [Mm]ora|[Ll]ibertador|[Ll]os [Gg]uayos|[Mm]iranda|[Mm]ontalb[áa]n|[Nn]aguanagua|[Pp]uerto [Cc]abello|[Ss]an [Dd]iego|[Ss]an [Jj]oaqu[íi]n|[Vv]alencia|[Aa]nzo[áa]tegui|[Pp]ao de [Ss]an [Jj]uan [Bb]autista|[Tt]inaquillo [Ff]alc[óo]n|[Gg]irardot|[Ll]ima [Bb]lanco|[Rr]icaurte|[Rr][óo]mulo [Gg]allegos|[Mm]unicipio [Ss]an [Cc]arlos|[Tt]inaco|[Aa]ntonio [Dd][íi]az|[Cc]asacoima|[Pp]edernales|[Tt]ucupita|[Ll]ibertador de [Cc]aracas|[Aa]costa|[Bb]ol[íi]var|[Bb]uchivacoa|[Cc]acique [Mm]anaure|[Cc]arirubana|[Cc]olina|[Dd]abajuro|[Dd]emocracia|[Ff]alc[óo]n|[Ff]ederaci[óo]n|[Jj]acura|[Ll]os [Tt]aques|[Mm]auroa|[Mm]iranda|[Mm]iranda|[Mm]onseñor [Ii]turriza|[Pp]almasola|[Pp]etit|[Pp][íi]ritu|[Ss]an [Ff]rancisco|[Jj]os[ée] [Ll]aurencio [Ss]ilva|[Ss]ucre|[Tt]oc[óo]pero|[Uu]ni[óo]n|[Uu]rumaco|[Zz]amora|[Cc]amagu[áa]n|[Cc]haguaramas|[Ee]l [Ss]ocorro|[Ss]ebasti[áa]n [Ff]rancisco de [Mm]iranda|[Jj]os[ée] [Ff][ée]lix [Rr]ibas|[Jj]os[ée] [Tt]adeo [Mm]onagas|[Jj]uan [Gg]erm[áa]n [Rr]oscio|[Jj]uli[áa]n [Mm]ellado|[Ll]as [Mm]ercedes|[Ll]eonardo [Ii]nfante|[Oo]rtiz|[Pp]edro [Zz]araza|[Ss]an [Gg]er[óo]nimo de [Gg]uayaba|[Ss]an [Jj]os[ée] de [Gg]uaribe|[Ss]anta [Mm]ar[íi]a de [Ii]pire|[Aa]ndr[ée]s [Ee]loy [Bb]lanco|[Cc]respo|[Mm]or[áa]n|[Pp]alavecino|[Ss]im[óo]n [Pp]lanas|[Tt]orres|[Uu]rdaneta|[Ii]ribarren|[Aa]lberto [Aa]driani|[Aa]ntonio [Pp]into [Ss]alinas|[Aa]ndr[ée]s [Bb]ello|[Aa]ricagua|[Aa]rzobispo [Cc]hac[óo]n|[Cc]ampo [Ee]l[íi]as|[Cc]aracciolo [Pp]arra [Oo]lmedo|[Cc]ardenal [Qq]uintero|[Gg]uaraque|[Jj]ulio [Cc][ée]sar [Ss]alas|[Jj]usto [Bb]riceño|[Ll]ibertador|[Mm]iranda|[Oo]bispo [Rr]amos de [Ll]ora|[Pp]adre [Nn]oguera|[Pp]ueblo [Ll]lano|[Rr]angel|[Rr]ivas [Dd][áa]vila|[Ss]antos [Mm]arquina|[Ss]ucre|[Tt]ovar|[Tt]ulio [Ff]ebres [Cc]ordero|[Zz]ea|[Aa]cevedo|[Aa]ndr[ée]s [Bb]ello|[Bb]aruta|[Mm]unicipio [Bb]ri[óo]n|[Bb]uroz|[Cc]arrizal|[Cc]hacao|[Cc]rist[óo]bal [Rr]ojas|[Ee]l [Hh]atillo|[Gg]uaicaipuro|[Ii]ndependencia|[Ll]ander|[Ll]os [Ss]alias|[Pp][áa]ez|[Pp]az [Cc]astillo|[Pp]edro [Gg]ual|[Pp]laza|[Ss]im[óo]n [Bb]ol[íi]var|[Uu]rdaneta|[Ss]ucre|[Zz]amora|[Aa]costa|[Aa]guasay|[Bb]ol[íi]var|[Cc]aripe|[Cc]edeño|[Ee]zequiel [Zz]amora|[Ll]ibertador|[Mm]atur[íi]n|[Pp]iar|[Pp]unceres|[Ss]anta [Bb][áa]rbara|[Ss]otillo|[Uu]racoa|[Aa]ntol[íi]n del [Cc]ampo|[Aa]rismendi|[Dd][íi]az|[Gg]arc[íi]a|[Gg][óo]mez|[Mm]aneiro|[Mm]arcano|[Mm]ariño|[Mm]acanao|[Tt]ubores|[Vv]illalba|[Aa]gua [Bb]lanca|[Aa]raure|[Ee]steller|[Gg]uanare|[Gg]uanarito|[Mm]onseñor [Jj]os[ée] [Vv]icente de [Uu]nda|[Oo]spino|[Pp][áa]ez|[Pp]apel[óo]n|[Ss]an [Gg]enaro de [Bb]ocono[íi]to|[Ss]an [Rr]afael de [Oo]noto|[Ss]anta [Rr]osal[íi]a|[Ss]ucre|[Tt]ur[ée]n|[Aa]ndr[ée]s [Ee]loy [Bb]lanco|[Aa]ndr[ée]s [Mm]ata|[Aa]rismendi|[Bb]en[íi]tez|[Bb]erm[úu]dez|[Bb]ol[íi]var|[Cc]ajigal|[Cc]ruz [Ss]almer[óo]n [Aa]costa|[Ll]ibertador|[Mm]ariño|[Mm]ej[íi]a|[Mm]ontes|[Rr]ibero|[Ss]ucre|[Vv]aldez|[Aa]ndr[ée]s [Bb]ello|[Aa]ntonio [Rr][óo]mulo [Cc]osta|[Aa]yacucho|[Bb]ol[íi]var|[Cc][áa]rdenas|[Cc][óo]rdoba|[Ff]ern[áa]ndez [Ff]eo|[Ff]rancisco de [Mm]iranda|[Gg]arc[íi]a de [Hh]evia|[Gg]u[áa]simos|[Ii]ndependencia|[Jj][áa]uregui|[Jj]os[ée] [Mm]ar[íi]a [Vv]argas|[Jj]un[íi]n|[Ll]ibertad|[Ll]ibertador|[Ll]obatera|[Mm]ichelena|[Pp]anamericano|[Pp]edro [Mm]ar[íi]a [Uu]reña|[Rr]afael [Uu]rdaneta|[Ss]amuel [Dd]ar[íi]o [Mm]aldonado|[Ss]an [Cc]rist[óo]bal|[Ss]eboruco|[Ss]im[óo]n [Rr]odr[íi]guez|[Ss]ucre|[Tt]orbes|[Uu]ribante|[Ss]an [Jj]udas [Tt]adeo|[Aa]ndr[ée]s [Bb]ello|[Bb]ocon[óo]|[Bb]ol[íi]var|[Cc]andelaria|[Cc]arache|[Ee]scuque|[Jj]os[ée] [Ff]elipe [Mm][áa]rquez [Cc]añizalez|[Jj]uan [Vv]icente [Cc]ampos [Ee]l[íi]as|[Ll]a [Cc]eiba|[Mm]iranda|[Mm]onte [Cc]armelo|[Mm]otat[áa]n|[Pp]amp[áa]n|[Pp]ampanito|[Rr]afael [Rr]angel|[Ss]an [Rr]afael de [Cc]arvajal|[Ss]ucre|[Tt]rujillo|[Uu]rdaneta|[Vv]alera|[Vv]argas|[Aa]r[íi]stides [Bb]astidas|[Bb]ol[íi]var|[Bb]ruzual|[Cc]ocorote|[Ii]ndependencia|[Jj]os[ée] [Aa]ntonio [Pp][áa]ez|[Ll]a [Tt]rinidad|[Mm]anuel [Mm]onge|[Nn]irgua|[Pp]eña|[Ss]an [Ff]elipe|[Ss]ucre|[Uu]rachiche|[Jj]os[ée] [Jj]oaqu[íi]n [Vv]eroes|[Aa]lmirante [Pp]adilla|[Bb]aralt|[Cc]abimas|[Cc]atatumbo|[Cc]ol[óo]n|[Ff]rancisco [Jj]avier [Pp]ulgar|[Jj]es[úu]s [Ee]nrique [Ll]ossada|[Jj]es[úu]s [Mm]ar[íi]a [Ss]empr[úu]n|[Ll]a [Cc]añada de [Uu]rdaneta|[Ll]agunillas|[Mm]achiques de [Pp]erij[áa]|[Mm]ara|[Mm]aracaibo|[Mm]iranda|[Pp][áa]ez|[Rr]osario de [Pp]erij[áa]|[Ss]an [Ff]rancisco|[Ss]anta [Rr]ita|[Vv]almore [Rr]odr[íi]guez|[Ss]im[óo]n [Bb]ol[íi]var|[Ss]ucre|[Aa]naco|[Aa]ragua|[Dd]iego [Bb]autista [Uu]rbaneja|[Ff]ernando [Pp]eñalver|[Ff]rancisco del [Cc]armen [Cc]arvajal|[Ff]rancisco de [Mm]iranda|[Gg]uanta|[Ii]ndependencia|[Jj]os[ée] [Gg]regorio [Mm]onagas|[Jj]uan [Aa]ntonio [Ss]otillo|[Jj]uan [Mm]anuel [Cc]ajigal|[Ll]ibertad|[Mm]anuel [Ee]zequiel [Bb]ruzual|[Pp]edro [Mm]ar[íi]a [Ff]reites|[Pp][íi]ritu|[Ss]an [Jj]os[ée] de [Gg]uanipa|[Ss]an [Jj]uan de [Cc]apistrano|[Ss]anta [Aa]na|[Ss]im[óo]n [Bb]ol[íi]var|[Ss]im[óo]n [Rr]odriguez|[Gg]eneral [Ss]ir [Aa]rthur [Mm]c[Gg]regor">
</br></br>
<label style="margin-left: 9px" for="pa_rroqia"><b>Cambiar Parroquia</b></label>
  <input style="margin-left: 153px" id="pa_rroquia" name="parroqia" placeholder="Indique el Parroquia" pattern="[Aa]lto [Oo]rinoco [Ll]a [Ee]smeralda|[Hh]uachamacare [Aa]canaña|[Mm]arawaka [Tt]oky [Ss]hamanaña|[Mm]avaka [Mm]avaka|[Ss]ierra [Pp]arima [Pp]arimab[ée]|[Aa]tabapo [Ss]an [Ff]ernando de [Aa]tabapo|[Uu]cata [Ll]aja [Ll]isa|[Yy]apacana [Mm]acuruco|[Cc]aname [Gg]uarinuma|[Ff]ernando [Gg]ir[óo]n [Tt]ovar [Pp]uerto [Aa]yacucho|[Ll]uis [Aa]lberto [Gg][óo]mez [Pp]uerto [Aa]yacucho|[Pp]ahueña [Ll]im[óo]n de [Pp]arhueña|[Pp]latanillal [Pp]latanillal|[Ss]amariapo [Ss]amariapo|[Ss]ipapo [Pp]endare|[Mm]unduapo [Mm]unduapo|[Gg]uayapo [Ss]an [Pp]edro del [Oo]rinoco|[Ii]sla [Rr]at[óo]n [Ii]sla [Rr]at[óo]n|[Aa]lto [Vv]entuari [Cc]acur[íi]|[Mm]edio [Vv]entuari [Mm]anami|[Bb]ajo [Vv]entuari [Mm]arueta|[Mm]anapiare [Ss]an [Jj]uan de [Mm]anapiare|[Mm]aroa|[Vv]ictorino|[Cc]omunidad|[Cc]asiquiare [Cc]urimacare|[Cc]ocuy|[Ss]an [Cc]arlos de [Rr][íi]o [Nn]Negro|[Ss]olano [Ss]olano|[Aa]naco|[Ss]an [Jj]oaquín|[Cc]achipo|[Aa]ragua de [Bb]arcelona|[Ll]echer[íi]a|[Ee]l [Mm]orro|[Pp]uerto [Pp][íi]ritu|[Ss]an [Mm]iguel|[Ss]ucre|[Vv]alle de [Gg]uanape|[Ss]anta [Bb][áa]rbara|[Aa]tapirire|[Bb]oca del [Pp]ao|[Ee]l [Pp]ao|[Pp]ariaguán|[Gg]uanta|[Cc]horrerón|[Mm]amo|[Ss]oledad|[Mm]apire|[Pp]iar|[Ss]anta [Cc]lara|[Ss]an [Dd]iego de [Cc]abrutica|[Uu]verito|[Zz]uata|[Pp]uerto [Ll]a [Cc]ruz|[Pp]ozuelos|[Oo]noto|[Ss]an [Pp]ablo|[Ss]an [Mm]ateo|[Ee]l [Cc]arito|[Ss]anta [Ii]n[ée]s|[Ll]a [Rr]omereña|[Cc]larines|[Gg]uanape|[Ss]abana de [Uu]chire|[Cc]antaura|[Ll]ibertador|[Ss]anta [Rr]osa||[Uu]rica|[Pp][íi]ritu|[Ss]an [Ff]rancisco|[Ss]an [Jj]Jos[ée] de [Gg]uanipa|[Bb]oca de [Uu]chire|[Bb]oca de [Cc]h[áa]vez|[Pp]ueblo [Nn]uevo|[Ss]anta [Aa]na|[Bb]ergant[íi]n|[Cc]aigua|[Ee]l [Cc]armen|[Ee]l [Pp]ilar|[Nn]aricual|[Ss]an [Cc]Crist[óo]bal|[Ee]dmundo [Bb]arrios|[Mm]iguel [Oo]tero [Ss]ilva|[Ee]l [Cc]haparro|[Tt]om[áa]s [Aa]lfaro|[Cc]alatrava|[Aa]chaguas|[Aa]purito|[Ee]l [Yy]agual|[Gg]uachara|[Mm]ucuritas|[Qq]ueseras del [Mm]edio|[Bb]iruaca|[Bb]ruzual|[Mm]antecal|[Qq]uintero|[Rr]inc[óo]n [Hh]Hondo|[Ss]an [Vv]icente|[Ss]an [Jj]uan de [Pp]ayara|[Cc]odazzi|[Cc]unaviche|[Ss]an [Ff]ernando|[Ee]l [Rr]ecreo|[Pp]eñalver|[Ss]an [Rr]afael de [Aa]tamaica|[Gg]uasdualito|[Aa]ramendi|[Ee]l [Aa]mparo|[Ss]an [Cc]amilo|[Uu]rdaneta|[Ee]lorza|[Ll]a [Tt]rinidad|[Bb]ol[íi]var|[Cc]amatagua|[Cc]armen de [Cc]ura|[Ss]anta [Rr]ita|[Ff]rancisco de [Mm]iranda|[Mm]oseñor [Ff]eliciano [Gg]onz[áa]lez|[Pp]edro [Jj]Jos[ée] [Oo]valles|[Jj]oaqu[íi]n [Cc]respo|[Jj]os[ée] [Cc]asanova [Gg]odoy|[Mm]adre [Mm]ar[íi]a de [Ss]an [Jj]os[ée]|[Aa]ndr[ée]s [Ee]loy [Bb]lanco|[Ll]os [Tt]acarigua|[Ll]as [Dd]elicias|[Cc]horon[íi]|[Ss]anta [Cc]ruz|[Jj]os[ée] [Ff][ée]lix [Rr]ibas|[Cc]astor [Nn]ieves [Rr][íi]os|[Ll]as [Gg]uacamayas|[Pp]ao de [Zz][áa]rate|[Zz]uata|[Jj]os[ée] [Rr]afael [Rr]evenga|[Pp]alo [Nn]egro|[Ss]an [Mm]art[íi]n de [Pp]orres|[Ee]l [Ll]im[óo]n|[Cc]aña de [Aa]z[úu]car|[Oo]cumare de la [Cc]osta|[Ss]an [Cc]asimiro|[Gg][üu]iripa|[Oo]llas de [Cc]aramacate|[Vv]alle [Mm]or[íi]n|[Ss]an [Ss]ebastian|[Tt]urmero|[Aa]revalo [Aa]ponte|[Cc]huao|[Ss]am[áa]n de [Gg][üu]ere|[Aa]lfredo [Pp]acheco [Mm]iranda|[Ss]antos [Mm]ichelena|[Tt]iara|[Cc]agua|[Bb]ella [Vv]ista|[Tt]ovar|[Uu]rdaneta|[Ll]as [Pp]eñitas|[Ss]an [Ff]rancisco de [Cc]ara|[Tt]aguay|[Vv]illa de [Cc]ura|[Mm]agdaleno|[Ss]an [Ff]rancisco de [Aa]s[íi]s|[Vv]alles de [Tt]ucutunemo|[Aa]ugusto [Mm]ijares|[Ss]abaneta|[Jj]uan [Aa]ntonio [Rr]odr[íi]guez [Dd]om[íi]nguez|[Ee]l [Cc]ant[óo]n|[Ss]anta [Cc]ruz de [Gg]uacas|[Pp]uerto [Vv]ivas|[Pp]rimero de [Dd]iciembre|[Tt]icoporo|[Nn]icol[áa]s [Pp]ulido|[Aa]ndr[ée]s [Bb]ello|[Aa]rismendi|[Gg]uadarrama|[Ll]a [Uu]ni[óo]n|[Ss]an [Aa]Antonio|[Bb]arinas|[Aa]lberto [Aa]rvelo [Ll]arriva|[Ss]an [Ss]ilvestre|[Ss]anta [Ii]n[ée]s|[Ss]anta [Ll]uc[íi]a|[Tt]orunos|[Ee]l [Cc]armen|[Rr][óo]mulo [Bb]etancourt|[Cc]oraz[óo]n de [Jj]es[úu]s|[Rr]am[óo]n [Ii]gnacio [Mm][ée]ndez|[Aa]lto [Bb]arinas|[Mm]anuel [Pp]alacio [Ff]ajardo|[Jj]uan [Aa]ntonio [Rr]odr[íi]guez [Dd]om[íi]nguez|[Dd]ominga [Oo]rtiz de [Pp][áa]ez|[Bb]arinitas|[Aa]ltamira de [Cc][áa]ceres|[Cc]alderas|[Bb]arrancas|[Ee]l [Ss]ocorro|[Mm]azparrito|[Ss]anta [Bb][áa]rbara|[Pp]edro [Bb]riceño [Mm][ée]ndez|[Rr]am[óo]n [Ii]gnacio [Mm][ée]ndez|[Jj]os[ée] [Ii]gnacio del [Pp]umar|[Oo]bispos|[Ll]os [Gg]uasimitos|[Ee]l [Rr]eal|[Ll]a [Ll]uz|[Cc]iudad [Bb]ol[íi]via|[Jj]os[ée] [Ii]gnacio [Bb]riceño|[Jj]os[ée] [Ff][ée]lix [Rr]ibas|[Pp][áa]ez|[Ll]ibertad|[Dd]olores|[Ss]anta [Rr]osa|[Pp]alacio [Ff]ajardo|[Ss]im[óo]n [Rr]odr[íi]guez|[Cc]iudad de [Nn]utrias|[Ee]l [Rr]egalo|[Pp]uerto [Nn]utrias|[Ss]anta [Cc]atalina|[Ss]im[óo]n [Bb]ol[íi]var|[Cc]achamay|[Cc]hirica|[Dd]alla [Cc]osta|[Oo]nce de [Aa]bril|[Ss]im[óo]n [Bb]ol[íi]var|[Uu]nare|[Uu]niversidad|[Vv]ista al [Ss]ol|[Pp]ozo [Vv]erde|[Yy]ocoima|5 de [Jj]ulio|[Cc]edeño|[Aa]ltagracia|[Aa]scensi[óo]n [Ff]arreras|[Gg]uaniamo|[Ll]a [Uu]rbana|[Pp]ijiguaos|[Ee]l [Cc]allao|[Gg]ran [Ss]abana|[Ii]kaba[Rr][úu]|[Cc]atedral|[Zz]ea|[Oo]rinoco|[Jj]os[ée] [Aa]ntonio [Pp][áa]ez|[Mm]arhuanta|[Aa]gua [Ss]alada|[Vv]ista [Hh]ermosa|[Ll]a [Ss]abanita|[Pp]anapana|[Pp]adre [Pp]edro [Cc]hien|[Aa]ndr[ée]s [Ee]loy [Bb]lanco|[Pp]edro [Cc]ova|[Uu]pata|[Rr]a[úu]l [Ll]eoni|[Bb]arceloneta|[Ss]anta [Bb][áa]rbara|[Ss]an [Ff]rancisco|[Rr]oscio|[Ss]al[óo]m|[Tt]umeremo|[Dd]alla [Cc]osta|[Ss]an [Ii]sidro|[Ss]ucre|[Aa]ripao|[Gg]uarataro|[Ll]as [Mm]ajadas|[Mm]oitaco|[Bb]ejuma|[Cc]anoabo|[Ss]im[óo]n [Bb]ol[íi]var|[Gg][üu]ig[üu]e|[Bb]el[ée]n|[Tt]acarigua|[Mm]ariara|[Aa]guas [Cc]alientes|[Cc]iudad [Aa]lianza|[Gg]uacara|[Yy]agua|[Mm]or[óo]n|[Uu]rama|[Tt]ocuyito [Vv]alencia|[Ii]ndependencia [Cc]ampo [Cc]arabobo|[Ll]os [Gg]uayos [Vv]alencia|[Mm]iranda|[Mm]ontalb[áa]n|[Nn]aguanagua [Vv]alencia|[Bb]artolom[ée] [Ss]al[óo]m|[Dd]emocracia|[Ff]raternidad|[Gg]oaigoaza|[Jj]uan [Jj]os[ée] [Ff]lores|[Uu]ni[óo]n|[Bb]orburata|[Pp]atanemo|[Ss]an [Dd]iego [Vv]alencia|[Ss]an [Jj]oaqu[íi]n|[Cc]andelaria|[Cc]atedral|[Ee]l [Ss]ocorro|[Mm]iguel [Pp]eña|[Rr]afael [Uu]rdaneta|[Ss]an [Bb]las|[Ss]an [Jj]os[ée]|[Ss]anta [Rr]osa|[Nn]egro [Pp]rimero|[Cc]ojedes|[Jj]uan de [Mm]ata [Ss]uarez|[Ee]l [Pp]ao|[Tt]inaquillo|[Ee]l [Bb]a[úu]l|[Ss]ucre|[Ll]a [Aa]guadita|[Mm]acapo|[Ee]l [Aa]mparo|[Ll]ibertad de [Cc]ojedes|[Rr][óo]mulo [Gg]allegos|[Ss]an [Cc]arlos de [Aa]ustria|[Jj]uan [ÁáAa]ngel [Bb]ravo|[Mm]anuel [Mm]anrique|[Gg]eneral en [Jj]efe [Jj]os[ée] [Ll]aurencio [Ss]ilva|[Cc]uriapo|[Aa]lmirante [Ll]uis [Bb]ri[óo]n|[Ff]rancisco [Aa]niceto [Ll]ugo|[Mm]anuel [Rr]enaud|[Pp]adre [Bb]arral|[Ss]antos de [Aa]belgas|[Ii]mataca|[Jj]uan [Bb]autista [Aa]rismendi|[Mm]anuel [Pp]iar|[Rr][óo]mulo [Gg]allegos|[Pp]edernales|[Ll]uis [Bb]eltr[áa]n [Pp]rieto [Ff]igueroa|[Ss]an [Jj]os[ée]|[Jj]os[ée] [Vv]idal [Mm]arcano|[Ll]eonardo [Rr]u[íi]z [Pp]ineda|[Mm]ariscal [Aa]ntonio [Jj]os[ée] de [Ss]ucre|[Mm]onseñor [Aa]rgimiro [Gg]arc[íi]a|[Vv]irgen del [Vv]alle|[Ss]an [Rr]afael|[Jj]uan [Mm]illan|23 de [Ee]nero|[Aa]ltagracia|[Aa]nt[íi]mano|[Cc]aricuao|[Cc]atedral|[Cc]oche|[Ee]l [Jj]unquito|[Ee]l [Pp]ara[íi]so|[Ee]l [Rr]ecreo|[Ee]l [Vv]alle|[Cc]andelaria|[Ll]a [Pp]astora|[Ll]a [Vv]ega|[Mm]acarao|[Ss]an [Aa]Agust[íi]n|[Ss]an [Bb]ernardino|[Ss]an [Jj]os[ée]|[Ss]an [Jj]uan|[Ss]an [Pp]edro|[Ss]anta [Tt]eresa|[Ss]ucre|[Cc]apadare|[Ll]a [Pp]astora|[Ll]ibertador|[Ss]an [Jj]uan de los [Cc]ayos|[Aa]racua|[Ll]a [Pp]eña|[Ss]an [Ll]uis|[Bb]ariro|[Bb]oroj[óo]|[Cc]apat[áa]rida|[Gg]uajiro|[Ss]eque|[Vv]alle de [Ee]roa|[Zz]az[áa]rida|[Cc]acique [Mm]anaure|[Nn]orte|[Cc]arirubana|[Ss]anta [Aa]na|[Uu]rbana [Pp]unta [Cc]ard[óo]n|[Ll]a [Vv]ela de [Cc]oro|[Aa]curigua|[Gg]uaibacoa|[Ll]as [Cc]alderas|[Mm]acoruca|[Dd]abajuro|[Aa]gua [Cc]lara|[Aa]varia|[Pp]edregal|[Pp]iedra [Gg]rande|[Pp]urureche|[Aa]daure|[Aa]d[íi]cora|[Bb]araived|[Bb]uena [Vv]ista|[Jj]adacaquiva|[Ee]l [Vv][íi]nculo|[Ee]l [Hh]ato|[Mm]oruy|[Pp]ueblo [Nn]uevo|[Aa]gua [Ll]arga|[Cc]huruguara|[Ee]l [Pp]auj[íi]|[Ii]ndependencia|[Mm]aparar[íi]|[Aa]gua [Ll]inda|[Aa]raurima|[Jj]acura|[Ll]os [Tt]aques|[Jj]udibana|[Mm]ene de [Mm]auroa|[Ss]an [Ff][ée]lix|[Cc]asigua|[Gg]uzm[áa]n [Gg]uillermo|[Mm]itare|[Rr][íi]o [Ss]eco|[Ss]abaneta|[Ss]an [Aa]ntonio|[Ss]an [Gg]abriel|[Ss]anta [Aa]na|[Bb]oca del [Tt]ocuyo|[Cc]hichiriviche|[Tt]ocuyo de la [Cc]osta|[Pp]almasola|[Cc]abure|[Cc]olina|[Cc]urimagua|[Ss]an [Jj]os[ée] de la [Cc]osta|[Pp][íi]ritu|[Cc]apital [Ss]an [Ff]rancisco [Mm]irimire|[Tt]ucacas|[Bb]oca de [Aa]roa|[Ss]ucre|[Pp]ecaya|[Tt]oc[óo]pero|[Ee]l [Cc]haral|[Ll]as [Vv]egas del [Tt]uy|[Ss]anta [Cc]ruz de [Bb]ucaral|[Bb]ruzual|[Uu]rumaco|[Pp]uerto [Cc]umarebo|[Zz]az[áa]rida|[Cc]amagu[áa]n|[Pp]uerto [Mm]iranda|[Uu]verito|[Cc]haguaramas|[Ee]l [Ss]ocorro|[Ee]l [Cc]alvario|[Ee]l [Rr]astro|[Gg]uardatinajas|[Cc]apital [Uu]rbana [Cc]alabozo|[Tt]ucupido|[Ss]an [Rr]afael de [Ll]aya|[Aa]ltagracia de [Oo]rituco|[Ss]an [Rr]afael de [Oo]rituco|[Ss]an [Ff]rancisco [Jj]avier de [Ll]ezama|[Pp]aso [Rr]eal de [Mm]acaira|[Cc]arlos [Ss]oublette|[Ss]an [Ff]rancisco de [Mm]acaira|[Ll]ibertad de [Oo]Orituco|[Cc]antagallo|[Ss]an [Jj]uan de Los [Mm]orros|[Pp]arapara|[Ee]l [Ss]ombrero|[Ss]osa|[Ll]as [Mm]ercedes|[Cc]abruta|[Ss]anta [Rr]ita de [Mm]anapire|[Vv]alle de la [Pp]ascua|[Ee]spino|[Ss]an [Jj]os[ée] de [Tt]iznados|[Ss]an [Ff]rancisco de [Tt]iznados|[Ss]an [Ll]orenzo de [Tt]iznados|[Oo]rtiz|[Ss]an [Jj]os[ée] de [Uu]nare|[Zz]araza|[Gg]uayabal|[Cc]azorla|[Ss]an [Jj]os[ée] de [Gg]uaribe|[Ss]anta [Mm]ar[íi]a de [Ii]pire|[Aa]ltamira|[Qq]uebrada [Hh]onda de [Gg]uache|[Pp]io [Tt]amayo|[Yy]acamb[úu]|[Ff]reitez|[Jj]os[ée] [Mm]ar[íi]a [Bb]lanco|[Aa]nzo[áa]tegui|[Bb]ol[íi]var|[Gg]u[áa]rico|[Hh]ilario [Ll]una y [Ll]una|[Hh]umocaro [Bb]ajo|[Hh]umocaro [Aa]lto|[Ll]a [Cc]andelaria|[Mm]or[áa]n|[Cc]abudare|[Jj]os[ée] [Gg]regorio [Bb]astidas|[Aa]gua [Vv]iva|[Bb]ur[íi]a|[Gg]ustavo [Vv]ega|[Ss]arare|[Aa]ltagracia|[Aa]ntonio [Dd][íi]az|[Cc]amacaro|[Cc]astañeda|[Cc]ecilio [Zz]ubillaga|[Cc]hiquinquira|[Ee]l [Bb]lanco|[Ee]spinoza de los [Mm]onteros|[Hh]eriberto [Aa]rrollo|[Ll]ara|[Ll]as [Mm]ercedes|[Mm]anuel [Mm]orillo|[Mm]ontaña [Vv]erde|[Mm]ontes de [Oo]ca|[Rr]eyes de [Vv]argas|[Tt]orres|[Tt]rinidad [Ss]amuel|[Xx]aguas|[Ss]iquisique|[Ss]an [Mm]iguel|[Mm]oroturo|[Aa]guedo [Ff]elipe [Aa]lvarado|[Bb]uena [Vv]ista|[Cc]atedral|[Cc]oncepci[óo]n|[Ee]l [Cc]uj[íi]|[Jj]u[áa]rez|[Jj]uan de [Vv]illegas|[Ss]anta [Rr]osa|[Tt]amaca|[Uu]ni[óo]n|[Jj]uan [Bb]autista [Rr]odr[íi]guez|[Cc]uara|[Dd]iego de [Ll]ozada|[Pp]ara[íi]so de [Ss]an [Jj]os[ée]|[Ss]an [Mm]iguel|[Tt]intorero|[Jj]os[ée] [Bb]ernardo [Dd]orante|[Cc]oronel [Mm]ariano [Pp]eraza|[Pp]residente [Bb]etancourt|[Pp]residente [Pp][áa]ez|[Pp]residente [Rr][óo]mulo [Gg]allegos|[Gg]abriel [Pp]ic[óo]n [Gg]onz[áa]lez|[Hh][ée]ctor [Aa]mable [Mm]ora|[Jj]os[ée] [Nn]ucete [Ss]ardi|[Pp]ulido [Mm][ée]ndez|[Ss]anta [Cc]ruz de [Mm]ora|[Mm]esa [Bb]ol[íi]var|[Mm]esa de [Ll]as [Pp]almas|[Ll]a [Aa]zulita|[Aa]ricagua|[Ss]an [Aa]ntonio|[Cc]anagua|[Cc]apur[íi]|[Cc]hacant[áa]|[Ee]l [Mm]olino|[Gg]uaimaral|[Mm]ucutuy|[Mm]ucuchach[íi]|[Ff]ern[áa]ndez [Pp]eña|[Mm]atriz|[Mm]ontalb[áa]n|[Aa]cequias|[Jj]aj[íi]|[Ll]a [Mm]esa|[Ss]an [Jj]os[ée] del [Ss]ur|[Tt]ucan[íi]|[Ff]lorencio [Rr]am[íi]rez|[Ss]anto [Dd]omingo|[Ll]as [Pp]iedras|[Gg]uaraque|[Mm]esa de [Qq]uintero|[Rr][íi]o [Nn]egro|[Aa]rapuey|[Pp]almira|[Ss]an [Cc]rist[óo]bal de [Tt]orondoy|[Tt]orondoy|[Aa]ntonio [Ss]pinetti [Dd]ini|[Aa]rias|[Cc]aracciolo [Pp]arra [Pp][ée]rez|[Dd]omingo [Pp]eña|[Ee]l [Ll]lano|[Gg]onzalo [Pp]ic[óo]n [Ff]ebres|[Jj]acinto [Pp]laza|[Jj]uan [Rr]odr[íi]guez [Ss]u[áa]rez|[Ll]asso de la [Vv]ega|[Mm]ariano [Pp]ic[óo]n [Ss]alas|[Mm]illa|[Oo]suna [Rr]odr[íi]guez|[Ss]agrario|[Ee]l [Mm]orro|[Ll]os [Nn]evados|[Aa]ndr[ée]s [Ee]loy [Bb]lanco|[Ll]a [Vv]enta|[Pp]iñango|[Tt]imotes|[Ee]loy [Pp]aredes|[Ss]an [Rr]afael de [Aa]lc[áa]zar|[Ss]anta [Ee]lena de [Aa]renales|[Ss]anta [Mm]ar[íi]a de [Cc]aparo|[Pp]ueblo [Ll]lano|[Cc]acute|[Ll]a [Tt]oma|[Mm]ucuch[íi]es|[Mm]ucurub[áa]|[Ss]an [Rr]afaelvucrddef|[Gg]er[óo]nimo [Mm]aldonado|[Bb]ailadores|[Tt]abay|[Cc]higuar[áa]|[Ee]st[áa]nques|[Ll]agunillas|[Ll]a [Tt]rampa|[Pp]ueblo [Nn]uevo del [Ss]ur|[Ss]an [Jj]uan|[Ee]l [Aa]mparo|[Ee]l [Ll]lano|[Ss]an [Ff]rancisco|[Tt]ovar|[Ii]ndependencia|[Mm]ar[íi]a de la [Cc]oncepci[óo]n [Pp]alacios [Bb]lanco|[Nn]ueva [Bb]olivia|[Ss]anta [Aa]polonia|[Cc]año [Ee]l [Tt]igre|[Zz]ea|[Aa]rag[üu]ita|[Aa]r[ée]valo [Gg]onz[áa]lez|[Cc]apaya|[Cc]aucagua|[Pp]anaquire|[Rr]ibas|[Ee]l [Cc]af[ée]|[Mm]arizapa|[Cc]umbo|[Ss]an [Jj]os[ée] de [Bb]arlovento|[Ee]l [Cc]afetal [Cc]aracas|[Ll]as [Mm]inas [Cc]aracas|[Nn]uestra [Ss]eñora del [Rr]osario [Cc]aracas|[Hh]iguerote|[Cc]uriepe|[Tt]acarigua de [Bb]ri[óo]n|[Mm]amporal|[Cc]arrizal|[Cc]hacao [Cc]aracas|[Cc]harallave|[Ll]as [Bb]risas|[Ee]l [Hh]atillo [Cc]aracas|[Aa]ltagracia de la [Mm]ontaña|[Cc]ecilio [Aa]costa|[Ll]os [Tt]eques|[Ee]l [Jj]arillo|[Ss]an [Pp]edro|[Tt][áa]cata|[Pp]aracotos|[Cc]artanal|[Ss]anta [Tt]eresa del [Tt]uy|[Ll]a [Dd]emocracia|[Oo]cumare del [Tt]uy|[Ss]anta [Bb][áa]rbara|[Ss]an [Aa]ntonio de los [Aa]ltos|[Rr][íi]o [Cc]hico|[Ee]l [Gg]uapo|[Tt]acarigua de la [Ll]aguna|[Pp]aparo|[Ss]an [Ff]ernando del [Gg]uapo|[Ss]anta [Ll]uc[íi]a del [Tt]uy|[Cc][úu]pira|[Mm]achurucuto|[Gg]uarenas|[Ss]an [Aa]ntonio de [Yy]are|[Ss]an [Ff]rancisco de [Yy]are|[Cc][úu]a|[Nn]ueva [Cc][úu]a|[Ll]eoncio [Mm]artínez [Cc]aracas|[Cc]aucagüita [Cc]aracas|[Ff]ilas de [Mm]ariche [Cc]aracas|[Ll]a [Dd]olorita [Cc]aracas|[Pp]etare [Cc]aracas|[Gg]uatire|[Bb]ol[íi]var|[Ss]an [Aa]ntonio de [Mm]atur[íi]n|[Ss]an [Ff]rancisco de [Mm]atur[íi]n|[Aa]guasay|[Cc]aripito|[Ee]l [GG]u[áa]charo|[Ll]a [Gg]uanota|[Ss]abana de [Pp]iedra|[Ss]an [Aa]gust[íi]n|[Tt]eresen|[Cc]aripe|[Aa]reo|[Cc]apital [Cc]edeño|[Ss]an [Ff][ée]lix de [Cc]antalicio|[Vv]iento [Ff]resco|[Ee]l [Tt]ejero|[Pp]unta de [Mm]ata|[Cc]haguaramas|[Ll]as [Aa]lhuacas|[Tt]abasca|[Tt]emblador|[Aa]lto de los [Gg]odos|[Bb]oquer[óo]n|[Ll]as [Cc]ocuizas|[Ll]a [Cc]ruz|[Ss]an [Ss]im[óo]n|[Ee]l [Cc]orozo|[Ee]l [Ff]urrial|[Jj]usep[íi]n|[Ll]a [Pp]ica|[Ss]an [Vv]icente|[Aa]paricio|[Aa]ragua de [Mm]atur[íi]n|[Cc]haguamal|[Ee]l [Pp]into|[Gg]uanaguana|[Ll]a [Tt]oscana|[Tt]aguaya|[Cc]achipo|[Qq]uiriquire|[Ss]anta [Bb][áa]rbara|[Mm]or[óo]n|[Bb]arrancas|[Ll]os [Bb]arrancos de [Ff]ajardo|[Uu]racoa|[Aa]ntol[íi]n del [Cc]ampo|[Aa]rismendi|[Ss]an [Jj]uan [Bb]autista|[Zz]abala|[Gg]arc[íi]a|[Ff]rancisco [Ff]ajardo|[Bb]ol[íi]var|[Gg]uevara|[Cc]erro de [Mm]atasiete|[Ss]anta [Aa]na|[Ss]ucre|[Aa]guirre|[Mm]aneiro|[Aa]dri[áa]n|[Jj]uan [Gg]riego|[Mm]ariño|[Ss]an [Ff]rancisco de [Mm]acanao|[Bb]oca de [Rr][íi]o|[Tt]ubores|[Ll]os [Bb]arales|[Vv]icente [Ff]uentes|[Vv]illalba|[Aa]raure|[Rr][íi]o [Aa]carigua|[Pp][íi]ritu|[Uu]veral|[Cc]ordova|[Gg]uanare|[Ss]an [Jj]os[ée] de la [Mm]ontaña|[Ss]an [Jj]uan de [Gg]uanaguanare|[Vv]irgen de [Cc]oromoto|[Gg]uanarito|[Tt]rinidad de la [Cc]apilla|[Dd]ivina [Pp]astora|[Pp]eña [Bb]lanca|[Aa]parici[óo]n|[Ll]a [Ee]staci[óo]n|[Oo]spino|[Aa]carigua|[Pp]ayara|[Pp]impinela|[Rr]am[óo]n [Pp]eraza|[Cc]año [Dd]elgadito|[Pp]apel[óo]n|[Aa]ntol[íi]n [Tt]ovar [Aa]nquino|[Bb]ocono[íi]to|[Ss]anta [Ff][ée]|[Ss]an [Rr]afael de [Oo]noto|[Tt]hermo [Mm]orales|[Ff]lorida|[Ee]l [Pp]lay[óo]n|[Bb]iscucuy|[Cc]oncepci[óo]n|[Ss]an [Jj]os[ée] de [Ss]aguaz|[Ss]an [Rr]afael de [Pp]alo [Aa]lzado|[Uu]vencio [Aa]ntonio [Vv]el[áa]squez|[Vv]illa [Rr]osa|[Vv]illa [Bb]ruzual|[Cc]anelones|[Ss]anta [Cc]ruz|[Ss]an [Ii]sidro [Ll]abrador|[Mm]ariño|[Rr][óo]mulo [Gg]allegos|[Ss]an [Jj]os[ée] de [Aa]erocuar|[Tt]avera [Aa]costa|[Rr][íi]o [Cc]aribe|[Aa]ntonio [Jj]os[ée] de [Ss]ucre|[Ee]l [Mm]orro de [Pp]uerto [Ss]anto|[Pp]uerto [Ss]anto|[Ss]an [Jj]uan de las [Gg]aldonas|[Ee]l [Pp]ilar|[Ee]l [Rr]inc[óo]n|[Gg]eneral [Ff]rancisco [Aa]ntonio [Vv][áa]quez|[Gg]uara[úu]nos|[Tt]unapuicito|[Uu]ni[óo]n|[Ss]anta [Cc]atalina|[Ss]anta [Rr]osa|[Ss]anta [Tt]eresa|[Bb]ol[íi]var|[Mm]aracapana|[Mm]arig[üu]itar|[Ll]ibertad|[Ee]l [Pp]aujil|[Yy]aguaraparo|[Aa]raya|[Cc]hacopata|[Mm]anicuare|[Tt]unapuy|[Cc]ampo [Ee]l[íi]as|[Ii]rapa|[Cc]ampo [Cc]laro|[Mm]arabal|[Ss]an [Aa]ntonio de [Ii]rapa|[Ss]oro|[Ss]an [Aa]ntonio del [Gg]olfo|[Cc]umanacoa|[Aa]renas|[Aa]ricagua|[Cc]ocollar|[Ss]an [Ff]ernando|[Ss]an [Ll]orenzo|[Cc]ariaco|[Cc]atuaro|[Rr]end[óo]n|[Ss]anta [Cc]ruz|[Ss]anta [Mm]ar[íi]a|[Aa]ltagracia [Cc]uman[áa]|[Ss]anta [Ii]n[ée]s [Cc]uman[áa]|[Vv]alent[íi]n [Vv]aliente [Cc]uman[áa]|[Aa]yacucho [Cc]uman[áa]|[Ss]an [Jj]uan|[Rr]a[úu]l [Ll]eoni|[Gg]ran [Mm]ariscal|[Cc]rist[óo]bal [Cc]ol[óo]n|[Bb]ideau|[Pp]unta de [Pp]iedras|[Gg][üu]iria|[Aa]ndr[ée]s [Bb]ello|[Aa]ntonio [Rr][óo]mulo [Cc]osta|[Aa]yacucho|[Rr]ivas [Bb]erti|[Ss]an [Pp]edro del [Rr][íi]o|[Bb]ol[íi]var|[Pp]alotal|[Gg]eneral [Jj]uan [Vv]icente [Gg][óo]mez|[Ii]sa[íi]as [Mm]edina [Aa]ngarita|[Cc][áa]rdenas|[Aa]menodoro [ÁáAa]ngel [Ll]amus|[Ll]a [Ff]lorida|[Cc][óo]rdoba|[Ff]ern[áa]ndez [Ff]eo|[Aa]lberto [Aa]driani|[Ss]anto [Dd]omingo|[Ff]rancisco de [Mm]iranda|[Gg]arc[íi]a de [Hh]evia|[Bb]oca de [Gg]rita|[Jj]os[ée] [Aa]ntonio [Pp][áa]ez|[Gg]u[áa]simos|[Ii]ndependencia|[Jj]uan [Gg]erm[áa]n [Rr]oscio|[Rr]om[áa]n [Cc][áa]rdenas|[Jj][áa]uregui|[Ee]milio [Cc]onstantino [Gg]uerrero|[Mm]onseñor [Mm]iguel [Aa]ntonio [Ss]alas|[Jj]os[ée] [Mm]ar[íi]a [Vv]argas|[Jj]un[íi]n|[Ll]a [Pp]etr[óo]lea|[Qq]uinimar[íi]|[Bb]ram[óo]n|[Ll]ibertad|[Cc]ipriano [Cc]astro|[Mm]anuel [Ff]elipe [Rr]ugeles|[Cc]apital [Ll]ibertador|[Dd]oradas|[Ee]meterio [Oo]choa|[Ss]an [Jj]oaqu[íi]n de [Nn]avay|[Ll]obatera|[Cc]onstituci[óo]n|[Mm]ichelena|[Pp]anamericano|[Ll]a [Pp]almita|[Pp]edro [Mm]ar[íi]a [Uu]reña|[Nn]ueva [Aa]rcadia|[Dd]elicias|[Pp]ecaya|[Ss]amuel [Dd]ar[íi]o [Mm]aldonado|[Bb]ocon[óo]|[Hh]ern[áa]ndez|[Ll]a [Cc]oncordia|[Ss]an [Jj]uan [Bb]autista|[Pp]edro [Mm]ar[íi]a [Mm]orantes|[Ss]an [Ss]ebasti[áa]n|[Dd]r. [Ff]rancisco [Rr]omero [Ll]obo|[Ss]eboruco|[Ss]im[óo]n [Rr]odr[íi]guez|[Ss]ucre|[Ee]leazar [Ll][óo]pez [Cc]ontreras|[Ss]an [Pp]ablo|[Tt]orbes|[Uu]ribante|[Cc][áa]rdenas|[Jj]uan [Pp]ablo [Pp]eñalosa|[Pp]otos[íi]|[Ss]an [Jj]udas [Tt]adeo|[Aa]raguaney|[Ee]l [Jj]aguito|[Ll]a [Ee]speranza|[Ss]anta [Ii]sabel|[Bb]ocon[óo]|[Ee]l [Cc]armen|[Mm]osquey|[Aa]yacucho|[Bb]urbusay|[Gg]eneral [Rr]ibas|[Gg]uaramacal|[Vv]ega de [Gg]uaramacal|[Mm]onseñor [Jj][áa]uregui|[Rr]afael [Rr]angel|[Ss]an [Mm]iguel|[Ss]an [Jj]os[ée]|[Ss]abana [Gg]rande|[Cc]hereg[üu][ée]|[Gg]ranados|[Aa]rnoldo [Gg]abald[óo]n|[Bb]olivia|[Cc]arrillo|[Cc]egarra|[Cc]hejend[ée]|[Mm]anuel [Ss]alvador [Uu]lloa|[Ss]an [Jj]os[ée]|[Cc]arache|[Ll]a [Cc]oncepci[óo]n|[Cc]Cuicas|[Pp]anamericana|[Ss]anta [Cc]ruz|[Ee]scuque|[Ll]a [Uu]ni[óo]n|[Ss]anta [Rr]ita|[Ss]abana [Ll]ibre|[Ee]l [Ss]ocorro|[Ll]os [Cc]aprichos|[Aa]ntonio [Jj]os[ée] de [Ss]ucre|[Cc]ampo [Ee]l[íi]as|[Aa]rnoldo [Gg]abald[óo]n|[Ss]anta [Aa]polonia|[Ee]l [Pp]rogreso|[Ll]a [Cc]eiba|[Tt]res de [Ff]ebrero|[Ee]l [Dd]Dividive|[Aa]gua [Ss]anta|[Aa]gua [Cc]aliente|[Ee]l [Cc]enizo|[Vv]alerita|[Ee]l [Ss]alto|[Mm]onte [Cc]armelo|[Bb]uena [Vv]ista|[Ss]anta [Mm]ar[íi]a del [Hh]orc[óo]n|[Mm]otat[áa]n|[Ee]l [Bb]año|[Jj]alisco|[Pp]amp[áa]n|[Ff]lor de [Pp]atria|[Ll]a [Pp]az|[Ss]anta [Aa]na|[Pp]ampanito|[Ll]a [Cc]oncepci[óo]n|[Pp]ampanito [IIii]|[Bb]etijoque|[Jj]os[ée] [Gg]regorio [Hh]ern[áa]ndez|[Ll]a [Pp]ueblita|[Ll]os [Cc]edros|[Cc]arvajal|[Cc]ampo [Aa]legre|[Aa]ntonio [Nn]icol[áa]s [Bb]riceño|[Jj]os[ée] [Ll]eonardo [Ss]u[áa]rez|[Ss]abana de [Mm]endoza|[Jj]un[íi]n|[Vv]almore [Rr]odr[íi]guez|[Ee]l [Pp]ara[íi]so|[Aa]ndr[ée]s [Ll]inares|[Cc]hiquinquir[áa]|[Cc]rist[óo]bal [Mm]endoza|[Cc]ruz [Cc]arrillo|[Mm]atriz|[Mm]onseñor [Cc]arrillo|[Tt]res [Ee]squinas|[Cc]abimb[úu]|[Jj]aj[óo]|[Ll]a [Mm]esa de [Ee]snujaque|[Ss]antiago|[Tt]uñame|[Ll]a [Qq]uebrada|[Jj]uan [Ii]gnacio [Mm]ontilla|[Ll]a [Bb]eatriz|[Ll]a [Pp]uerta|[Mm]endoza del [Vv]alle de [Mm]omboy|[Mm]ercedes [Dd][íi]az|[Ss]an [Ll]uis|[Cc]araballeda|[Cc]arayaca|[Cc]arlos [Ss]oublette|[Cc]aruao|[Cc]atia [Ll]a [Mm]ar|[Ee]l [Jj]unko|[Ll]a [Gg]uaira|[Mm]acuto|[Mm]aiquet[íi]a|[Nn]aiguat[áa]|[Uu]rimare|[Aa]r[íi]stides [Bb]astidas|[Bb]ol[íi]var|[Cc]hivacoa|[Cc]ampo [Ee]l[íi]as|[Cc]ocorote|[Ii]ndependencia|[Jj]os[ée] [Aa]ntonio [Pp][áa]ez|[Ll]a [Tt]rinidad|[Mm]anuel [Mm]onge|[Ss]al[óo]m|[Tt]emerla|[Nn]irgua|[Ss]an [Aa]ndr[ée]s|[Yy]aritagua|[Ss]an [Jj]avier|[Aa]lbarico|[Ss]an [Ff]elipe|[Ss]ucre|[Uu]rachiche|[Ee]l [Gg]uayabo|[Ff]arriar|[Ii]sla de [Tt]oas|[Mm]onagas|[Ss]an [Ff]ernando|[Ss]an [Tt]imoteo|[Gg]eneral [Uu]rdaneta|[Ll]ibertador|[Mm]arcelino [Bb]riceño|[Pp]ueblo [Nn]uevo|[Mm]anuel [Gg]uanipa [Mm]atos|[Aa]mbrosio|[Cc]armen [Hh]errera|[Ll]a [Rr]osa|[Gg]erm[áa]n [Rr][íi]os [Ll]inares|[Ss]an [Bb]enito|[Rr][óo]mulo [Bb]etancourt|[Jj]orge [Hh]ern[áa]ndez|[Pp]unta [Gg]orda|[Aa]r[íi]stides [Cc]alvani|[Ee]ncontrados|[Uu]d[óo]n [Pp][ée]rez|[Mm]oralito|[Cc]apital [Ss]an [Cc]arlos del [Zz]ulia|[Ss]anta [Cc]ruz del [Zz]ulia|[Ss]anta [Bb][áa]rbara|[Uu]rribarr[íi]|[Cc]arlos [Qq]uevedo|[Ff]rancisco [Jj]avier [Pp]ulgar|[Ss]im[óo]n [Rr]odr[íi]guez|[Gg]uamo [Gg]avilanes|[Ll]a [Cc]oncepci[óo]n|[Ss]an [Jj]os[ée]|[Mm]ariano [Pp]arra [Ll]e[óo]n|[Jj]os[ée] [Rr]am[óo]n [Yy][ée]pez|[Jj]es[úu]s [Mm]ar[íi]a [Ss]empr[úu]n|[Bb]ar[íi]|[Cc]oncepci[óo]n|[Aa]ndr[ée]s [Bb]ello|[Cc]hiquinquir[áa]|[Ee]l [Cc]armelo|[Pp]otreritos|[Ll]ibertad|[Aa]lonso de [Oo]jeda|[Vv]enezuela|[Ee]leazar [Ll][óo]pez [Cc]ontreras|[Cc]ampo [Ll]ara|[Bb]artolom[ée] de las [Cc]asas|[Ll]ibertad|[Rr][íi]o [Nn]egro|[Ss]an [Jj]os[ée] de [Pp]erij[áa]|[Ss]an [Rr]afael|[Ll]a [Ss]ierrita|[Ll]as [Pp]arcelas|[Ll]uis [Dd]e [Vv]icente|[Mm]onseñor [Mm]arcos [Ss]ergio [Gg]odoy|[Rr]icaurte|[Tt]amare|[Aa]ntonio [Bb]orjas [Rr]omero|[Bb]ol[íi]var|[Cc]acique [Mm]ara|[Cc]arracciolo [Pp]arra [Pp][ée]rez|[Cc]ecilio [Aa]costa|[Cc]risto de [Aa]ranza|[Cc]oquivacoa|[Cc]hiquinquir[áa]|[Ff]rancisco [Ee]ugenio [Bb]ustamante|[Ii]delfonzo [Vv][áa]squez|[Jj]uana de [ÁáAa]vila|[Ll]uis [Hh]urtado [Hh]Hguera|[Mm]anuel [Dd]agnino|[Oo]legario [Vv]illalobos|[Rr]a[úu]l [Ll]eoni|[Ss]anta [Ll]uc[íi]a|[Vv]enancio [Pp]ulgar|[Ss]an [Ii]sidro|[Aa]ltagracia|[Ff]ar[íi]a|[Aa]na [Mm]ar[íi]a [Cc]ampos|[Ss]an [Aa]ntonio|[SS]an [Jj]os[ée]|[Ss]inamaica|[Aa]lta [Gg]uajira|[Ee]l[íi]as [Ss][áa]nchez [Rr]ubio|[Gg]uajira|[Dd]onaldo [Gg]arc[íi]a|[Ee]l [Rr]osario|[Ss]ixto [Zz]ambrano|[Ss]an [Ff]rancisco|[Ee]l [Bb]ajo|[Dd]omitila [Ff]lores|[Ff]rancisco [Oo]choa|[Ll]os [Cc]ortijos|[Mm]arcial [Hh]ern[áa]ndez|[Jj]os[ée] [Dd]omingo [Rr]us|[Ss]anta [Rr]ita|[Ee]l [Mm]ene|[Pp]edro [Ll]ucas [Uu]rribarr[íi]|[Jj]os[ée] [Cc]enobio [Uu]rribarr[íi]|[Rr]afael [Mm]ar[íi]a [Bb]aralt|[Mm]anuel [Mm]anrique|[Rr]afael [Uu]rdaneta|[Bb]obures|[Gg]ibraltar|[Hh]eras|[Mm]onseñor [Aa]rturo [ÁáAa]lvarez|[Rr][óo]mulo [Gg]allegos|[Ee]l [Bb]atey|[Rr]afael [Uu]rdaneta|[Ll]a [Vv]ictoria|[Rr]a[úu]úl [Cc]uenca" >
</br></br>


<font style="margin-left: 70px" size="4"><b>Cambiar Dirección</b></font>
<input style="margin-left: 5%" size="40" type="tex" name="direccion" placeholder="Indique la Dirección completa" >

</br></br>
 <table bgcolor="#999" style="margin-left: -22px" width="60%">
<a>
       

     </table> <!franja gris>

</br></br></br></br></br></br></br>



<input class='btn btn-lg btn-primary btn-block btn-signin' style="margin-left: 0px" size="40" type="submit" name="incluir" value="Modificar">

</form>


         
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