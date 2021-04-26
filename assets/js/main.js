function validaContraseña(){
    if(validaPassword() == false){
        return false;
    }
    if(validaRepeticion() == false){
        return false;
    }
    return true;
}
let inputPassword = document.forms["formulario"]["password"];
inputPassword.addEventListener("mouseleave",validaPassword,false);
function validaPassword(){
    let formulario = document.forms["formulario"];
    let password = formulario["password"].value;
    let span =  document.getElementById("msgpassword");
    //en pattr añado el + porque sin el + si hacía un input de letra/numero/letra ejem= e5g fallaba y la que vimos en clase acepta tildes y _
    let pattr = new RegExp("^[0-9a-zA-Z]+$");
    let pattr2 = new RegExp("^.{4,9}$");
    if(pattr.test(password) == false){
        span.innerHTML="Password solo puede contener letras o números";
        return false
    }
    if(pattr2.test(password) == false){
    
        span.innerHTML="Password ha de tener entre 4 y 9 caracteres";
        return false
    }
    span.innerHTML=""; 
}
function validaRepeticion(){
    let formulario = document.forms["formulario"];
    let password = formulario["password"].value;
    let password2 = formulario["password2"].value;
    let span =  document.getElementById("msgpassword2");
    if(password != password2){
        span.innerHTML="Las contraseñas no coinciden";
        return false
    }
    span.innerHTML="";
}