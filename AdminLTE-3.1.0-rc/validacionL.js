$(document).ready(function () {
  $("#createLaptop").click(function () {
    if ($("#cantidad").val() == 0) {
      swal("Debes ingresar una cantidad");
      return false;
    } else if ($("#condicion").val() == "Condición") {
      swal("Debes ingresar condición");
      return false;
    } else if ($("#id_Fabricante").val() == "Fabricante") {
      swal("Debes ingresar fabricante");
      return false;
    } else if ($("#modelo").val() == "") {
      swal("Debes ingresar modelo");
      return false;
    } else if ($("#precio").val() == 0) {
      swal("Debes ingresar precio");
      return false;
    } else if ($("#imagen").val() == "") {
      swal("Debes ingresar url de imagen");
      return false;
    } else if ($("#gráficos").val() == "") {
      swal("Debes ingresar tarjeta gráfica");
      return false;
    } else if ($("#id_Sistema").val() == "Sistema Operativo") {
      swal("Debes ingresar un sistema operativo");
      return false;
    } else if ($("#ram").val() == "RAM") {
      swal("Debes ingresar cantidad de RAM");
      return false;
    } else if (
      $("#almacenamientoPrincipal").val() == "Almacenamiento Principal"
    ) {
      swal("Debes ingresar almacenamiento principal");
      return false;
    } else if (
      $("#almacenamientoSecundario").val() == "Almacenamiento Secundario"
    ) {
      swal("Debes ingresar almacenamiento secundario");
      return false;
    } else if ($("#id_Familia").val() == "Familia") {
      swal("Debes ingresar la familia del procesador");
      return false;
    } else if ($("#procesador").val() == "") {
      swal("Debes ingresar procesador");
      return false;
    } else if ($("#wifi").val() == "Wi-Fi") {
      swal("Debes ingresar Wi-Fi");
      return false;
    } else if ($("#bluetooth").val() == "Bluetooth") {
      swal("Debes ingresar bluetooth");
      return false;
    } else if ($("#microfono").val() == "Microfono") {
      swal("Debes ingresar microfono");
      return false;
    } else if ($("#camara").val() == "Cámara") {
      swal("Debes ingresar camara");
      return false;
    } else if ($("#teclado").val() == "Teclado") {
      swal("Debes ingresar teclado");
      return false;
    } else if ($("#unidadOptica").val() == "Unidad Óptica") {
      swal("Debes ingresar unidad óptica");
      return false;
    } else if ($("#puertos").val() == "") {
      swal("Debes ingresar puertos");
      return false;
    } else if ($("#garantia").val() == "Garantía") {
      swal("Debes ingresar garantía");
      return false;
    } else if ($("#bateria").val() == "") {
      swal("Debes ingresar bateria");
      return false;
    } else if ($("#resolución").val() == "Resolución") {
      swal("Debes ingresar resolución de pantalla");
      return false;
    } else if ($("#tamaño").val() == "Tamaño") {
      swal("Debes ingresar tamaño de pantalla");
      return false;
    } else if ($("#frecuencia").val() == "Frecuencia") {
      swal("Debes ingresar frecuencia de pantalla");
      return false;
    }
  });
});
