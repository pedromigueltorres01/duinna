function mostrar(id) {
    if (id == "indigena") {
        $("#indigena").show();
        $("#noindigena").hide();
        $("#nada").hide();
    }

    if (id == "noindigena") {
        $("#indigena").hide();
        $("#noindigena").show();
        $("#nada").hide();
    }

    if (id=="nada"){
      $("#indigena").hide();
      $("#noindigena").hide();
      $("nada").show();
    }



}