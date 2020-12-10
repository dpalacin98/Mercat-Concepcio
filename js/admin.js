function checkURL(){
    if(location.hash){
        var hash = location.hash.substring(1);
        toggle(hash);
    }
    else{
        toggle('');
    }
}

function toggle(tab){
    var divs = document.getElementsByClassName('menu');
    var navLink = document.getElementsByClassName('menul');
    for(var i = 0;i < divs.length;i++){
        divs[i].hidden = true;
        navLink[i].classList.remove('active');
    }
    if(tab != ''){
        var texto ='nav'+tab;
        document.getElementById(tab).hidden = false;
        document.getElementById('nav'+tab).classList.add('active');
    }
}
if(location.hash){
    var hash = location.hash.substring(1);
    toggle(hash);
}
function deleteUser(id){
    document.getElementById('deleteID').value=id;
    $('#deleteModal').modal('show');
}
function editUser(user){
    document.getElementById('titleModal').innerHTML = "Editar usuario";
    document.getElementById('modalButton').innerHTML = "Editar";
    document.getElementById('inputEmail').value = user.email;
    document.getElementById('inputNombre').value = user.nombre;
    document.getElementById('inputApellidos').value = user.apellido;
    document.getElementById('inputContraseña').value = user.contraseña;
    if(user.rol == 1){
        document.getElementById('admin').selected = true;
        document.getElementById('user').selected = false;
        }
    else{
        document.getElementById('user').selected = true;
        document.getElementById('admin').selected = false;
    }
    // document.getElementById('inputNivel').value = user.nivel;
    document.getElementById('inputPuntos').value = user.puntos;
    document.getElementById('modalButton').name = "edit";
    document.getElementById('idEdit').value=user.id;


    $('#addUserModal').modal('show');
}
function addUser(){

    document.getElementById('titleModal').innerHTML = "Añadir usuario";
    document.getElementById('modalButton').innerHTML = "Añadir";
    var input = document.getElementsByClassName("form-control");
    for (var i = 0;i <input.length;i++){
        input[i].value = "";
    }
    // // document.getElementById('inputNivel').value = user.nivel;
    document.getElementById('modalButton').name = "add";
    document.getElementById('admin').selected = false;
    document.getElementById('user').selected = true;

    $('#addUserModal').modal('show');
}
function addPromo(){
    $('#addPromoModal').modal('show');
}