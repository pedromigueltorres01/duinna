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