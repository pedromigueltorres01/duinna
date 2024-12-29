
<!DOCTYPE html>
<html>
<head>
	<title>pruebe selec</title>
	<script type="text/javascript" src="../recursos/js/jquery-3.3.1.min.js"></script>
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


	
</head>
<body>

<?php
require("../modelo/mod_conexion.php");

$result = pg_query($con,"SELECT id_estado,estado from estados order by estado asc;");



		?>
		<form id="combo" name="combo" action="../controlador/guardarubicacion.php" method="POST">
		<div> Estado <select style="" name="cbx_estado" id="cbx_estado">
												  <option value="">Selecione</option><?php

		while ($rowE = pg_fetch_array($result)) {

			?>
									 <option value=" <?php echo "   $rowE[0]";?> "> <?php echo "   $rowE[1]";?></option>
												 
								<?php
		  
		}
		?>
		</select>
		</div> <BR>
<div>
	<font style="">Municipio</font>
						<select id="cbx_municipio" name="cbx_municipio"></select></div>
<BR>
<div>
	<font style="">Parroquia</font>
						<select id="cbx_parroquia" name="cbx_parroquia">						

						</select>
</div>
<br>
<div>
	<input type="submit" name="ubicacion" value="enviar">
</div>

</form>

</body>
</html> 
