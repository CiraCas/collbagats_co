
$(document).ready(function() {
    let mySelect = $('#adoptante').select2();
    mySelect.change(adoptante);
});

//let inputAdoptante = document.forms["formulario2"]["adoptante"];
//inputAdoptante.addEventListener("change", adoptante, false);

function adoptante() {
    let formulario = document.forms["formulario2"];
    let adoptante = formulario["adoptante"].value;
    
    let span =  document.getElementById("msgadoptante");
   
   
    if(adoptante != ""){

            span.innerHTML="";
        
    }else{
       
        span.innerHTML='Debes introducir un adoptante';
        return false
     }
}