function validaCampos(){
    if(validaEmail() == false){
        return false;
    }
    return true;
}

let inputEmail = document.forms["formulario"]["mail"];
inputEmail.addEventListener("blur",validaEmail,false);
function validaEmail(){
    let formulario = document.forms["formulario"];
    let email = formulario["mail"].value;
    let pattr = new RegExp("^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$");
    let span =  document.getElementById("msgemail");
    if(pattr.test(email) == false){
        span.innerHTML="Debe tener formato mail";
        return false
    }
    span.innerHTML="";
   
}