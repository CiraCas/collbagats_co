function validaAdoptante(){
    if(nif() == false){
        return false;
    }
    return true;
}

let inputPassword = document.forms["formulario"]["dni"];
inputPassword.addEventListener("blur", nif, false);

function nif() {
    let formulario = document.forms["formulario"];
    let dni = formulario["dni"].value;
    let expresion_regular_dni;
    let span =  document.getElementById("msgdni");
   
    expresion_regular_dni = /^\d{8}[a-zA-Z]$/;
   
    if(expresion_regular_dni.test (dni) == true){

            span.innerHTML="";
        
    }else{
       
        span.innerHTML='Dni erroneo, formato no válido';
        return false
     }
}