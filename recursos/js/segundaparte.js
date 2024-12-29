function mostrar(id) {
    if (id == "estudiante") {
        $("#estudiante").show();
        $("#trabajador").hide();
        
    }

    if (id == "trabajador") {
        $("#estudiante").hide();
        $("#trabajador").show();
        
    }

  


}