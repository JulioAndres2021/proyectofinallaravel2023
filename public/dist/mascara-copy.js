

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
     document.getElementById('agregar1000').addEventListener('click', agregaTextot1000);
     document.getElementById('borrar1000').addEventListener('click', borrartextot1000);
     document.getElementById('agregar1015').addEventListener('click', agregaTextot1015);
     document.getElementById('borrar1015').addEventListener('click', borrartextot1015);
     document.getElementById('agregar1030').addEventListener('click', agregaTextot1030);
     document.getElementById('borrar1030').addEventListener('click', borrartextot1030);
     document.getElementById('agregar1045').addEventListener('click', agregaTextot1045);
     document.getElementById('borrar1045').addEventListener('click', borrartextot1045);
     document.getElementById('agregar1100').addEventListener('click', agregaTextot1100);
     document.getElementById('borrar1100').addEventListener('click', borrartextot1100);
     document.getElementById('agregar1115').addEventListener('click', agregaTextot1115);
     document.getElementById('borrar1115').addEventListener('click', borrartextot1115);
     document.getElementById('agregar1130').addEventListener('click', agregaTextot1130);
     document.getElementById('borrar1130').addEventListener('click', borrartextot1130);
     document.getElementById('agregar1145').addEventListener('click', agregaTextot1145);
     document.getElementById('borrar1145').addEventListener('click', borrartextot1145);
     document.getElementById('agregar1200').addEventListener('click', agregaTextot1200);
     document.getElementById('borrar1200').addEventListener('click', borrartextot1200);
     document.getElementById('agregar1215').addEventListener('click', agregaTextot1215);
     document.getElementById('borrar1215').addEventListener('click', borrartextot1215);
     document.getElementById('agregar1230').addEventListener('click', agregaTextot1230);
     document.getElementById('borrar1230').addEventListener('click', borrartextot1230);
     document.getElementById('agregar1245').addEventListener('click', agregaTextot1245);
     document.getElementById('borrar1245').addEventListener('click', borrartextot1245);
     document.getElementById('agregar1600').addEventListener('click', agregaTextot1600);
     document.getElementById('borrar1600').addEventListener('click', borrartextot1600);
     document.getElementById('agregar1615').addEventListener('click', agregaTextot1615);
     document.getElementById('borrar1615').addEventListener('click', borrartextot1615);
     document.getElementById('agregar1630').addEventListener('click', agregaTextot1630);
     document.getElementById('borrar1630').addEventListener('click', borrartextot1630);
     document.getElementById('agregar1645').addEventListener('click', agregaTextot1645);
     document.getElementById('borrar1645').addEventListener('click', borrartextot1645);
     document.getElementById('agregar1700').addEventListener('click', agregaTextot1700);
     document.getElementById('borrar1700').addEventListener('click', borrartextot1700);
     document.getElementById('agregar1715').addEventListener('click', agregaTextot1715);
     document.getElementById('borrar1715').addEventListener('click', borrartextot1715);
     document.getElementById('agregar1730').addEventListener('click', agregaTextot1730);
     document.getElementById('borrar1730').addEventListener('click', borrartextot1730);
     document.getElementById('agregar1745').addEventListener('click', agregaTextot1745);
     document.getElementById('borrar1745').addEventListener('click', borrartextot1745);
     document.getElementById('agregar1800').addEventListener('click', agregaTextot1800);
     document.getElementById('borrar1800').addEventListener('click', borrartextot1800);
     document.getElementById('agregar1815').addEventListener('click', agregaTextot1815);
     document.getElementById('borrar1815').addEventListener('click', borrartextot1815);
     document.getElementById('agregar1830').addEventListener('click', agregaTextot1830);
     document.getElementById('borrar1830').addEventListener('click', borrartextot1830);
     document.getElementById('agregar1845').addEventListener('click', agregaTextot1845);
     document.getElementById('borrar1845').addEventListener('click', borrartextot1845);
     document.getElementById('agregar1900').addEventListener('click', agregaTextot1900);
     document.getElementById('borrar1900').addEventListener('click', borrartextot1900);
     document.getElementById('agregar1915').addEventListener('click', agregaTextot1915);
     document.getElementById('borrar1915').addEventListener('click', borrartextot1915);
     document.getElementById('agregar1930').addEventListener('click', agregaTextot1930);
     document.getElementById('borrar1930').addEventListener('click', borrartextot1930);
     document.getElementById('agregar1945').addEventListener('click', agregaTextot1945);
     document.getElementById('borrar1945').addEventListener('click', borrartextot1945);
     document.getElementById('agregar2000').addEventListener('click', agregaTextot2000);
     document.getElementById('borrar2000').addEventListener('click', borrartextot2000);
     document.getElementById('agregar2015').addEventListener('click', agregaTextot2015);
     document.getElementById('borrar2015').addEventListener('click', borrartextot2015);
     document.getElementById('agregar2030').addEventListener('click', agregaTextot2030);
     document.getElementById('borrar2030').addEventListener('click', borrartextot2030);
     document.getElementById('agregar2045').addEventListener('click', agregaTextot2045);
     document.getElementById('borrar2045').addEventListener('click', borrartextot2045);


  });

  function agregaTextot800(event) {
    var inputNombret800 = document.getElementById('t800');
    var resultadoclickt800 = document.getElementById('resultadodesdetabla').innerText;
      inputNombret800.value = resultadoclickt800;
     
      event.preventDefault();
      //luego de agregar el nombre seleccionado, LO BORRA
      let nombredelpaciente = document.getElementById("resultadodesdetabla");
      nombredelpaciente.innerHTML = "";
}
 function borrartextot800(event) {
  event.preventDefault();
    var borrartextoeninput800 = document.getElementById('t800');
    borrartextoeninput800.value = "";
}
function agregaTextot815(event) {
  var inputNombret815 = document.getElementById('t815');
  var resultadoclickt815 = document.getElementById('resultadodesdetabla').innerText;
    inputNombret815.value = resultadoclickt815;
    event.preventDefault();
    //luego de agregar el nombre seleccionado, LO BORRA
    let nombredelpaciente = document.getElementById("resultadodesdetabla");
    nombredelpaciente.innerHTML = "";
}
function borrartextot815(event) {
event.preventDefault();
  var borrartextoeninput815 = document.getElementById('t815');
  borrartextoeninput815.value = "";
}
function agregaTextot830(event) {
  var inputNombret830 = document.getElementById('t830');
  var resultadoclickt830 = document.getElementById('resultadodesdetabla').innerText;
    inputNombret830.value = resultadoclickt830;
    event.preventDefault();
    //luego de agregar el nombre seleccionado, LO BORRA
    let nombredelpaciente = document.getElementById("resultadodesdetabla");
    nombredelpaciente.innerHTML = "";
}
function borrartextot830(event) {
event.preventDefault();
  var borrartextoeninput830 = document.getElementById('t830');
  borrartextoeninput830.value = "";
}
function agregaTextot845(event) {
  var inputNombret845 = document.getElementById('t845');
  var resultadoclickt845 = document.getElementById('resultadodesdetabla').innerText;
    inputNombret845.value = resultadoclickt845;
    event.preventDefault();
    //luego de agregar el nombre seleccionado, LO BORRA
    let nombredelpaciente = document.getElementById("resultadodesdetabla");
    nombredelpaciente.innerHTML = "";
}
function borrartextot845(event) {
event.preventDefault();
  var borrartextoeninput845 = document.getElementById('t845');
  borrartextoeninput845.value = "";
}
function agregaTextot900(event) {
  var inputNombret900 = document.getElementById('t900');
  var resultadoclickt900 = document.getElementById('resultadodesdetabla').innerText;
    inputNombret900.value = resultadoclickt900;
    event.preventDefault();
    //luego de agregar el nombre seleccionado, LO BORRA
    let nombredelpaciente = document.getElementById("resultadodesdetabla");
    nombredelpaciente.innerHTML = "";
}
function borrartextot900(event) {
event.preventDefault();
  var borrartextoeninput900 = document.getElementById('t900');
  borrartextoeninput900.value = "";
}
function agregaTextot915(event) {
  var inputNombret915 = document.getElementById('t915');
  var resultadoclickt915 = document.getElementById('resultadodesdetabla').innerText;
    inputNombret915.value = resultadoclickt915;
    event.preventDefault();
    //luego de agregar el nombre seleccionado, LO BORRA
    let nombredelpaciente = document.getElementById("resultadodesdetabla");
    nombredelpaciente.innerHTML = "";
}
function borrartextot915(event) {
event.preventDefault();
  var borrartextoeninput915 = document.getElementById('t915');
  borrartextoeninput915.value = "";
}
function agregaTextot930(event) {
  var inputNombret930 = document.getElementById('t930');
  var resultadoclickt930 = document.getElementById('resultadodesdetabla').innerText;
    inputNombret930.value = resultadoclickt930;
    event.preventDefault();
    //luego de agregar el nombre seleccionado, LO BORRA
    let nombredelpaciente = document.getElementById("resultadodesdetabla");
    nombredelpaciente.innerHTML = "";
}
function borrartextot930(event) {
event.preventDefault();
  var borrartextoeninput930 = document.getElementById('t930');
  borrartextoeninput930.value = "";
}
function agregaTextot945(event) {
  var inputNombret945 = document.getElementById('t945');
  var resultadoclickt945 = document.getElementById('resultadodesdetabla').innerText;
    inputNombret945.value = resultadoclickt945;
    event.preventDefault();
    //luego de agregar el nombre seleccionado, LO BORRA
    let nombredelpaciente = document.getElementById("resultadodesdetabla");
    nombredelpaciente.innerHTML = "";
}
function borrartextot945(event) {
event.preventDefault();
  var borrartextoeninput945 = document.getElementById('t945');
  borrartextoeninput945.value = "";
}
 function agregaTextot1000(event) {
   var inputNombret1000 = document.getElementById('t1000');
   var resultadoclickt1000 = document.getElementById('resultadodesdetabla').innerText;
     inputNombret1000.value = resultadoclickt1000;
     event.preventDefault();
     //luego de agregar el nombre seleccionado, LO BORRA
     let nombredelpaciente = document.getElementById("resultadodesdetabla");
     nombredelpaciente.innerHTML = "";
 }
 function borrartextot1000(event) {
 event.preventDefault();
   var borrartextoeninput1000 = document.getElementById('t1000');
   borrartextoeninput1000.value = "";
 }
 function agregaTextot1015(event) {
   var inputNombret1015 = document.getElementById('t1015');
   var resultadoclickt1015 = document.getElementById('resultadodesdetabla').innerText;
     inputNombret1015.value = resultadoclickt1015;
     event.preventDefault();
     //luego de agregar el nombre seleccionado, LO BORRA
     let nombredelpaciente = document.getElementById("resultadodesdetabla");
     nombredelpaciente.innerHTML = "";
 }
 function borrartextot1015(event) {
 event.preventDefault();
   var borrartextoeninput1015 = document.getElementById('t1015');
   borrartextoeninput1015.value = "";
 }
 function agregaTextot1030(event) {
   var inputNombret1030 = document.getElementById('t1030');
   var resultadoclickt1030 = document.getElementById('resultadodesdetabla').innerText;
     inputNombret1030.value = resultadoclickt1030;
     event.preventDefault();
     //luego de agregar el nombre seleccionado, LO BORRA
     let nombredelpaciente = document.getElementById("resultadodesdetabla");
     nombredelpaciente.innerHTML = "";
 }
 function borrartextot1030(event) {
 event.preventDefault();
   var borrartextoeninput1030 = document.getElementById('t1030');
   borrartextoeninput1030.value = "";
 }
 function agregaTextot1045(event) {
   var inputNombret1045 = document.getElementById('t1045');
   var resultadoclickt1045 = document.getElementById('resultadodesdetabla').innerText;
     inputNombret1045.value = resultadoclickt1045;
     event.preventDefault();
     //luego de agregar el nombre seleccionado, LO BORRA
     let nombredelpaciente = document.getElementById("resultadodesdetabla");
     nombredelpaciente.innerHTML = "";
 }
 function borrartextot1045(event) {
 event.preventDefault();
   var borrartextoeninput1045 = document.getElementById('t1045');
   borrartextoeninput1045.value = "";
 }
 function agregaTextot1100(event) {
   var inputNombret1100 = document.getElementById('t1100');
   var resultadoclickt1100 = document.getElementById('resultadodesdetabla').innerText;
     inputNombret1100.value = resultadoclickt1100;
     event.preventDefault();
     //luego de agregar el nombre seleccionado, LO BORRA
     let nombredelpaciente = document.getElementById("resultadodesdetabla");
     nombredelpaciente.innerHTML = "";
 }
 function borrartextot1100(event) {
 event.preventDefault();
   var borrartextoeninput1100 = document.getElementById('t1100');
   borrartextoeninput1100.value = "";
 }
 function agregaTextot1115(event) {
   var inputNombret1115 = document.getElementById('t1115');
   var resultadoclickt1115 = document.getElementById('resultadodesdetabla').innerText;
     inputNombret1115.value = resultadoclickt1115;
     event.preventDefault();
     //luego de agregar el nombre seleccionado, LO BORRA
     let nombredelpaciente = document.getElementById("resultadodesdetabla");
     nombredelpaciente.innerHTML = "";
 }
 function borrartextot1115(event) {
 event.preventDefault();
   var borrartextoeninput1115 = document.getElementById('t1115');
   borrartextoeninput1115.value = "";
 }
 function agregaTextot1130(event) {
  var inputNombret1130 = document.getElementById('t1130');
   var resultadoclickt1130 = document.getElementById('resultadodesdetabla').innerText;
     inputNombret1130.value = resultadoclickt1130;
     event.preventDefault();
     //luego de agregar el nombre seleccionado, LO BORRA
     let nombredelpaciente = document.getElementById("resultadodesdetabla");
     nombredelpaciente.innerHTML = "";
 }
 function borrartextot1130(event) {
 event.preventDefault();
   var borrartextoeninput1130 = document.getElementById('t1130');
   borrartextoeninput1130.value = "";
 }
 function agregaTextot1145(event) {
  var inputNombret1145 = document.getElementById('t1145');
   var resultadoclickt1145 = document.getElementById('resultadodesdetabla').innerText;
     inputNombret1145.value = resultadoclickt1145;
    event.preventDefault();
    //luego de agregar el nombre seleccionado, LO BORRA
    let nombredelpaciente = document.getElementById("resultadodesdetabla");
    nombredelpaciente.innerHTML = "";
 }
 function borrartextot1145(event) {
 event.preventDefault();
  var borrartextoeninput1145 = document.getElementById('t1145');
   borrartextoeninput1145.value = "";
 }
 function agregaTextot1200(event) {
   var inputNombret1200 = document.getElementById('t1200');
   var resultadoclickt1200 = document.getElementById('resultadodesdetabla').innerText;
     inputNombret1200.value = resultadoclickt1200;
     event.preventDefault();
     //luego de agregar el nombre seleccionado, LO BORRA
     let nombredelpaciente = document.getElementById("resultadodesdetabla");
     nombredelpaciente.innerHTML = "";
 }
 function borrartextot1200(event) {
 event.preventDefault();
   var borrartextoeninput1200 = document.getElementById('t1200');
   borrartextoeninput1200.value = "";
 }
 function agregaTextot1215(event) {
  var inputNombret1215 = document.getElementById('t1215');
  var resultadoclickt1215 = document.getElementById('resultadodesdetabla').innerText;
    inputNombret1215.value = resultadoclickt1215;
    event.preventDefault();
    //luego de agregar el nombre seleccionado, LO BORRA
    let nombredelpaciente = document.getElementById("resultadodesdetabla");
    nombredelpaciente.innerHTML = "";
}
function borrartextot1215(event) {
event.preventDefault();
  var borrartextoeninput1215 = document.getElementById('t1215');
  borrartextoeninput1215.value = "";
}
function agregaTextot1230(event) {
  var inputNombret1230 = document.getElementById('t1230');
  var resultadoclickt1230 = document.getElementById('resultadodesdetabla').innerText;
    inputNombret1230.value = resultadoclickt1230;
    event.preventDefault();
    //luego de agregar el nombre seleccionado, LO BORRA
    let nombredelpaciente = document.getElementById("resultadodesdetabla");
    nombredelpaciente.innerHTML = "";
}
function borrartextot1230(event) {
event.preventDefault();
  var borrartextoeninput1230 = document.getElementById('t1230');
  borrartextoeninput1230.value = "";
}
function agregaTextot1245(event) {
  var inputNombret1245 = document.getElementById('t1245');
  var resultadoclickt1245 = document.getElementById('resultadodesdetabla').innerText;
    inputNombret1245.value = resultadoclickt1245;
    event.preventDefault();
    //luego de agregar el nombre seleccionado, LO BORRA
    let nombredelpaciente = document.getElementById("resultadodesdetabla");
    nombredelpaciente.innerHTML = "";
}
function borrartextot1245(event) {
event.preventDefault();
  var borrartextoeninput1245 = document.getElementById('t1245');
  borrartextoeninput1245.value = "";
}
function agregaTextot1600(event) {
  var inputNombret1600 = document.getElementById('t1600');
  var resultadoclickt1600 = document.getElementById('resultadodesdetabla').innerText;
    inputNombret1600.value = resultadoclickt1600;
    event.preventDefault();
    //luego de agregar el nombre seleccionado, LO BORRA
    let nombredelpaciente = document.getElementById("resultadodesdetabla");
    nombredelpaciente.innerHTML = "";
}
function borrartextot1600(event) {
event.preventDefault();
  var borrartextoeninput1600 = document.getElementById('t1600');
  borrartextoeninput1600.value = "";
}
function agregaTextot1615(event) {
  var inputNombret1615 = document.getElementById('t1615');
  var resultadoclickt1615 = document.getElementById('resultadodesdetabla').innerText;
    inputNombret1615.value = resultadoclickt1615;
    event.preventDefault();
    //luego de agregar el nombre seleccionado, LO BORRA
    let nombredelpaciente = document.getElementById("resultadodesdetabla");
    nombredelpaciente.innerHTML = "";
}
function borrartextot1615(event) {
event.preventDefault();
  var borrartextoeninput1615 = document.getElementById('t1615');
  borrartextoeninput1615.value = "";
}
function agregaTextot1630(event) {
  var inputNombret1630 = document.getElementById('t1630');
  var resultadoclickt1630 = document.getElementById('resultadodesdetabla').innerText;
    inputNombret1630.value = resultadoclickt1630;
    event.preventDefault();
    //luego de agregar el nombre seleccionado, LO BORRA
    let nombredelpaciente = document.getElementById("resultadodesdetabla");
    nombredelpaciente.innerHTML = "";
}
function borrartextot1630(event) {
event.preventDefault();
  var borrartextoeninput1630 = document.getElementById('t1630');
  borrartextoeninput1630.value = "";
}
function agregaTextot1645(event) {
  var inputNombret1645 = document.getElementById('t1645');
  var resultadoclickt1645 = document.getElementById('resultadodesdetabla').innerText;
    inputNombret1645.value = resultadoclickt1645;
    event.preventDefault();
    //luego de agregar el nombre seleccionado, LO BORRA
    let nombredelpaciente = document.getElementById("resultadodesdetabla");
    nombredelpaciente.innerHTML = "";
}
function borrartextot1645(event) {
event.preventDefault();
  var borrartextoeninput1645 = document.getElementById('t1645');
  borrartextoeninput1645.value = "";
}
function agregaTextot1700(event) {
  var inputNombret1700 = document.getElementById('t1700');
  var resultadoclickt1700 = document.getElementById('resultadodesdetabla').innerText;
    inputNombret1700.value = resultadoclickt1700;
    event.preventDefault();
    //luego de agregar el nombre seleccionado, LO BORRA
    let nombredelpaciente = document.getElementById("resultadodesdetabla");
    nombredelpaciente.innerHTML = "";
}
function borrartextot1700(event) {
event.preventDefault();
  var borrartextoeninput1700 = document.getElementById('t1700');
  borrartextoeninput1700.value = "";
}
function agregaTextot1715(event) {
  var inputNombret1715 = document.getElementById('t1715');
  var resultadoclickt1715 = document.getElementById('resultadodesdetabla').innerText;
    inputNombret1715.value = resultadoclickt1715;
    event.preventDefault();
    //luego de agregar el nombre seleccionado, LO BORRA
    let nombredelpaciente = document.getElementById("resultadodesdetabla");
    nombredelpaciente.innerHTML = "";
}
function borrartextot1715(event) {
event.preventDefault();
  var borrartextoeninput1715 = document.getElementById('t1715');
  borrartextoeninput1715.value = "";
}
function agregaTextot1730(event) {
  var inputNombret1730 = document.getElementById('t1730');
  var resultadoclickt1730 = document.getElementById('resultadodesdetabla').innerText;
    inputNombret1730.value = resultadoclickt1730;
    event.preventDefault();
    //luego de agregar el nombre seleccionado, LO BORRA
    let nombredelpaciente = document.getElementById("resultadodesdetabla");
    nombredelpaciente.innerHTML = "";
}
function borrartextot1730(event) {
event.preventDefault();
  var borrartextoeninput1730 = document.getElementById('t1730');
  borrartextoeninput1730.value = "";
}
function agregaTextot1745(event) {
  var inputNombret1745 = document.getElementById('t1745');
  var resultadoclickt1745 = document.getElementById('resultadodesdetabla').innerText;
    inputNombret1745.value = resultadoclickt1745;
    event.preventDefault();
    //luego de agregar el nombre seleccionado, LO BORRA
    let nombredelpaciente = document.getElementById("resultadodesdetabla");
    nombredelpaciente.innerHTML = "";
}
function borrartextot1745(event) {
event.preventDefault();
  var borrartextoeninput1745 = document.getElementById('t1745');
  borrartextoeninput1745.value = "";
}
function agregaTextot1800(event) {
  var inputNombret1800 = document.getElementById('t1800');
  var resultadoclickt1800 = document.getElementById('resultadodesdetabla').innerText;
    inputNombret1800.value = resultadoclickt1800;
    event.preventDefault();
    //luego de agregar el nombre seleccionado, LO BORRA
    let nombredelpaciente = document.getElementById("resultadodesdetabla");
    nombredelpaciente.innerHTML = "";
}
function borrartextot1800(event) {
event.preventDefault();
  var borrartextoeninput1800 = document.getElementById('t1800');
  borrartextoeninput1800.value = "";
}
function agregaTextot1815(event) {
  var inputNombret1815 = document.getElementById('t1815');
  var resultadoclickt1815 = document.getElementById('resultadodesdetabla').innerText;
    inputNombret1815.value = resultadoclickt1815;
    event.preventDefault();
    //luego de agregar el nombre seleccionado, LO BORRA
    let nombredelpaciente = document.getElementById("resultadodesdetabla");
    nombredelpaciente.innerHTML = "";
}
function borrartextot1815(event) {
event.preventDefault();
  var borrartextoeninput1815 = document.getElementById('t1815');
  borrartextoeninput1815.value = "";
}
function agregaTextot1830(event) {
  var inputNombret1830 = document.getElementById('t1830');
  var resultadoclickt1830 = document.getElementById('resultadodesdetabla').innerText;
    inputNombret1830.value = resultadoclickt1830;
    event.preventDefault();
    //luego de agregar el nombre seleccionado, LO BORRA
    let nombredelpaciente = document.getElementById("resultadodesdetabla");
    nombredelpaciente.innerHTML = "";
}
function borrartextot1830(event) {
event.preventDefault();
  var borrartextoeninput1830 = document.getElementById('t1830');
  borrartextoeninput1830.value = "";
}
function agregaTextot1845(event) {
  var inputNombret1845 = document.getElementById('t1845');
  var resultadoclickt1845 = document.getElementById('resultadodesdetabla').innerText;
    inputNombret1845.value = resultadoclickt1845;
    event.preventDefault();
    //luego de agregar el nombre seleccionado, LO BORRA
    let nombredelpaciente = document.getElementById("resultadodesdetabla");
    nombredelpaciente.innerHTML = "";
}
function borrartextot1845(event) {
event.preventDefault();
  var borrartextoeninput1845 = document.getElementById('t1845');
  borrartextoeninput1845.value = "";
}
function agregaTextot1900(event) {
  var inputNombret1900 = document.getElementById('t1900');
  var resultadoclickt1900 = document.getElementById('resultadodesdetabla').innerText;
    inputNombret1900.value = resultadoclickt1900;
    event.preventDefault();
    //luego de agregar el nombre seleccionado, LO BORRA
    let nombredelpaciente = document.getElementById("resultadodesdetabla");
    nombredelpaciente.innerHTML = "";
}
function borrartextot1900(event) {
event.preventDefault();
  var borrartextoeninput1900 = document.getElementById('t1900');
  borrartextoeninput1900.value = "";
}
function agregaTextot1915(event) {
  var inputNombret1915 = document.getElementById('t1915');
  var resultadoclickt1915 = document.getElementById('resultadodesdetabla').innerText;
    inputNombret1915.value = resultadoclickt1915;
    event.preventDefault();
    //luego de agregar el nombre seleccionado, LO BORRA
    let nombredelpaciente = document.getElementById("resultadodesdetabla");
    nombredelpaciente.innerHTML = "";
}
function borrartextot1915(event) {
event.preventDefault();
  var borrartextoeninput1915 = document.getElementById('t1915');
  borrartextoeninput1915.value = "";
}
function agregaTextot1930(event) {
  var inputNombret1930 = document.getElementById('t1930');
  var resultadoclickt1930 = document.getElementById('resultadodesdetabla').innerText;
    inputNombret1930.value = resultadoclickt1930;
    event.preventDefault();
    //luego de agregar el nombre seleccionado, LO BORRA
    let nombredelpaciente = document.getElementById("resultadodesdetabla");
    nombredelpaciente.innerHTML = "";
}
function borrartextot1930(event) {
event.preventDefault();
  var borrartextoeninput1930 = document.getElementById('t1930');
  borrartextoeninput1930.value = "";
}
function agregaTextot1945(event) {
  var inputNombret1945 = document.getElementById('t1945');
  var resultadoclickt1945 = document.getElementById('resultadodesdetabla').innerText;
    inputNombret1945.value = resultadoclickt1945;
    event.preventDefault();
    //luego de agregar el nombre seleccionado, LO BORRA
    let nombredelpaciente = document.getElementById("resultadodesdetabla");
    nombredelpaciente.innerHTML = "";
}
function borrartextot1945(event) {
event.preventDefault();
  var borrartextoeninput1945 = document.getElementById('t1945');
  borrartextoeninput1945.value = "";
}
function agregaTextot2000(event) {
  var inputNombret2000 = document.getElementById('t2000');
  var resultadoclickt2000 = document.getElementById('resultadodesdetabla').innerText;
    inputNombret2000.value = resultadoclickt2000;
    event.preventDefault();
    //luego de agregar el nombre seleccionado, LO BORRA
    let nombredelpaciente = document.getElementById("resultadodesdetabla");
    nombredelpaciente.innerHTML = "";
}
function borrartextot2000(event) {
event.preventDefault();
  var borrartextoeninput2000 = document.getElementById('t2000');
  borrartextoeninput2000.value = "";
}
function agregaTextot2015(event) {
  var inputNombret2015 = document.getElementById('t2015');
  var resultadoclickt2015 = document.getElementById('resultadodesdetabla').innerText;
    inputNombret2015.value = resultadoclickt2015;
    event.preventDefault();
    //luego de agregar el nombre seleccionado, LO BORRA
    let nombredelpaciente = document.getElementById("resultadodesdetabla");
    nombredelpaciente.innerHTML = "";
}
function borrartextot2015(event) {
event.preventDefault();
  var borrartextoeninput2015 = document.getElementById('t2015');
  borrartextoeninput2015.value = "";
}
function agregaTextot2030(event) {
  var inputNombret2030 = document.getElementById('t2030');
  var resultadoclickt2030 = document.getElementById('resultadodesdetabla').innerText;
    inputNombret2030.value = resultadoclickt2030;
    event.preventDefault();
    //luego de agregar el nombre seleccionado, LO BORRA
    let nombredelpaciente = document.getElementById("resultadodesdetabla");
    nombredelpaciente.innerHTML = "";
}
function borrartextot2030(event) {
event.preventDefault();
  var borrartextoeninput2030 = document.getElementById('t2030');
  borrartextoeninput2030.value = "";
}
function agregaTextot2045(event) {
  var inputNombret2045 = document.getElementById('t2045');
  var resultadoclickt2045 = document.getElementById('resultadodesdetabla').innerText;
    inputNombret2045.value = resultadoclickt2045;
    event.preventDefault();
    //luego de agregar el nombre seleccionado, LO BORRA
    let nombredelpaciente = document.getElementById("resultadodesdetabla");
    nombredelpaciente.innerHTML = "";
}
function borrartextot2045(event) {
event.preventDefault();
  var borrartextoeninput2045 = document.getElementById('t2045');
  borrartextoeninput2045.value = "";
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

//Boton para agregar el paciente a un resultado, luego en cada horario lo agrega o lo borra

function AgregaNombreyApellido(control) { 
  let nombredelpaciente = document.getElementById("resultadodesdetabla");
  nombredelpaciente.innerHTML = control.innerText;
}
function QuitaNombreyApellido(control) { 
  let nombredelpaciente = document.getElementById("resultadodesdetabla");
  nombredelpaciente.innerHTML = "";
}


  //  function AgregarPacienteturno800()
  //  {
  //   var resultadodelclicknombre = document.getElementById('resultadodesdetabla').innerText;
  //   var agregara800 = document.getElementById('t800');
  //    agregara800.innerText = resultadodelclicknombre;
  //   //console.log(resultadodelclicknombre);
  //  }


 
 


