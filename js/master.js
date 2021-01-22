
document.getElementById("divRegistro").hidden=true;
document.getElementById("login-form-link").classList.add('active');
/*Función para que sea visible el apartado de registro en el modal */
function funcionRegistro(){

    document.getElementById("divLogin").hidden=false;
    document.getElementById("divRegistro").hidden=true;
    console.log("registro")
    document.getElementById("login-form-link").classList.add('active');
    document.getElementById("register-form-link").classList.remove('active');

}
/*Función para que sea visible el apartado de iniciar sesión en el modal */
function funcionInicarSesion(){
    document.getElementById("divRegistro").hidden = false;
    document.getElementById("divLogin").hidden=true;
    console.log("inicio")
    document.getElementById("register-form-link").classList.add('active');
    document.getElementById("login-form-link").classList.remove('active');

}
function showmodal(){
    $('#modalInicio').modal('show');

}