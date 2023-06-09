

  // $(document).ready(inicializarElementos);

  // $("input[name='nombre']").on("input", function(){
  //   let n = destroyMask(this.value);
  //     this.setAttribute("data-normalized", n);
  //   this.value = createMask(n);
  // })
  
  // function createMask(string){
  //   return string.replace(/(\d{2})(\d{3})(\d{2})/,"$1$2$3");
  // }
  
  // function destroyMask(string){
  //   return string.replace(/\D/g,'').substring(0, 10);
  // }
  // function inicializarElementos()
  // {
  //   $("#botonAgregarPaciente").click(clickElemento);
  // }

  document.addEventListener('DOMContentLoaded', function(event) {
    event.preventDefault();
     document.getElementById('agregar800').addEventListener('click', agregaTextot800);
     document.getElementById('borrar800').addEventListener('click', borrartextot800);
     document.getElementById('agregar815').addEventListener('click', agregaTextot815);
     document.getElementById('borrar815').addEventListener('click', borrartextot815);
     document.getElementById('agregar830').addEventListener('click', agregaTextot830);
     document.getElementById('borrar830').addEventListener('click', borrartextot830);
     document.getElementById('agregar845').addEventListener('click', agregaTextot845);
     document.getElementById('borrar845').addEventListener('click', borrartextot845);
     document.getElementById('agregar900').addEventListener('click', agregaTextot900);
     document.getElementById('borrar900').addEventListener('click', borrartextot900);
     document.getElementById('agregar915').addEventListener('click', agregaTextot915);
     document.getElementById('borrar915').addEventListener('click', borrartextot915);
     document.getElementById('agregar930').addEventListener('click', agregaTextot930);
     document.getElementById('borrar930').addEventListener('click', borrartextot930);
     document.getElementById('agregar945').addEventListener('click', agregaTextot945);
     document.getElementById('borrar945').addEventListener('click', borrartextot945);

  });

  function agregaTextot800(e) {
    var inputNombre = document.getElementById('t800');
    var resultadoclick = document.getElementById('resultadodesdetabla').innerText;
      inputNombre.value = resultadoclick;
      e.preventDefault();
}
 function borrartextot800(event) {
  event.preventDefault();
    var borrartextoeninput800 = document.getElementById('t800');
    borrartextoeninput800.value = "";
}
function agregaTextot815(e) {
  var inputNombre = document.getElementById('t815');
  var resultadoclick = document.getElementById('resultadodesdetabla').innerText;
    inputNombre.value = resultadoclick;
    e.preventDefault();
}
function borrartextot815(event) {
event.preventDefault();
  var borrartextoeninput815 = document.getElementById('t815');
  borrartextoeninput815.value = "";
}
function agregaTextot830(e) {
  var inputNombre = document.getElementById('t830');
  var resultadoclick = document.getElementById('resultadodesdetabla').innerText;
    inputNombre.value = resultadoclick;
    e.preventDefault();
}
function borrartextot830(event) {
event.preventDefault();
  var borrartextoeninput830 = document.getElementById('t830');
  borrartextoeninput830.value = "";
}
function agregaTextot845(e) {
  var inputNombre = document.getElementById('t845');
  var resultadoclick = document.getElementById('resultadodesdetabla').innerText;
    inputNombre.value = resultadoclick;
    e.preventDefault();
}
function borrartextot845(event) {
event.preventDefault();
  var borrartextoeninput845 = document.getElementById('t845');
  borrartextoeninput845.value = "";
}
function agregaTextot900(e) {
  var inputNombre = document.getElementById('t900');
  var resultadoclick = document.getElementById('resultadodesdetabla').innerText;
    inputNombre.value = resultadoclick;
    e.preventDefault();
}
function borrartextot900(event) {
event.preventDefault();
  var borrartextoeninput900 = document.getElementById('t900');
  borrartextoeninput900.value = "";
}
function agregaTextot915(e) {
  var inputNombre = document.getElementById('t915');
  var resultadoclick = document.getElementById('resultadodesdetabla').innerText;
    inputNombre.value = resultadoclick;
    e.preventDefault();
}
function borrartextot915(event) {
event.preventDefault();
  var borrartextoeninput915 = document.getElementById('t915');
  borrartextoeninput915.value = "";
}
function agregaTextot930(e) {
  var inputNombre = document.getElementById('t930');
  var resultadoclick = document.getElementById('resultadodesdetabla').innerText;
    inputNombre.value = resultadoclick;
    e.preventDefault();
}
function borrartextot930(event) {
event.preventDefault();
  var borrartextoeninput930 = document.getElementById('t930');
  borrartextoeninput930.value = "";
}
function agregaTextot945(e) {
  var inputNombre = document.getElementById('t945');
  var resultadoclick = document.getElementById('resultadodesdetabla').innerText;
    inputNombre.value = resultadoclick;
    e.preventDefault();
}
function borrartextot945(event) {
event.preventDefault();
  var borrartextoeninput945 = document.getElementById('t945');
  borrartextoeninput945.value = "";
}

 // window.addEventListener("load", cargaPagina);
  // function cargaPagina() {
  //     var obtenert800 = document.getElementById("agregar800").addEventListener("click", agregaTextot800);
  //     var borrart800 = document.getElementById("borrar800").addEventListener("click", borrartextot800);
  //     event.preventDefault();
  // }
  
  

   //Cuando se carga el turno.index pone en el texto la fecha MM-DD
    window.onload = function(){
    
      var Fecha = new Date();
      var Ano = Fecha.getFullYear();
      var Mes = Fecha.getMonth();
      Mes++;
      var Dia = Fecha.getDate();
      var Hora = Fecha.getHours();
      var Minuto = Fecha.getMinutes();
      var Segundo = Fecha.getSeconds();
      document.getElementById("texto").value = "0" + Mes + "-" +  "0" + Dia 
   
}

function clickElemento()
   {
    var obnombre = document.getElementById('obtenernombre').innerText;
    var obapellido = document.getElementById('obtenerapellido').innerText;
    var resultadoclick = document.getElementById('resultadodesdetabla');
    resultadoclick.innerHTML = obnombre + " " + obapellido;
   }

  //  function AgregarPacienteturno800()
  //  {
  //   var resultadodelclicknombre = document.getElementById('resultadodesdetabla').innerText;
  //   var agregara800 = document.getElementById('t800');
  //    agregara800.innerText = resultadodelclicknombre;
  //   //console.log(resultadodelclicknombre);
  //  }


 
 


