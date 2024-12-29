function mostrar1(id) {
    if (id == "discapacidad") {
        $("#discapacidad").show();
        $("#nodiscapacidad").hide();
        $("#nada").hide();
    }

    if (id == "nodiscapacidad") {
        $("#discapacidad").hide();
        $("#nodiscapacidad").show();
        $("#nada").hide();
    }

    if (id=="nada"){
      $("#discapacidad").hide();
      $("#nodiscapacidad").hide();
      $("nada").show();
    }



}

function mostrar(id) {
    if (id == "enfermedad") {
        $("#enfermedad").show();
        $("#noenfermedad").hide();
        $("#nada1").hide();
    }

    if (id == "noenfermedad") {
        $("#enfermedad").hide();
        $("#noenfermedad").show();
        $("#nada1").hide();
    }

    if (id=="nada1"){
      $("#enfermedad").hide();
      $("#noenfermedad").hide();
      $("nada1").show();
    }



}