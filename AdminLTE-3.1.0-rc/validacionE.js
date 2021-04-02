$(document).ready(function () {
  $("#createEmpleado").click(function () {
    if ($("#id_Tipousuario").val() == "Tipo de Empleado") {
      swal("Debes ingresar un tipo de empleado");
      return false;
    } else if ($("#nombres").val() == "") {
      swal("Debes ingresar un nombre válido");
      return false;
    } else if ($("#apellidos").val() == "") {
      swal("Debes ingresar apellidos");
      return false;
    } else if ($("#usuario").val() == "") {
      swal("Debes ingresar usuario");
      return false;
    } else if ($("#correo").val() == "") {
      swal("Debes ingresar correo");
      return false;
    } else if ($("#contraseña").val() == "") {
      swal("Debes ingresar contraseña");
      return false;
    } else if ($("#telefono").val() == 0) {
      swal("Debes ingresar telefono");
      return false;
    } else if ($("#direccion").val() == "") {
      swal("Debes ingresar direccion");
      return false;
    } else if ($("#sexo").val() == "Sexo") {
      swal("Debes ingresar sexo");
      return false;
    } else if ($("#edad").val() == 0) {
      swal("Debes ingresar edad");
      return false;
    }
  });
});
