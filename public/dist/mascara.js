"use strict";

// $(document).ready(inicializarElementos);
$("input[name='nombre']").on("input", function () {
  var n = destroyMask(this.value);
  this.setAttribute("data-normalized", n);
  this.value = createMask(n);
});

function createMask(string) {
  return string.replace(/(\d{2})(\d{3})(\d{2})/, "$1$2$3");
}

function destroyMask(string) {
  return string.replace(/\D/g, '').substring(0, 10);
} // function inicializarElementos()
// {
//   $("#botonAgregarPaciente").click(clickElemento);
// }
// function clickElemento(value)
// {
//   var value = $("#obtenernombre").val();
//   alert(value);
// }


$("table tbody tr").click(function () {
  var nombre = $(this).find("td:eq(1)").text();
  var apellido = $(this).find("td:eq(2)").text();
  alert(nombre + apellido);
});