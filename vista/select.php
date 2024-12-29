<?php
require('../modelo/conexion.php');
$con=conex();
$result = pg_query($con,"SELECT id_estado,estado  from estados order by estado asc;");
//print_r($result);




?>
<!DOCTYPE html>
<html>
<head>
	<title>selec dinamico</title>
	<script type="text/javascript" src="../recursos/js/jquery-3.3.1.min.js"></script>
	<script lenguage="javascript">
			$(document).ready(function(){
				$("#cbx_estado").change(function () {
 
					//$('#cbx_parroquia').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');
					
					$("#cbx_estado option:selected").each(function () {
						id_estado = $(this).val();
						$.post("controlador/getMunicipio.php", { id_estado: id_estado }, function(data){
							$("#cbx_municipio").html(data);
						});            
					});
				})
			});
			
			$(document).ready(function(){
				$("#cbx_municipio").change(function () {
					$("#cbx_municipio option:selected").each(function () {
						id_municipio = $(this).val();
						$.post("../modelo/getLocalidad.php", { id_municipio: id_municipio }, function(data){
							$("#cbx_localidad").html(data);
						});            
					});
				})
			});
		</script>

</head>
<body>
		<form id="combo" name="combo" action="../controlador/guardarubicacion.php"  method="POST">
			<div>Seleciona el estado 
				<select id="cbx_estado" name="cbx_estado">
					<option value="0">Estado</option>
					<?php while ($consulta = pg_fetch_assoc($result)) {

			?>
									<option value="<?php echo $consulta['estado'];?>"> <?php echo $consulta['estado'];?></option>
											 
								<?php
		  //print_r($consulta);	
		}
		?>
				
				</select>
			</div>
			<div> Municipio
						<select id="cbx_municipio" name="cbx_municipio">
										
						</select>
	

</div>
<br>
<div>
	<input type="submit" name="ubicacion" value="enviar">
</div>
			
		</form>

</body>
</html>
